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

    public function msgSend($ownerInfo,$mediaTitle ){

        if (!($ownerInfo or $mediaTitle)) {
            throw new NotFoundException(__('Recipient or Subject not found.'));
        }

        $communication = $this->Communications->newEntity();
        $communication->created = date("Y-m-d H:i:s");
        $communication->modified = date("Y-m-d H:i:s");

        if ($this->request->is('post')) {

            $communication = $this->Communications->patchEntity($communication, $this->request->getData());

            $communication->msg_sender = $this->Auth->user('email');
            $communication->msg_recipient = $ownerInfo;
            $communication->msg_subject = $mediaTitle;

            if ($this->Communications->save($communication)) {

                $this->Flash->success(__('Message Send Success.'));

                return $this->redirect(['action' => 'msgList']);
            }
            $this->Flash->error(__('Message Send Fail.'));
        }
        $this->set('communication', $communication);

    }

    public function msgList(){

//        $this->set('communications', $this->Communications->find('all'));
        $msgRecipient = $this->Auth->user('email');

        $this->set('communications', $this->Communications->find('all', [
//            'conditions' => ['Communications.msg_recipient' => 'rs']]
                'conditions' => ['Communications.msg_recipient' => $msgRecipient]]
        ));

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

}