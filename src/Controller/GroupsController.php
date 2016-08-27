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

use Cake\Core\Plugin;
use Freeradius\Controller\AppController;

/**
 * Radgroupcheck Controller
 *
 * @property \Freeradius\Model\Table\RadgroupcheckTable $Radgroupcheck
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
        
        $this->loadModel('Freeradius.DictionaryVendors');
        $this->loadModel('Freeradius.DictionaryAttributes');
        
        // $this->loadComponent('Freeradius.Freeradius');
        $this->loadComponent('Freeradius.Dictionary');

        $this->Auth->allow('parse');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {

        $radgroupcheck = $this->Radgroupcheck->newEntity();
        $radgroupreply = $this->Radgroupreply->newEntity();

        if ($this->request->is('post')) {
            $this->request->data['op'] = ':=';
            $radgroupcheckData = [
                'groupname' => $this->request->data['groupname'],
                'attribute' => 'Framed-Protocol',
                'op' => '==',
                'value' => 'PPP'
            ];

            $radgroupreplyData = [
                'groupname' => $this->request->data['groupname'],
                'attribute' => 'Reply-Message',
                'op' => ':=',
                'value' => $this->request->data['reply_message']
            ];

            $radgroupcheck = $this->Radgroupcheck->patchEntity($radgroupcheck, $radgroupcheckData);
            $radgroupreply = $this->Radgroupreply->patchEntity($radgroupreply, $this->request->data);

            if ($this->Radgroupcheck->save($radgroupcheck)) {
                $this->Flash->success(__('The group has been saved.'));
            } else {
                $this->Flash->error(__('The group could not be saved. Please, try again.'));
            }
        }

        $groups = $this->paginate($this->Radgroupcheck);

        $this->set(compact('radgroupcheck', 'groups'));
        $this->set('_serialize', ['radgroupcheck', 'groups']);
    }

    /**
     * View method
     *
     * @param string|null $id Radgroupcheck id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $radcheck = $this->Radgroupcheck->get($id, [
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
        $radgroupcheck = $this->Radgroupcheck->newEntity();
        $radgroupreply = $this->Radgroupreply->newEntity();

        if ($this->request->is('post')) {
            $radgroupcheck = $this->Radgroupcheck->patchEntity($radgroupcheck, $this->request->data);
            $radgroupcheck = $this->Radgroupcheck->patchEntity($radgroupcheck, $this->request->data);

            if ($this->Radgroupcheck->save($radcheck)) {
                $this->Flash->success(__('The group has been saved.'));
            } else {
                $this->Flash->error(__('The group could not be saved. Please, try again.'));
            }
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Radgroupcheck id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($groupname = null) {

        $radgroupcheck = $this->Radgroupcheck->find('all')->where(['groupname' => $groupname])->toArray();
        $radgroupreply = $this->Radgroupreply->find('all')->where(['groupname' => $groupname])->toArray();
        $radusergroup = $this->Radusergroup->find('all')->where(['groupname' => $groupname])->toArray();
        
        $attributes = $this->Freeradius->attributes;

        if ($this->request->is(['patch', 'post', 'put'])) {
            debug($this->request->data).die();
            $radgroupcheck = $this->Radgroupcheck->patchEntity($radgroupcheck, $this->request->data);
            if ($this->Radgroupcheck->save($radgroupcheck)) {
                $this->Flash->success(__('The group has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The group could not be saved. Please, try again.'));
            }
        }

        $groups = $this->paginate($this->Radgroupcheck);

        $this->set(compact('attributes', 'radgroupcheck', 'radgroupreply', 'radusergroup'));
        $this->set('_serialize', ['attributes', 'radgroupcheck', 'radgroupreply', 'radusergroup']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radgroupcheck id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $radcheck = $this->Radgroupcheck->get($id);
        if ($this->Radgroupcheck->delete($radcheck)) {
            $this->Flash->success(__('The radcheck has been deleted.'));
        } else {
            $this->Flash->error(__('The radcheck could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}