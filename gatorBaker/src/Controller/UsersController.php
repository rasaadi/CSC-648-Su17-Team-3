<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Controller\Component\AuthComponent;


class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {

        parent::beforeFilter($event);
        $components = array(
            'Auth' => array(
                //
                'authenticate' => array(
                    'Form' => array(
                        // changing the default DB setting into test_user']]

                        // change the field for use of authorization
                        'fields' => array('username' => 'email' , 'password'=>'password'),
                    ),
                ),
                //
                'loginError' => 'Make sure email or password',
                //
                'authError' => 'It is necccesary to log in to use this function',
                //
                //  'loginAction' => array('action' => 'login'),
                //
                'loginRedirect' => array('controller' => 'posts', 'action' => '/home/index'),
                //
                'logoutRedirect' => array('action' => '/home/index'),
            ),
        );

    }

    public function login()
    {
        if($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl('http://sfsuse.com/~su17g03/Home'));
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function isAuthorized($user)
    {
        return true;
    }

    public function index()
    {
        $this->set('test_user', $this->Users->find('all'));
    }


    public function home()
	  {
        $this->redirect($this->Auth->redirectUrl('http://sfsuse.com/~su17g03/Home'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        $user->created = date("Y-m-d H:i:s");
        $user->modified = date("Y-m-d H:i:s");

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

}
