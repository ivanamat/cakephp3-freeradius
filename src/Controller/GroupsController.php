<?php

/**
 * CakePHP 3.x - Freeradius
 * 
 * PHP version 5
 * 
 * Class GroupsController
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
 * @link http://git.ivanamat.es/wifi-manager/wifi-manager-www
 */

namespace Freeradius\Controller;

use Freeradius\Controller\AppController;

/**
 * Radcheck Controller
 *
 * @property \Freeradius\Model\Table\RadcheckTable $Radcheck
 */
class GroupsController extends AppController {
    
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
     
        $this->loadModel('Freeradius.Radgroupcheck');
        $this->loadModel('Freeradius.Radgroupreply');
        $this->loadModel('Freeradius.Radusergroup');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $radcheck = $this->paginate($this->Radgroupcheck);
        
        $groups = $radcheck;

        $this->set(compact('groups'));
        $this->set('_serialize', ['groups']);
    }

    /**
     * View method
     *
     * @param string|null $id Radcheck id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $radcheck = $this->Radcheck->get($id, [
            'contain' => []
        ]);

        $this->set('radcheck', $radcheck);
        $this->set('_serialize', ['radcheck']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $radcheck = $this->Radcheck->newEntity();
        
        if ($this->request->is('post')) {
            $this->request->data['op'] = ':=';
            $radcheck = $this->Radcheck->patchEntity($radcheck, $this->request->data);
            
            if ($this->Radcheck->save($radcheck)) {
                $this->Flash->success(__('The user has been saved.'));

                // return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        
        return $this->redirect(['action' => 'index']);
        
        // $this->set(compact('radcheck'));
        // $this->set('_serialize', ['radcheck']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Radcheck id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $radcheck = $this->Radcheck->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $radcheck = $this->Radcheck->patchEntity($radcheck, $this->request->data);
            if ($this->Radcheck->save($radcheck)) {
                $this->Flash->success(__('The radcheck has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radcheck could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radcheck'));
        $this->set('_serialize', ['radcheck']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radcheck id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $radcheck = $this->Radcheck->get($id);
        if ($this->Radcheck->delete($radcheck)) {
            $this->Flash->success(__('The radcheck has been deleted.'));
        } else {
            $this->Flash->error(__('The radcheck could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}