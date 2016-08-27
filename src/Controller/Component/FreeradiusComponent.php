<?php

/**
 * CakePHP 3.x - Freeradius
 * 
 * PHP version 5
 * 
 * Class FreeradiusComponent
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

class FreeradiusComponent extends Component {
    
    private $Radcheck = null;
    private $Radreply = null;
    private $Radgroupcheck = null;
    private $Radgroupreply = null;
    private $Radusergroup = null;

    /**
     * Initialize the Component
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->Radcheck = TableRegistry::get('Freeradius.Radcheck');
        $this->Radreply = TableRegistry::get('Freeradius.Radreply');
        $this->Radgroupcheck = TableRegistry::get('Freeradius.Radgroupcheck');
        $this->Radgroupreply = TableRegistry::get('Freeradius.Radgroupreply');
        $this->Radusergroup = TableRegistry::get('Freeradius.Radusergroup');
        
        $this->loadComponent('Freeradius.Dictionary');
    }

}
