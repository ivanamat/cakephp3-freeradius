<?php
namespace Freeradius\Controller;

use Freeradius\Controller\AppController;

/**
 * Radgroupreply Controller
 *
 * @property \Freeradius\Model\Table\RadgroupreplyTable $Radgroupreply
 */
class RadgroupreplyController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $radgroupreply = $this->paginate($this->Radgroupreply);

        $this->set(compact('radgroupreply'));
        $this->set('_serialize', ['radgroupreply']);
    }

    /**
     * View method
     *
     * @param string|null $id Radgroupreply id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $radgroupreply = $this->Radgroupreply->get($id, [
            'contain' => []
        ]);

        $this->set('radgroupreply', $radgroupreply);
        $this->set('_serialize', ['radgroupreply']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $radgroupreply = $this->Radgroupreply->newEntity();
        if ($this->request->is('post')) {
            $radgroupreply = $this->Radgroupreply->patchEntity($radgroupreply, $this->request->data);
            if ($this->Radgroupreply->save($radgroupreply)) {
                $this->Flash->success(__('The radgroupreply has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radgroupreply could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radgroupreply'));
        $this->set('_serialize', ['radgroupreply']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Radgroupreply id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $radgroupreply = $this->Radgroupreply->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $radgroupreply = $this->Radgroupreply->patchEntity($radgroupreply, $this->request->data);
            if ($this->Radgroupreply->save($radgroupreply)) {
                $this->Flash->success(__('The radgroupreply has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radgroupreply could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radgroupreply'));
        $this->set('_serialize', ['radgroupreply']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radgroupreply id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $radgroupreply = $this->Radgroupreply->get($id);
        if ($this->Radgroupreply->delete($radgroupreply)) {
            $this->Flash->success(__('The radgroupreply has been deleted.'));
        } else {
            $this->Flash->error(__('The radgroupreply could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
