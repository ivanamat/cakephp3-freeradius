<?php

/**
 * CakePHP 3.x - Freeradius
 * 
 * PHP version 5
 * 
 * Class DictionaryComponent
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @category CakePHP3
 * 
 * @package  Freeradius\Controller\Component
 * 
 * @author Ivan Amat <dev@ivanamat.es>
 * @copyright Copyright 2016, Iván Amat
 * @license MIT http://opensource.org/licenses/MIT
 * @link https://github.com/ivanamat/cakephp3-freeradius
 */

namespace Freeradius\Controller\Component;

use Cake\Controller\Component;
use Cake\Core\Plugin;
use Cake\ORM\TableRegistry;

/**
 * CakePHP DictionaryComponent
 * @author ivan
 */
class DictionaryComponent extends Component {
    
    private $DictionaryVendors = null;
    private $DictionaryAttributes = null;

    /**
     * Initialize the Component
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->DictionaryVendors = TableRegistry::get('Freeradius.DictionaryVendors');
        $this->DictionaryAttributes = TableRegistry::get('Freeradius.DictionaryAttributes');
        
    }
    
    public function attributes() {
        $attributes = [];
        return $attributes;
    }

    public function parse($file) {
        if (!is_file($file)) {
            return false;
        }

        $fp = fopen($file, 'r');
        $lines = [];

        while (!feof($fp)) {
            $line = fgets($fp, 2048);
            if (substr($line, 0, 9) === "ATTRIBUTE") {
                $delimiter = "\t";
                $line = str_replace(" ","\t",$line);
                $data = str_getcsv($line, $delimiter);
                $datadiff = array_diff($data, array('ATTRIBUTE'));
                $arr = array_filter($datadiff,'strlen');
                $array = array_values($arr);
                $item = [
                    'name' => $array[0],
                    'oid' => (int)$array[1],
                    'type' => $array[2]
                ];
                array_push($lines, $item);
            }
        }

        fclose($fp);

        return $lines;
    }
    
    public function updateAttributes($path,$vendorEntity) {
        $data = $this->parse($path);
        foreach ($data as $attribute) {
            $newAttributeEntity = $this->DictionaryAttributes->newEntity();
            $attribute['dictionary_vendor_id'] = $vendorEntity->id;
            $attributeEntity = $this->DictionaryAttributes->patchEntity($newAttributeEntity, $attribute);

            if(!$this->DictionaryAttributes->save($attributeEntity)) {
                return $attributeEntity->errors();
            }
        }
        
        return true;
    }

    public function update($path = null) {
        if($path == null) {
            $path = Plugin::path('Freeradius').'config/dictionary/';
        }
        
        if(is_file($path)) {
            $pathFile = explode('/', $path);
            $file = $pathFile[count($pathFile)-1];
            if(substr( $file, 0, 11 ) ===  "dictionary.") {
                $vendorName = str_replace('dictionary.','', $file);
                $newVendorEntity = $this->DictionaryVendors->newEntity();
                $vendorEntity = $this->DictionaryVendors->patchEntity($newVendorEntity, [
                    'name' => $vendorName
                ]);
                if ($this->DictionaryVendors->save($vendorEntity)) {
                    return $this->updateAttributes($path, $vendorEntity);
                }
            }
            return true;
        }
        
        if(is_dir($path)) {
            $files = scandir($path);
            foreach($files as $file) {
                if(is_file($path.$file) && substr( $file, 0, 11 ) === "dictionary.") {
                    $vendorName = str_replace('dictionary.','', $file);
                    $newVendorEntity = $this->DictionaryVendors->newEntity();
                    $vendorEntity = $this->DictionaryVendors->patchEntity($newVendorEntity, [
                        'name' => $vendorName
                    ]);
                    if ($this->DictionaryVendors->save($vendorEntity)) {
                        $this->updateAttributes($path.$file, $vendorEntity);
                    }
                }
            }
            
            return true;
        }
    }
}
