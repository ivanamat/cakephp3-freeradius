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
use Cake\ORM\TableRegistry;

/**
 * CakePHP DictionaryComponent
 * @author ivan
 */
class DictionaryComponent extends Component {

    /**
     * Initialize the Component
     */
    public function initialize(array $config) {
        parent::initialize($config);
        
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
                $arr = array_filter($datadiff);
                $chunk = array_chunk($arr, count($datadiff));
                array_push($lines, array_shift($chunk));
            }
        }

        fclose($fp);

        return $lines;
    }

}
