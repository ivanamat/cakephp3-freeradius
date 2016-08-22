<?php

/**
 * CakePHP 3.x - Freeradius
 * 
 * PHP version 5
 * 
 * Class RadgroupcheckController
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
 * Radgroupcheck Controller
 *
 * @property \Freeradius\Model\Table\RadgroupcheckTable $Radgroupcheck
 */
class RadgroupcheckController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $radgroupcheck = $this->paginate($this->Radgroupcheck);

        $this->set(compact('radgroupcheck'));
        $this->set('_serialize', ['radgroupcheck']);
    }

    /**
     * View method
     *
     * @param string|null $id Radgroupcheck id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $radgroupcheck = $this->Radgroupcheck->get($id, [
            'contain' => []
        ]);

        $this->set('radgroupcheck', $radgroupcheck);
        $this->set('_serialize', ['radgroupcheck']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $radgroupcheck = $this->Radgroupcheck->newEntity();
        if ($this->request->is('post')) {
            $radgroupcheck = $this->Radgroupcheck->patchEntity($radgroupcheck, $this->request->data);
            if ($this->Radgroupcheck->save($radgroupcheck)) {
                $this->Flash->success(__('The radgroupcheck has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radgroupcheck could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radgroupcheck'));
        $this->set('_serialize', ['radgroupcheck']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Radgroupcheck id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $radgroupcheck = $this->Radgroupcheck->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $radgroupcheck = $this->Radgroupcheck->patchEntity($radgroupcheck, $this->request->data);
            if ($this->Radgroupcheck->save($radgroupcheck)) {
                $this->Flash->success(__('The radgroupcheck has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radgroupcheck could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radgroupcheck'));
        $this->set('_serialize', ['radgroupcheck']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radgroupcheck id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $radgroupcheck = $this->Radgroupcheck->get($id);
        if ($this->Radgroupcheck->delete($radgroupcheck)) {
            $this->Flash->success(__('The radgroupcheck has been deleted.'));
        } else {
            $this->Flash->error(__('The radgroupcheck could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
