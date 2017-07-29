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

    <?php 
	
	
	
	if (count($res) > 0) 
	{
		Echo "<html>";
		echo '<div class="container">';
		echo '<div class="row">';
			
			
        foreach($res as $arr){
			Echo "<div class='col-sm-4'>";
			
			if ($arr["media_category"] ==1) {
				Echo "<div class='panel panel-info'>";
			}
			
			if ($arr["media_category"] ==2) {
				Echo "<div class='panel panel-danger'>";
			} 
			
			if ($arr["media_category"] ==3) {
				Echo "<div class='panel panel-success'>";
			} 
			
			if ($arr["media_category"] ==4) {
				Echo "<div class='panel panel-primary'>";
			}
			
			if ($arr["media_category"] ==5) {
				Echo "<div class='panel panel-default'>";
			} 
  			

			Echo "<div class='panel-heading'>&nbsp</div>";
//			echo $arr["thumbnail"];
			echo $this->Html->image($arr["thumbnail"], array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:220px'));
			echo '<div class="panel-footer">Media Category: ';
			echo $arr["media_category"];
			echo '</div>';
			echo '<div class="panel-footer">Media Title: ';
			echo $arr["title"];
			echo '</div>';
			echo '<div class="panel-footer">Media description: ';
			echo $arr["description"];
			echo '</div>';
			echo '<div class="panel-footer">Media Price: ';
			echo $arr["price"];
			echo '</div>';
			echo '<h1 class="text-center"><a href="#contactSeller" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Seller</a></h1>';
			echo "</div>";
			echo "</div>";


			
			
			
			
			
			
/*  old php table cell format to display search results

            $str1= 'Title: ' . $arr["title"] . '<br/> Media ID: ' . $arr["id"] .  '<br/> Description: ' . $arr["description"] .'<br/> Category: ' . $arr["media_category"] .  '<br/> Owner: ' . $arr["owner"] . '<br/> Price: ' . $arr["price"] . '<br/> Media Created: ' . $arr["media_created"];
//            echo $str1;
            echo $this->Html->tableCells([
                [
                    [($this->Html->image($arr["thumbnail"], ['class' =>'result'], ['alt' => 'picture not availabe for now'])), ['class' => 'pic'], 'style'=>'width:100%;height:220px;'], 
                    [$str1, ['class'=>'result'] ],
                    [($this->Html->image('order_buttom.jpg', ['class' =>'order'], ['alt' => 'picture not availabe for now'])), ['class' => 'order']], 
                ]
                ]);
*/				
		}
		
		echo "</div>";
		echo "</div>";
		
	} else {
		echo "0 results found please check spelling or try search again";
	}
	
	

    ?>
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



