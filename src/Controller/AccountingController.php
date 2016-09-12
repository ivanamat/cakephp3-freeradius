<?php

/**
 * CakePHP 3.x - Freeradius
 * 
 * PHP version 5
 * 
 * Class RadacctController
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
 * @link https://github.com/ivanamat/cakephp3-documents
 */

namespace Freeradius\Controller;

use Freeradius\Controller\AppController;

/**
 * Radacct Controller
 *
 * @property \Freeradius\Model\Table\RadacctTable $Radacct
 */
class AccountingController extends AppController {
    
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
     
        $this->loadModel('Freeradius.Radacct');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'limit' => 25,
            'order' => [
                'Radacct.acctstarttime' => 'desc'
            ]
        ];
        $radacct = $this->paginate($this->Radacct);

        $this->set(compact('radacct'));
        $this->set('_serialize', ['radacct']);
    }

    /**
     * View method
     *
     * @param string|null $id Radacct id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $radacct = $this->Radacct->get($id, [
            'contain' => []
        ]);

        $this->set('radacct', $radacct);
        $this->set('_serialize', ['radacct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radacct id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $radacct = $this->Radacct->get($id);
        if ($this->Radacct->delete($radacct)) {
            $this->Flash->success(__('The radacct has been deleted.'));
        } else {
            $this->Flash->error(__('The radacct could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
