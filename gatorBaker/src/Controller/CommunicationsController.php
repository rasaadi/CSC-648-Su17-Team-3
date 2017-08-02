<?php
/**
 * Created by PhpStorm.
 * User: rafsa
 * Date: 7/31/2017
 * Time: 11:41 AM
 */
namespace App\Controller;

use App\Controller\AppController;


class CommunicationsController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent

    }

    public function msgSend(){
        $communication = $this->Communications->newEntity();
        $communication->created = date("Y-m-d H:i:s");
        $communication->modified = date("Y-m-d H:i:s");

        if ($this->request->is('post')) {

            $communication = $this->Communications->patchEntity($communication, $this->request->getData());

            $communication->msg_sender = $this->Auth->user('username'); //This track the login user as the sender

            if ($this->Communications->save($communication)) {

                $this->Flash->success(__('Message Send Success.'));

                return $this->redirect(['action' => 'msgList']);
            }
            $this->Flash->error(__('Message Send Fail.'));
        }
        $this->set('communication', $communication);

    }

    public function msgList(){

        $this->set('communications', $this->Communications->find('all'));

    }

    public function msgView($id){
        if (!$id) {
            throw new NotFoundException(__('Invalid Message Id'));
        }

        $communication = $this->Communications->get($id);

        if (!$communication) {
            throw new NotFoundException(__('Invalid Message'));
        }

        $this->set('communication', $communication);

    }


//    public function isAuthorized($user)
//    {
//        // All registered users can add articles
//        if ($this->request->getParam('action') === 'msgSend') {
//            return true;
//        }
//
//        // The owner of an article can edit and delete it
//        if (in_array($this->request->getParam('action'), ['msgList', 'msgView'])) {
//            $communicationId = (int)$this->request->getParam('pass.0');
//            if ($this->Communications->isOwnedBy($communicationId, $user['username'])) {
//                return true;
//            }
//        }
//
//        return parent::isAuthorized($user);
//    }
}