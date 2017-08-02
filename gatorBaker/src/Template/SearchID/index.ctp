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
<style>
div.watermark
{
   
	
	background-color: #fffffff;
	border: 1px solid;
	border-color: #CD853f;
	opacity: 0.6;
	filter:alpha(opacity=60);
}

div.watermark p
{
	
	font-weight: bold;
	color: #CD853f;
}

#image-display
{
 pointer-events: none;
}

</style>

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
  			
// construct the full path to the image, use substr function to remove the 'webroot\'		
			$full_path = substr($arr["media_dir"],7) . $arr["media_data"];
			
			Echo "<div class='panel-heading'>&nbsp</div>";
//			echo $arr["thumbnail"];
			echo '<p id="image-display">';
			echo $this->Html->image($full_path, array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:220px'));
			echo '</p>';
			echo '<div class="watermark">';
			echo '<p>Stock Photo Marketplace';
			echo 'Copyright 2017</p></div>';
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
<div id="contactSeller" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h3 id="myModalLabel">Please contact your seller directly about your order</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal col-sm-12">
          <div class="form-group"><label>Name</label><input class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
          <div class="form-group"><label>Owner:</label>
		<div class="input-group">
   		 <?php echo $arr["owner"]; ?>
   		 </div>
		</div>
	<div class="form-group"><label>Media ID:</label>
		<div class="input-group">
   		 <?php echo $arr["id"]; ?>
   		 </div>
		</div>
	<div class="form-group"><label>Price:</label>
		<div class="input-group">
   		 <?php echo $arr["price"]; ?>
   		 </div>
		</div>
	<div class="form-group"><label>Message</label><textarea class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea></div>
	<div class="form-group"><button type="submit" class="btn btn-success pull-right">Send It!</button> <p class="help-block pull-left text-danger hide" id="form-error">?The form is not valid. </p></div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
      </div>
    </div>
  </div>
</div>

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



