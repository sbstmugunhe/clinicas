<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Unidades Controller
 *
 * @property \App\Model\Table\UnidadesTable $Unidades
 *
 * @method \App\Model\Entity\Unidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UnidadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Distritos']
        ];
        $unidades = $this->paginate($this->Unidades);

        $this->set(compact('unidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $unidade = $this->Unidades->get($id, [
            'contain' => ['Categories', 'Distritos']
        ]);

        $this->set('unidade', $unidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unidade = $this->Unidades->newEntity();
        if ($this->request->is('post')) {
            $unidade = $this->Unidades->patchEntity($unidade, $this->request->data);
            if ($this->Unidades->save($unidade)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Unidade'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Unidade'));
            }
        }
        $categories = $this->Unidades->Categories->find('list', ['limit' => 200]);
        $distritos = $this->Unidades->Distritos->find('list', ['limit' => 200]);
        $this->set(compact('unidade', 'categories', 'distritos'));
        $this->set('_serialize', ['unidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unidade = $this->Unidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidade = $this->Unidades->patchEntity($unidade, $this->request->data);
            if ($this->Unidades->save($unidade)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Unidade'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Unidade'));
            }
        }
        $categories = $this->Unidades->Categories->find('list', ['limit' => 200]);
        $distritos = $this->Unidades->Distritos->find('list', ['limit' => 200]);
        $this->set(compact('unidade', 'categories', 'distritos'));
        $this->set('_serialize', ['unidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Unidade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unidade = $this->Unidades->get($id);
        if ($this->Unidades->delete($unidade)) {
            $this->Flash->success(__('O {0} foi eleiminado sucesso.', 'Unidade'));
        } else {
            $this->Flash->error(__('O {0} não foi eliminado. Tente novamente.', 'Unidade'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
