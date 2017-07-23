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

    //
    public $components = array(
        'Auth'=>array(
            'allowedActions'=>array('index','login','add')
        ));

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function add() {

        // incase of post
        if ($this->request->is('post')) {

            // reset model
            $this->registered_users->create();
            // register data
            $this->registered_users->save($this->request->registered_users);

            //  goes to index
            $this->redirect(array('action' => 'index'));

        }
    }

    public function login(){

        if ($this->request->is('post')) {
            // Authコンポーネントのログイン処理を呼び出す。
            if($this->Auth->login()){
                // ログイン処理成功
                return $this->flash('Success to authorize', '/users/index');
            }else{
                // ログイン処理失敗
                return $this->flash('Fail to authorize', '/users/index');
            }
        }
    }
    public function logout(){

        $this->Auth->logout();
        return $this->flash('Logged out', '/users/index');
    }


}