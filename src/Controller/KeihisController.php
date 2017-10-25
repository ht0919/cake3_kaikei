<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Keihis Controller
 *
 * @property \App\Model\Table\KeihisTable $Keihis
 */
class KeihisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Kamokus']
        ];
        $keihis = $this->paginate($this->Keihis);

        $this->set(compact('keihis'));
        $this->set('_serialize', ['keihis']);
    }

    /**
     * View method
     *
     * @param string|null $id Keihi id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $keihi = $this->Keihis->get($id, [
            'contain' => ['Kamokus']
        ]);

        $this->set('keihi', $keihi);
        $this->set('_serialize', ['keihi']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $keihi = $this->Keihis->newEntity();
        if ($this->request->is('post')) {
            $keihi = $this->Keihis->patchEntity($keihi, $this->request->data);
            if ($this->Keihis->save($keihi)) {
                $this->Flash->success(__('The keihi has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The keihi could not be saved. Please, try again.'));
            }
        }
        $kamokus = $this->Keihis->Kamokus->find('list', ['limit' => 200]);
        $this->set(compact('keihi', 'kamokus'));
        $this->set('_serialize', ['keihi']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Keihi id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $keihi = $this->Keihis->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $keihi = $this->Keihis->patchEntity($keihi, $this->request->data);
            if ($this->Keihis->save($keihi)) {
                $this->Flash->success(__('The keihi has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The keihi could not be saved. Please, try again.'));
            }
        }
        $kamokus = $this->Keihis->Kamokus->find('list', ['limit' => 200]);
        $this->set(compact('keihi', 'kamokus'));
        $this->set('_serialize', ['keihi']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Keihi id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $keihi = $this->Keihis->get($id);
        if ($this->Keihis->delete($keihi)) {
            $this->Flash->success(__('The keihi has been deleted.'));
        } else {
            $this->Flash->error(__('The keihi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
