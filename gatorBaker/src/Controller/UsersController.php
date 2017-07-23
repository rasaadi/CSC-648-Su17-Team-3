<?php
/**
 * Created by PhpStorm.
 * User: Takahiro
 * Date: 2017/07/19
 * Time: 6:54
 */
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        //
        $this->Auth->allow('add', 'logout');
    }

    public function index()
    {
        $this->set('registered_users', $this->Users->find('all'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }


    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());
            } else {
                $this->Flash->error(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

}