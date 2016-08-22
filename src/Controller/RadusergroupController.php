<?php
namespace Freeradius\Controller;

use Freeradius\Controller\AppController;

/**
 * Radusergroup Controller
 *
 * @property \Freeradius\Model\Table\RadusergroupTable $Radusergroup
 */
class RadusergroupController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $radusergroup = $this->paginate($this->Radusergroup);

        $this->set(compact('radusergroup'));
        $this->set('_serialize', ['radusergroup']);
    }

    /**
     * View method
     *
     * @param string|null $id Radusergroup id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $radusergroup = $this->Radusergroup->get($id, [
            'contain' => []
        ]);

        $this->set('radusergroup', $radusergroup);
        $this->set('_serialize', ['radusergroup']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $radusergroup = $this->Radusergroup->newEntity();
        if ($this->request->is('post')) {
            $radusergroup = $this->Radusergroup->patchEntity($radusergroup, $this->request->data);
            if ($this->Radusergroup->save($radusergroup)) {
                $this->Flash->success(__('The radusergroup has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radusergroup could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radusergroup'));
        $this->set('_serialize', ['radusergroup']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Radusergroup id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $radusergroup = $this->Radusergroup->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $radusergroup = $this->Radusergroup->patchEntity($radusergroup, $this->request->data);
            if ($this->Radusergroup->save($radusergroup)) {
                $this->Flash->success(__('The radusergroup has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The radusergroup could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('radusergroup'));
        $this->set('_serialize', ['radusergroup']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Radusergroup id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $radusergroup = $this->Radusergroup->get($id);
        if ($this->Radusergroup->delete($radusergroup)) {
            $this->Flash->success(__('The radusergroup has been deleted.'));
        } else {
            $this->Flash->error(__('The radusergroup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
