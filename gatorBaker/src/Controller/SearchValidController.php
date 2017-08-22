<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class SearchValidController extends AppController
{
    public function search_valid()
    {
        $errors = array();
        if (!($this->SearchValidTable->validates($this->data))) {
            $errors = $this->SearchValidTable->invalidFields();
            $this->Session->save('SearchValidTable.errors', $errors);
            $this->Session->setFlash('errors');
            $this->redirect('/searchvalidtable');
        }
    }
}
?>
