<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    //$userName = $this->Auth->user('primeiro_nome');


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        
        $this->Auth->allow('edit');
        
    }
   
    public function login()
    {
        if ($this->request->is('post')) {              
                $user = $this->Auth->identify();
                if ($user) {
                    $this->Auth->setUser($user);
                    $loggedUser = $this->request->session()->read('Auth.User');
                    if($loggedUser['grupo_id'] == 1){
                        return $this->redirect('/');
                    }else if($loggedUser['grupo_id'] == 2){
                        return $this->redirect('/dirfaculdade/trabalhos/index');
                    }else if($loggedUser['grupo_id'] == 3){
                        return $this->redirect('/dirdirectorcurso/trabalhos/index');
                    }else if($loggedUser['grupo_id'] == 4){
                        return $this->redirect('/dirsupervisor/trabalhos/index');
                    }
                    else{
                        return $this->redirect($this->Auth->redirectUrl('/direstudante/trabalhos/index'));
                    }
                }else{
                    $this->Flash->error('Dados Invalidos, por favor tente novamente', ['key' => 'auth']);
                }
        }
    }


//Este metodo sai do sistema
    public function logout(){
        $this->Flash->success('Saiu do sistema com sucesso.');
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos'],
            'limit' => 10
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Grupos']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'User'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'User'));
            }
        }
        $grupos = $this->Users->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('user', 'grupos'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O {0} salvo com sucesso.', 'User'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O {0} não foi salvo. Tente novamente.', 'User'));
            }
        }
        $grupos = $this->Users->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('user', 'grupos'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('O {0} foi eleiminado sucesso.', 'User'));
        } else {
            $this->Flash->error(__('O {0} não foi eliminado. Tente novamente.', 'User'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
