<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Datasource\ConnectionManager;

class SearchIDController extends AppController{
	
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
//	$results = $connection->execute("SELECT * FROM image where title=('$in')")->fetchAll('assoc');
        $term = mysqli_real_escape_string($connection,$_REQUEST('in'));
        echo "$term"."<br/>";
//        $results = $connection->execute("SELECT * FROM image where title like '%".$in."%' ")->fetchAll('assoc');
        $results = $connection->execute("SELECT * FROM image where title like ('$in') ")->fetchAll('assoc');

/*
	echo "<table style='border: 1px solid blue'>";
	echo "<tr> <td> user_id </td> <td> title </td> <td> author </td> <td> price </td> </tr>";
	foreach($results as $arr){
		echo "<tr>";
		echo "<td>" .  $arr["id"] . "</td>";
		echo "<td>" .  $arr["title"] . "</td>";
		echo "<td>" .  $arr["author"] . "</td>";
		echo "<td>" .  $arr["price"] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
*/

		$this->set('res',$results);



	}
}
?>
