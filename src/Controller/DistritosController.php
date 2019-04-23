<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Distritos Controller
 *
 * @property \App\Model\Table\DistritosTable $Distritos
 *
 * @method \App\Model\Entity\Distrito[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DistritosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $distritos = $this->paginate($this->Distritos);

        $this->set(compact('distritos'));
    }

    /**
     * View method
     *
     * @param string|null $id Distrito id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $distrito = $this->Distritos->get($id, [
            'contain' => ['Unidades']
        ]);

        $this->set('distrito', $distrito);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $distrito = $this->Distritos->newEntity();
        if ($this->request->is('post')) {
            $distrito = $this->Distritos->patchEntity($distrito, $this->request->data);
            if ($this->Distritos->save($distrito)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Distrito'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Distrito'));
            }
        }
        $this->set(compact('distrito'));
        $this->set('_serialize', ['distrito']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Distrito id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $distrito = $this->Distritos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $distrito = $this->Distritos->patchEntity($distrito, $this->request->data);
            if ($this->Distritos->save($distrito)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'Distrito'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'Distrito'));
            }
        }
        $this->set(compact('distrito'));
        $this->set('_serialize', ['distrito']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Distrito id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $distrito = $this->Distritos->get($id);
        if ($this->Distritos->delete($distrito)) {
            $this->Flash->success(__('O {0} foi eleiminado sucesso.', 'Distrito'));
        } else {
            $this->Flash->error(__('O {0} não foi eliminado. Tente novamente.', 'Distrito'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
