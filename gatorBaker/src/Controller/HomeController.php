<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
class HomeController extends AppController
{
	public function index(){
/*
		echo "this is from controller<br/>";
		print_r($this->request->getData());
		echo "<br/>";
*/
		$in =  $this->request->getData('theTitle');
//		echo "$in"."<br/>";
/*
		echo "this is from controller2<br/>";
		$this->set('newvalue',$this->request->getData('username'));
		$this->set('newarray',$this->request->getData());
*/


	    $connection = ConnectionManager::get('default');
//	    $results = $connection->execute("SELECT * FROM media_info where title=('$in')")->fetchAll('assoc');
        $results = $connection->find("all",array('condition' => array('title LIKE' => ('$in'))));
        print_r($results);
        
        
        
        
        
		$this->set('res',$results);
	}
}

    

