<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kamokus Controller
 *
 * @property \App\Model\Table\KamokusTable $Kamokus
 */
class KamokusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $kamokus = $this->paginate($this->Kamokus);

        $this->set(compact('kamokus'));
        $this->set('_serialize', ['kamokus']);
    }

    /**
     * View method
     *
     * @param string|null $id Kamokus id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kamokus = $this->Kamokus->get($id, [
            'contain' => []
        ]);

        $this->set('kamokus', $kamokus);
        $this->set('_serialize', ['kamokus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kamokus = $this->Kamokus->newEntity();
        if ($this->request->is('post')) {
            $kamokus = $this->Kamokus->patchEntity($kamokus, $this->request->data);
            if ($this->Kamokus->save($kamokus)) {
                $this->Flash->success(__('The kamokus has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kamokus could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kamokus'));
        $this->set('_serialize', ['kamokus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kamokus id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kamokus = $this->Kamokus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kamokus = $this->Kamokus->patchEntity($kamokus, $this->request->data);
            if ($this->Kamokus->save($kamokus)) {
                $this->Flash->success(__('The kamokus has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kamokus could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kamokus'));
        $this->set('_serialize', ['kamokus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kamokus id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kamokus = $this->Kamokus->get($id);
        if ($this->Kamokus->delete($kamokus)) {
            $this->Flash->success(__('The kamokus has been deleted.'));
        } else {
            $this->Flash->error(__('The kamokus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
