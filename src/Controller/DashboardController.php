<?php

/**
 * CakePHP 3.x - Freeradius
 * 
 * PHP version 5
 * 
 * Class DashboardController
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @category CakePHP3
 * 
 * @package  Freeradius\Controller
 * 
 * @author Ivan Amat <dev@ivanamat.es>
 * @copyright Copyright 2016, Iván Amat
 * @license MIT http://opensource.org/licenses/MIT
 * @link http://git.ivanamat.es/wifi-manager/freeradius
 */

namespace Freeradius\Controller;

use Cake\Core\Plugin;
use Freeradius\Controller\AppController;

class DashboardController extends AppController {

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();
        
        $this->loadComponent('Freeradius.Dictionary');
    }

    public function index() {
        
    }

}
