<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
class HomeController extends AppController
{
	public function index(){

		$in =  $this->request->getData('theTitle');

	    $connection = ConnectionManager::get('default');
	}
}

    

