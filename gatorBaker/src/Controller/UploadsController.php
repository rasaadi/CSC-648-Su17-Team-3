<?php
/**
 * Created by PhpStorm.
 * User: rafsa
 * Date: 7/21/2017
 * Time: 11:24 PM
 */

namespace App\Controller;

use App\Controller\AppController;

class UploadsController extends AppController{

    public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent

        // Load Files model
        $this->loadModel('Files');

        // Set the layout
        $this->viewBuilder()->setLayout('default');

    }

    public function index()
    {
        //        $this->set('uploads', $this->Uploads->find('all'));

        $mediaOwner = $this->Auth->user('email');

        $this->set('uploads', $this->Uploads->find('all', [
                'conditions' => ['MediaInfo.owner' => $mediaOwner]]
        ));

    }

    public function view($id)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid Media Id'));
        }

        $upload = $this->Uploads->get($id);

        if (!$upload) {
            throw new NotFoundException(__('Invalid Media'));
        }

        $this->set('upload', $upload);

    }


    public function add()
    {
        $upload = $this->Uploads->newEntity();
        $upload->media_created = date("Y-m-d H:i:s");
        $upload->media_modified = date("Y-m-d H:i:s");

        if ($this->request->is('post')) {

            $upload = $this->Uploads->patchEntity($upload, $this->request->getData());

            $upload->owner = $this->Auth->user('email'); //This track the login user as the owner of the upload

            if ($this->Uploads->save($upload)) {

                $this->Flash->success(__('Your media has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your media.'));
        }
        $this->set('upload', $upload);

    }

    public function edit($id = null)
    {
        $upload = $this->Uploads->get($id);
        $upload->media_modified = date("Y-m-d H:i:s");

        if ($this->request->is(['post', 'put'])) {

            $this->Uploads->patchEntity($upload, $this->request->data);

            if ($this->Uploads->save($upload)) {

                $this->Flash->success(__('Your media has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your media.'));
        }
        $this->set('upload', $upload);
    }


    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $upload = $this->Uploads->get($id);

        if ($this->Uploads->delete($upload)) {

            $this->Flash->success(__('The media with id: {0} has been deleted.', h($id)));

            return $this->redirect(['action' => 'index']);
        }
    }
}
?>

