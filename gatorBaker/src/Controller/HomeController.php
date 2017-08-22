<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Validation\Validator;
class HomeController extends AppController
{
    public function index()
    {
        $in = $this->request->getData('theTitle');
        $connection = ConnectionManager::get('default');

    }
}

    

