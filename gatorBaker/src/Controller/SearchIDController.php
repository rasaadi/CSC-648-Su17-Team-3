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
        $field = $this->request->getData('field');
	    $connection = ConnectionManager::get('default');
        echo "$in"."<br/>";
		echo "$field"."<br/>";
		if(empty($field)){
			echo "it is empty <br/>";
            $results = $connection->execute("SELECT * FROM media_info where title LIKE '%".$in."%' OR media_cat LIKE '%".$in."%' OR owner LIKE '%".$in."%'")->fetchAll('assoc');
		} elseif($field=='Cars'){
			echo "it is Cars <br/>";
            $results = $connection->execute("SELECT * FROM media_info where title LIKE '%".$in."%' AND media_cat='cat' ")->fetchAll('assoc');
		} elseif($field=='Cities'){
			echo "it is Cities <br/>";
		} elseif($field=='People'){
			echo "it is People <br/>";
		} elseif($field=='Animal'){
			echo "it is Animal <br/>";
		} elseif($field=='Animal'){
			echo "it is LandScape <br/>";
		} else{
			echo "error!<br/>";
		}

	    $results = $connection->execute("SELECT * FROM media_info where title LIKE '%".$in."%' OR media_cat LIKE '%".$in."%' OR owner LIKE '%".$in."%'")->fetchAll('assoc');
        $this->set('res',$results);

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


    }

}

?>

