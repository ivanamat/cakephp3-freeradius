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
class RadacctController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
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
    public function view($id = null)
    {
        $radacct = $this->Radacct->get($id, [
            'contain' => []
        ]);

        $this->set('radacct', $radacct);
        $this->set('_serialize', ['radacct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $radacct = $this->Radacct->newEntity();
        if ($this->request->is('post')) {
            $radacct = $this->Radacct->patchEntity($radacct, $this->request->data);
            if ($this->Radacct->save($radacct)) {
                $this->Flash->success(__('The radacct has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radacct could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radacct'));
        $this->set('_serialize', ['radacct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Radacct id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $radacct = $this->Radacct->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $radacct = $this->Radacct->patchEntity($radacct, $this->request->data);
            if ($this->Radacct->save($radacct)) {
                $this->Flash->success(__('The radacct has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radacct could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radacct'));
        $this->set('_serialize', ['radacct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radacct id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
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
