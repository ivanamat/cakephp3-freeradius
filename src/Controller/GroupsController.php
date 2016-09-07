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
        
        $this->loadComponent('Freeradius.Freeradius');
        $this->loadComponent('Freeradius.Dictionary');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $options = [
            'fields' => array('Radgroupcheck.groupname'),
            'group' => 'Radgroupcheck.groupname',
            'limit' => 10
        ];
        
        $groups = $this->paginate($this->Radgroupcheck, $options);

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
    public function view($groupname = null) {
        $radgroupcheck = $this->Radgroupcheck->find('all')
                ->where(['groupname' => $groupname])->all();

        $radgroupreply = $this->Radgroupreply->find('all')
                ->where(['groupname' => $groupname])->all();

        $radusergroup = $this->Radusergroup->find('all')
                ->where(['groupname' => $groupname])->all();

        $group = $this->Freeradius->groupAttributesData($radgroupcheck,$radgroupreply,$radusergroup);
        $this->set(compact('groupname','radgroupcheck','radgroupreply','radusergroup','group'));        
        $this->set('_serialize', ['groupname','radgroupcheck','radgroupreply','radusergroup','group']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        
        if ($this->request->is('post')) {
            
//            debug($this->request->data).die();
            $entities = $this->Freeradius->groupAttributesEntities($this->request->data);
            
            foreach ($entities['RadgroupcheckEntities'] as $entitie) {
                if(count($entitie->errors()) == 0) {
                    if(!$this->Radgroupcheck->save($entitie)) {
                        $this->Flash->error(__('The attribute {0} could not be saved. Please, try again.',$entitie->attribute));
                    }
                }
            }

            foreach ($entities['RadgroupreplyEntities'] as $entitie) {
                if(count($entitie->errors()) == 0) {
                    if(!$this->Radgroupreply->save($entitie)) {
                        $this->Flash->error(__('The attribute {0} could not be saved. Please, try again.',$entitie->attribute));
                    }
                }
            }
            
            $this->Flash->success(__('The group has been saved.'));
            return $this->redirect(['action' => 'index']);
        }

    }

/**
     * Edit method
     *
     * @param string|null $id Radcheck id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($groupname = null) {
        $radgroupcheck = $this->Radgroupcheck->find('all',[
            'conditions' => ['groupname' => $groupname]
        ])->all();
            
        $radgroupreply = $this->Radgroupreply->find('all',[
            'conditions' => ['groupname' => $groupname]
        ])->all();

        $radusergroup = $this->Radusergroup->find('all',[
            'conditions' => ['groupname' => $groupname]
        ])->all();

        $users = $this->Radusergroup->find('all', [
            'fields' => array('DISTINCT Radusergroup.username','Radusergroup.username')
        ])->combine('id', 'username')->toArray();
        
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entities = $this->Freeradius->groupAttributesEntities($this->request->data);
//            debug($this->request->data).die();
            foreach ($entities['RadgroupcheckEntities'] as $entitie) {
                if(count($entitie->errors()) == 0) {
                    $attr = $this->Radgroupcheck->find('all')->where([
                        'groupname' => $entitie->groupname,
                        'attribute' => $entitie->attribute
                    ])->first();
                    
                    if(!empty($attr)) {
                        $entitie->id = $attr->id;
                    }
                    
                    if(!$this->Radgroupcheck->save($entitie)) {
                        $this->Flash->error(__('The attribute {0} could not be saved. Please, try again.',$entitie->attribute));
                    }
                } else {
                    $this->Radgroupcheck->deleteAll([
                        'groupname' => $entitie->groupname,
                        'attribute' => $entitie->attribute
                    ]);
                }
            }

            foreach ($entities['RadgroupreplyEntities'] as $entitie) {
                if(count($entitie->errors()) == 0) {
                    $attr = $this->Radgroupreply->find('all')->where([
                        'groupname' => $entitie->groupname,
                        'attribute' => $entitie->attribute
                    ])->first();
                    
                    if(!empty($attr)) {
                        $entitie->id = $attr->id;
                    }
                    
                    if(!$this->Radgroupreply->save($entitie)) {
                        $this->Flash->error(__('The attribute {0} could not be saved. Please, try again.',$entitie->attribute));
                    }
                } else {
                    $this->Radgroupreply->deleteAll([
                        'groupname' => $entitie->groupname,
                        'attribute' => $entitie->attribute
                    ]);
                }
            }
            
            $this->Flash->success(__('The group has been updated.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->request->data = $this->Freeradius->groupAttributesData($radgroupcheck,$radgroupreply,$radusergroup);
        }
        
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radgroupcheck id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($groupname = null) {
        $this->request->allowMethod(['post', 'delete']);
        
        $radgroupcheck = $this->Radgroupcheck->deleteAll(['groupname' => $groupname]);
        $radgroupreply = $this->Radgroupreply->deleteAll(['groupname' => $groupname]);
        $radusergroup = $this->Radusergroup->deleteAll(['groupname' => $groupname]);
        
        $this->Flash->success(__('The group has been deleted.'));

        return $this->redirect(['action' => 'index']);
    }
}