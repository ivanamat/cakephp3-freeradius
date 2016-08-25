<?php
namespace Freeradius\Controller;

use Freeradius\Controller\AppController;

/**
 * DictionaryVendors Controller
 *
 * @property \Freeradius\Model\Table\DictionaryVendorsTable $DictionaryVendors
 */
class DictionaryVendorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $dictionaryVendors = $this->paginate($this->DictionaryVendors);

        $this->set(compact('dictionaryVendors'));
        $this->set('_serialize', ['dictionaryVendors']);
    }

    /**
     * View method
     *
     * @param string|null $id Dictionary Vendor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dictionaryVendor = $this->DictionaryVendors->get($id, [
            'contain' => ['DictionaryAttributes']
        ]);

        $this->set('dictionaryVendor', $dictionaryVendor);
        $this->set('_serialize', ['dictionaryVendor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dictionaryVendor = $this->DictionaryVendors->newEntity();
        if ($this->request->is('post')) {
            $dictionaryVendor = $this->DictionaryVendors->patchEntity($dictionaryVendor, $this->request->data);
            if ($this->DictionaryVendors->save($dictionaryVendor)) {
                $this->Flash->success(__('The dictionary vendor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dictionary vendor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dictionaryVendor'));
        $this->set('_serialize', ['dictionaryVendor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dictionary Vendor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dictionaryVendor = $this->DictionaryVendors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dictionaryVendor = $this->DictionaryVendors->patchEntity($dictionaryVendor, $this->request->data);
            if ($this->DictionaryVendors->save($dictionaryVendor)) {
                $this->Flash->success(__('The dictionary vendor has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dictionary vendor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dictionaryVendor'));
        $this->set('_serialize', ['dictionaryVendor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dictionary Vendor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dictionaryVendor = $this->DictionaryVendors->get($id);
        if ($this->DictionaryVendors->delete($dictionaryVendor)) {
            $this->Flash->success(__('The dictionary vendor has been deleted.'));
        } else {
            $this->Flash->error(__('The dictionary vendor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
