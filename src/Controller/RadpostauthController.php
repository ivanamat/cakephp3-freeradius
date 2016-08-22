<?php
namespace Freeradius\Controller;

use Freeradius\Controller\AppController;

/**
 * Radpostauth Controller
 *
 * @property \Freeradius\Model\Table\RadpostauthTable $Radpostauth
 */
class RadpostauthController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $radpostauth = $this->paginate($this->Radpostauth);

        $this->set(compact('radpostauth'));
        $this->set('_serialize', ['radpostauth']);
    }

    /**
     * View method
     *
     * @param string|null $id Radpostauth id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $radpostauth = $this->Radpostauth->get($id, [
            'contain' => []
        ]);

        $this->set('radpostauth', $radpostauth);
        $this->set('_serialize', ['radpostauth']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $radpostauth = $this->Radpostauth->newEntity();
        if ($this->request->is('post')) {
            $radpostauth = $this->Radpostauth->patchEntity($radpostauth, $this->request->data);
            if ($this->Radpostauth->save($radpostauth)) {
                $this->Flash->success(__('The radpostauth has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radpostauth could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radpostauth'));
        $this->set('_serialize', ['radpostauth']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Radpostauth id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $radpostauth = $this->Radpostauth->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $radpostauth = $this->Radpostauth->patchEntity($radpostauth, $this->request->data);
            if ($this->Radpostauth->save($radpostauth)) {
                $this->Flash->success(__('The radpostauth has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radpostauth could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radpostauth'));
        $this->set('_serialize', ['radpostauth']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radpostauth id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $radpostauth = $this->Radpostauth->get($id);
        if ($this->Radpostauth->delete($radpostauth)) {
            $this->Flash->success(__('The radpostauth has been deleted.'));
        } else {
            $this->Flash->error(__('The radpostauth could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
