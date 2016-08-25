<?php
namespace Freeradius\Controller;

use Freeradius\Controller\AppController;

/**
 * DictionaryAttributes Controller
 *
 * @property \Freeradius\Model\Table\DictionaryAttributesTable $DictionaryAttributes
 */
class DictionaryAttributesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['DictionaryVendors']
        ];
        $dictionaryAttributes = $this->paginate($this->DictionaryAttributes);

        $this->set(compact('dictionaryAttributes'));
        $this->set('_serialize', ['dictionaryAttributes']);
    }

    /**
     * View method
     *
     * @param string|null $id Dictionary Attribute id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dictionaryAttribute = $this->DictionaryAttributes->get($id, [
            'contain' => ['DictionaryVendors']
        ]);

        $this->set('dictionaryAttribute', $dictionaryAttribute);
        $this->set('_serialize', ['dictionaryAttribute']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dictionaryAttribute = $this->DictionaryAttributes->newEntity();
        if ($this->request->is('post')) {
            $dictionaryAttribute = $this->DictionaryAttributes->patchEntity($dictionaryAttribute, $this->request->data);
            if ($this->DictionaryAttributes->save($dictionaryAttribute)) {
                $this->Flash->success(__('The dictionary attribute has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dictionary attribute could not be saved. Please, try again.'));
            }
        }
        $dictionaryVendors = $this->DictionaryAttributes->DictionaryVendors->find('list', ['limit' => 200]);
        $this->set(compact('dictionaryAttribute', 'dictionaryVendors'));
        $this->set('_serialize', ['dictionaryAttribute']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dictionary Attribute id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dictionaryAttribute = $this->DictionaryAttributes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dictionaryAttribute = $this->DictionaryAttributes->patchEntity($dictionaryAttribute, $this->request->data);
            if ($this->DictionaryAttributes->save($dictionaryAttribute)) {
                $this->Flash->success(__('The dictionary attribute has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dictionary attribute could not be saved. Please, try again.'));
            }
        }
        $dictionaryVendors = $this->DictionaryAttributes->DictionaryVendors->find('list', ['limit' => 200]);
        $this->set(compact('dictionaryAttribute', 'dictionaryVendors'));
        $this->set('_serialize', ['dictionaryAttribute']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dictionary Attribute id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dictionaryAttribute = $this->DictionaryAttributes->get($id);
        if ($this->DictionaryAttributes->delete($dictionaryAttribute)) {
            $this->Flash->success(__('The dictionary attribute has been deleted.'));
        } else {
            $this->Flash->error(__('The dictionary attribute could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
