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
		$in = trim($in);
        $field = $this->request->getData('field');
        $connection = ConnectionManager::get('default');
        //       echo "$in"."<br/>";
//		echo "$field"."<br/>";
	$cdt = -1;
	$arrayCount = 0;
	if(strlen($in) == 0 && empty($field)){
		$cdt = 0;
	}		
       	else if((!preg_match("/^([-a-z\-0-9_ ])+$/i", $in) && strlen($in) > 0)) {
		$cdt = 1;
        }
	elseif(strlen($in)>30){
		$cdt = 2;
	}
        else{
            if(empty($field)){
                $results = $connection->execute("SELECT * FROM MediaInfo where title LIKE '%".$in."%' OR media_category LIKE '%".$in."%' OR owner LIKE '%".$in."%'")->fetchAll('assoc');
            } elseif($field==1){
                $results = $connection->execute("SELECT * FROM MediaInfo where title LIKE '%".$in."%' AND media_category='1' ")->fetchAll('assoc');
            } elseif($field==2){
                $results = $connection->execute("SELECT * FROM MediaInfo where title LIKE '%".$in."%' AND media_category='2' ")->fetchAll('assoc');
            } elseif($field==3){
                $results = $connection->execute("SELECT * FROM MediaInfo where title LIKE '%".$in."%' AND media_category='3' ")->fetchAll('assoc');
            } elseif($field==4){
                $results = $connection->execute("SELECT * FROM MediaInfo where title LIKE '%".$in."%' AND media_category='4' ")->fetchAll('assoc');
            } else{
                echo "error!<br/>";
            }
            $this->set('res',$results);
        }
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

$this->set('cdt2',$cdt);   
 }
}
?>
