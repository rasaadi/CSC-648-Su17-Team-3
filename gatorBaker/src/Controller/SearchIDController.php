<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Datasource\ConnectionManager;

class SearchIDController extends AppController{
	
	public function index(){

        
//		echo "$in"."<br/>";
/*
		echo "this is from controller2<br/>";
		$this->set('newvalue',$this->request->getData('username'));
		$this->set('newarray',$this->request->getData());
*/

        $in =  $this->request->getData('theTitle');
	    $connection = ConnectionManager::get('default');
	    $results = $connection->execute("SELECT * FROM media_info where title=('$in')")->fetchAll('assoc');
		$this->set('res',$results);



	}
}
