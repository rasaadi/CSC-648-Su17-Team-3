<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class SearchValidController extends AppController
{
    $errors = array();
    if(!$this->SearchValidTable->$validates($this->data) {
        $errors = $this->SearchValidTable->invalidFields();
        $this->Session->save('SearchValidTable.invalid',$errors);
        $this->redirect('/plans');
}
?>
