<?php

/**
 * CakePHP 3.x - Freeradius
 * 
 * PHP version 5
 * 
 * Class UsersController
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
class UsersController extends AppController {
    
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
     
        $this->loadModel('Freeradius.Radcheck');
        $this->loadModel('Freeradius.Radreply');
        $this->loadModel('Freeradius.Radgroupcheck');
        $this->loadModel('Freeradius.Radusergroup');
        
        $this->loadComponent('Freeradius.Freeradius');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $options = [
            'fields' => array('Radcheck.username'),
            'group' => 'Radcheck.username',
            'limit' => 10
        ];
        $users = $this->paginate($this->Radcheck,$options);
        
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $groups = $this->Radgroupcheck->find('all', [
            'fields' => array('DISTINCT Radgroupcheck.groupname','Radgroupcheck.groupname')
        ])->combine('id', 'groupname')->toArray();

        if ($this->request->is('post')) {
            $exist = $this->Radcheck->find('all', [
                'conditions' => ['Radcheck.username' => strtolower($this->request->data['username'])]
            ])->count();
            
            if($exist > 0) {
                $this->Flash->error(__('This username is already in use!'));
            }
        }
        
        if ($this->request->is('post') && !$exist) {
            $entities = $this->Freeradius->userAttributesEntities($this->request->data);
            
            foreach ($entities['RadcheckEntities'] as $entitie) {
                if(count($entitie->errors()) == 0) {
                    if(!$this->Radcheck->save($entitie)) {
                        $this->Flash->error(__('The attribute {0} could not be saved. Please, try again.',$entitie->attribute));
                    }
                }
            }

            foreach ($entities['RadreplyEntities'] as $entitie) {
                if(count($entitie->errors()) == 0) {
                    if(!$this->Radreply->save($entitie)) {
                        $this->Flash->error(__('The attribute {0} could not be saved. Please, try again.',$entitie->attribute));
                    }
                }
            }

            foreach ($entities['RadusergroupEntities'] as $entitie) {
                if(count($entitie->errors()) == 0) {
                    if(!$this->Radusergroup->save($entitie)) {
                        $this->Flash->error(__('The attribute {0} could not be saved. Please, try again.',$entitie->groupname));
                    }
                }
            }
            
            $this->Flash->success(__('The user has been saved.'));
            return $this->redirect(['action' => 'index']);
        }

        $this->set(compact('groups'));
        $this->set('_serialize', ['groups']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Radgroupcheck id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($username = null) {
        $radcheck = $this->Radcheck->find('all')
                ->where(['username' => $username])->all();

        $radreply = $this->Radreply->find('all')
                ->where(['username' => $username])->all();

        $radusergroup = $this->Radusergroup->find('all')
                ->where(['username' => $username])->all();

        $user = $this->Freeradius->userAttributesData($radcheck,$radreply,$radusergroup);
        $this->set(compact('username','radcheck','radreply','radusergroup','user'));        
        $this->set('_serialize', ['username','radcheck','radreply','radusergroup','user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Radcheck id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($username = null) {
        $radcheck = $this->Radcheck->find('all',[
            'conditions' => ['username' => $username]
        ])->all();
            
        $radreply = $this->Radreply->find('all',[
            'conditions' => ['username' => $username]
        ])->all();

        $radusergroup = $this->Radusergroup->find('all',[
            'conditions' => ['username' => $username]
        ])->all();

        $groups = $this->Radgroupcheck->find('all', [
            'fields' => array('DISTINCT Radgroupcheck.groupname','Radgroupcheck.groupname')
        ])->combine('groupname', 'groupname')->toArray();
        
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            
            $entities = $this->Freeradius->userAttributesEntities($this->request->data);
            
            $pt = $this->Freeradius->passwordTypes;
            
            foreach ($entities['RadcheckEntities'] as $entitie) {
                if(count($entitie->errors()) == 0) {
                    $attr = $this->Radcheck->find('all')->where([
                        'username' => $entitie->username,
                        'attribute' => $entitie->attribute
                    ])->first();
                    
                    if(!empty($attr)) {
                        $entitie->id = $attr->id;
                    }
                    
                    if(!$this->Radcheck->save($entitie)) {
                        $this->Flash->error(__('The attribute {0} could not be saved. Please, try again.',$entitie->attribute));
                    }
                } else {
                    if(!in_array($entitie->attribute, $pt)) {
                        $this->Radcheck->deleteAll([
                            'username' => $entitie->username,
                            'attribute' => $entitie->attribute
                        ]);
                    }
                }
            }

            foreach ($entities['RadreplyEntities'] as $entitie) {
                if(count($entitie->errors()) == 0) {
                    $attr = $this->Radreply->find('all')->where([
                        'username' => $entitie->username,
                        'attribute' => $entitie->attribute
                    ])->first();
                    
                    if(!empty($attr)) {
                        $entitie->id = $attr->id;
                    }
                    
                    if(!$this->Radreply->save($entitie)) {
                        $this->Flash->error(__('The attribute {0} could not be saved. Please, try again.',$entitie->attribute));
                    }
                } else {
                    $this->Radreply->deleteAll([
                        'username' => $entitie->username,
                        'attribute' => $entitie->attribute
                    ]);
                }
            }

            $this->Radusergroup->deleteAll([
                'username' => $entitie->username
            ]);
            
            foreach ($entities['RadusergroupEntities'] as $entitie) {
                if(count($entitie->errors()) == 0) {
                    $attr = $this->Radusergroup->find('all')->where([
                        'username' => $entitie->username,
                        'groupname' => $entitie->groupname
                    ])->first();
                    
                    if(!empty($attr)) {
                        $entitie->id = $attr->id;
                    }
                    
                    if(!$this->Radusergroup->save($entitie)) {
                        $this->Flash->error(__('The attribute {0} could not be saved. Please, try again.',$entitie->groupname));
                    }
                }
            }
            
            $this->Flash->success(__('The user has been updated.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->request->data = $this->Freeradius->userAttributesData($radcheck,$radreply,$radusergroup);
        }
        
        $this->set(compact('groups'));
        $this->set('_serialize', ['groups']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radcheck id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($username = null) {
        $this->request->allowMethod(['post', 'delete']);
        
        $radcheck = $this->Radcheck->deleteAll(['username' => $username]);
        $radreply = $this->Radreply->deleteAll(['username' => $username]);
        $radusergroup = $this->Radusergroup->deleteAll(['username' => $username]);
        
        $this->Flash->success(__('The user has been deleted.'));

        return $this->redirect(['action' => 'index']);
    }

}
