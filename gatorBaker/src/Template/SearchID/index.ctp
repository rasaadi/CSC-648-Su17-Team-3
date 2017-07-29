<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

//$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <table class="result" rules="rows">

    <?php 
	if (count($res) > 0) 
	{

        foreach($res as $arr){

            $str1= 'Title: ' . $arr["title"] . '<br/> Media ID: ' . $arr["id"] .  '<br/> Description: ' . $arr["description"] .'<br/> Category: ' . $arr["media_category"] .  '<br/> Owner: ' . $arr["owner"] . '<br/> Price: ' . $arr["price"] . '<br/> Media Created: ' . $arr["media_created"];
//            echo $str1;
            echo $this->Html->tableCells([
                [
                    [($this->Html->image($arr["thumbnail"], ['class' =>'result'], ['alt' => 'picture not availabe for now'])), ['class' => 'pic']], 
                    [$str1, ['class'=>'result'] ],
                    [($this->Html->image('order_buttom.jpg', ['class' =>'order'], ['alt' => 'picture not availabe for now'])), ['class' => 'order']], 
                ]
                ]);
	}
	} else {
		echo "0 results found please check spelling or try search again";
	}
    ?>

    </table>
 </body>   


</html>


<?php
/*
	echo "<table>";
	echo "<tr> <td> ID </td> <td> title </td> <td> description </td> <td> media_cat </td>  <td> media_type </td> 
     <td> price </td>  <td> owner </td>  <td> media_created </td>  <td> media_modified </td>  <td> thumbnail </td>  
      <td> data </td>  </tr>";
	foreach($res as $arr){
		echo "<tr>";
		echo "<td>" .  $arr["id"] . "</td>";
		echo "<td>" .  $arr["title"] . "</td>";
		echo "<td>" .  $arr["description"] . "</td>";
		echo "<td>" .  $arr["media_cat"] . "</td>";
        echo "<td>" .  $arr["media_type"] . "</td>";
        echo "<td>" .  $arr["price"] . "</td>";
        echo "<td>" .  $arr["owner"] . "</td>";
        echo "<td>" .  $arr["media_created"] . "</td>";
        echo "<td>" .  $arr["media_modified"] . "</td>";
        echo "<td>" .  $arr["thumbnail"] . "</td>";
        echo "<td>" .  $arr["data"] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
*/
?>



