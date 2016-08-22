<?php

/**
 * CakePHP 3.x - Freeradius
 * 
 * PHP version 5
 * 
 * Class NasController
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
 * Nas Controller
 *
 * @property \Freeradius\Model\Table\NasTable $Nas
 */
class NasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $nas = $this->paginate($this->Nas);

        $this->set(compact('nas'));
        $this->set('_serialize', ['nas']);
    }

    /**
     * View method
     *
     * @param string|null $id Na id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $na = $this->Nas->get($id, [
            'contain' => []
        ]);

        $this->set('na', $na);
        $this->set('_serialize', ['na']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $na = $this->Nas->newEntity();
        if ($this->request->is('post')) {
            $na = $this->Nas->patchEntity($na, $this->request->data);
            if ($this->Nas->save($na)) {
                $this->Flash->success(__('The na has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The na could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('na'));
        $this->set('_serialize', ['na']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Na id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $na = $this->Nas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $na = $this->Nas->patchEntity($na, $this->request->data);
            if ($this->Nas->save($na)) {
                $this->Flash->success(__('The na has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The na could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('na'));
        $this->set('_serialize', ['na']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Na id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $na = $this->Nas->get($id);
        if ($this->Nas->delete($na)) {
            $this->Flash->success(__('The na has been deleted.'));
        } else {
            $this->Flash->error(__('The na could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
