<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Diagnosticos Controller
 *
 * @property \App\Model\Table\DiagnosticosTable $Diagnosticos
 *
 * @method \App\Model\Entity\Diagnostico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiagnosticosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $diagnosticos = $this->paginate($this->Diagnosticos);

        $this->set(compact('diagnosticos'));
    }

    /**
     * View method
     *
     * @param string|null $id Diagnostico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diagnostico = $this->Diagnosticos->get($id, [
            'contain' => ['Tratamentos']
        ]);

        $this->set('diagnostico', $diagnostico);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diagnostico = $this->Diagnosticos->newEntity();
        if ($this->request->is('post')) {
            $diagnostico = $this->Diagnosticos->patchEntity($diagnostico, $this->request->data);
            if ($this->Diagnosticos->save($diagnostico)) {
                $this->Flash->success(__('The {0} has been saved.', 'Diagnostico'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Diagnostico'));
            }
        }
        $this->set(compact('diagnostico'));
        $this->set('_serialize', ['diagnostico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Diagnostico id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diagnostico = $this->Diagnosticos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diagnostico = $this->Diagnosticos->patchEntity($diagnostico, $this->request->data);
            if ($this->Diagnosticos->save($diagnostico)) {
                $this->Flash->success(__('The {0} has been saved.', 'Diagnostico'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Diagnostico'));
            }
        }
        $this->set(compact('diagnostico'));
        $this->set('_serialize', ['diagnostico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Diagnostico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diagnostico = $this->Diagnosticos->get($id);
        if ($this->Diagnosticos->delete($diagnostico)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Diagnostico'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Diagnostico'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
