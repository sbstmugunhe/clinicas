<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Campanhas Controller
 *
 * @property \App\Model\Table\CampanhasTable $Campanhas
 *
 * @method \App\Model\Entity\Campanha[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampanhasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Unidades', 'Users']
        ];
        $campanhas = $this->paginate($this->Campanhas);

        $this->set(compact('campanhas'));
    }

    /**
     * View method
     *
     * @param string|null $id Campanha id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campanha = $this->Campanhas->get($id, [
            'contain' => ['Unidades', 'Users']
        ]);

        $this->set('campanha', $campanha);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campanha = $this->Campanhas->newEntity();
        if ($this->request->is('post')) {
            $campanha = $this->Campanhas->patchEntity($campanha, $this->request->data);
            if ($this->Campanhas->save($campanha)) {
                $this->Flash->success(__('The {0} has been saved.', 'Campanha'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Campanha'));
            }
        }
        $unidades = $this->Campanhas->Unidades->find('list', ['limit' => 200]);
        $users = $this->Campanhas->Users->find('list', ['limit' => 200]);
        $this->set(compact('campanha', 'unidades', 'users'));
        $this->set('_serialize', ['campanha']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Campanha id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campanha = $this->Campanhas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campanha = $this->Campanhas->patchEntity($campanha, $this->request->data);
            if ($this->Campanhas->save($campanha)) {
                $this->Flash->success(__('The {0} has been saved.', 'Campanha'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Campanha'));
            }
        }
        $unidades = $this->Campanhas->Unidades->find('list', ['limit' => 200]);
        $users = $this->Campanhas->Users->find('list', ['limit' => 200]);
        $this->set(compact('campanha', 'unidades', 'users'));
        $this->set('_serialize', ['campanha']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Campanha id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campanha = $this->Campanhas->get($id);
        if ($this->Campanhas->delete($campanha)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Campanha'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Campanha'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
