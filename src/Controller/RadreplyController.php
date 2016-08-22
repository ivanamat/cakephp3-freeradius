<?php
namespace Freeradius\Controller;

use Freeradius\Controller\AppController;

/**
 * Radreply Controller
 *
 * @property \Freeradius\Model\Table\RadreplyTable $Radreply
 */
class RadreplyController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $radreply = $this->paginate($this->Radreply);

        $this->set(compact('radreply'));
        $this->set('_serialize', ['radreply']);
    }

    /**
     * View method
     *
     * @param string|null $id Radreply id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $radreply = $this->Radreply->get($id, [
            'contain' => []
        ]);

        $this->set('radreply', $radreply);
        $this->set('_serialize', ['radreply']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $radreply = $this->Radreply->newEntity();
        if ($this->request->is('post')) {
            $radreply = $this->Radreply->patchEntity($radreply, $this->request->data);
            if ($this->Radreply->save($radreply)) {
                $this->Flash->success(__('The radreply has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radreply could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radreply'));
        $this->set('_serialize', ['radreply']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Radreply id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $radreply = $this->Radreply->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $radreply = $this->Radreply->patchEntity($radreply, $this->request->data);
            if ($this->Radreply->save($radreply)) {
                $this->Flash->success(__('The radreply has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radreply could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radreply'));
        $this->set('_serialize', ['radreply']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radreply id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $radreply = $this->Radreply->get($id);
        if ($this->Radreply->delete($radreply)) {
            $this->Flash->success(__('The radreply has been deleted.'));
        } else {
            $this->Flash->error(__('The radreply could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
