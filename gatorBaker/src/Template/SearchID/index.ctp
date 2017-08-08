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

<?php

	if($GLOBALS['userme']){
//		echo $GLOBALS['userme'] . "<br/>";
		$ThisEmail = $GLOBALS['userme'];
		$ThisUser = strstr($ThisEmail,'@',true);
//		echo $ThisUser;
	}

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
	
// check if not valid, $res will not be set
//	echo $cdt2;
	if($cdt2==0){
		echo '<h2> The input cannot be empty, please try again! </h2>';
	} else if($cdt2==1){
		echo '<h2> The input can only be alphanumberic characters with spaces, please try again! </h2>';
	} else if($cdt2==2){
		echo '<h2> The maximum length is 30 characters, please try again! </h2>';
	} else{
		if (count($res) > 0) 
		{	
			Echo "<html>";
			echo "<div style = 'font-size:250%'; color:#000000'>" . count($res) . " Results found. </div>";
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
				
				if ($arr["media_category"] ==1) 
				{
					Echo "Landscape";
				}
				if ($arr["media_category"] ==2) {
					Echo "Background";
				} 
				if ($arr["media_category"] ==3) {
					Echo "Nature";
				} 
	
				if ($arr["media_category"] ==4) {
					Echo "Portrait";
				}


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
	//		echo '<h2 class="text-center"><a href="/~su17g03/communications/msg-send" role="button" class="btn btn-primary btn-lg" ">Contact Seller</a></h2>';
				echo '<h2 class="text-center">';
	//			echo $this->Html->link('Contact Seller', "/communications/msg-send",['class'=>"btn btn-primary btn-lg"]);
	if(isset($ThisUser))
	{
	$ownerInfo = $arr["owner"];
        $mediaTitle = $arr["title"];
        $mediaId = $arr["id"];
	echo '<div class="text-center">';
        echo  $this->Html->Link(
            'Contact Seller',
            ['controller' => 'Communications', 'action' => 'msgSend', $ownerInfo, $mediaTitle],
            ['class'=>"btn btn-success btn"]
        );
	echo '</div>';
	
	echo '</h2>';
	echo '<h2 class="text-center"><a href="';		
	$full_path2 = '~su17g03' . $full_path;
	echo substr($full_path2,9);
	echo '"class="btn btn-success" target="_blank">DOWNLOAD</a></h2>';
        }
	echo "</div>";
	echo "</div>";
	}

	echo "</div>";
	echo "</div>";
		
		} else {
			echo "<h2> Sorry, 0 results found. But you may be interested in the following: </h2>";
// Then show everything we have in the database
			$connection = ConnectionManager::get('default');
			$results = $connection->execute('SELECT * FROM MediaInfo')->fetchAll('assoc');
			Echo "<html>";
			echo '<div class="container">';
			echo '<div class="row">';
			foreach($results as $arr){





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
				echo $this->Html->image($full_path, array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:220px'));
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
	if(isset($ThisUser))
	{
	$ownerInfo = $arr["owner"];
        $mediaTitle = $arr["title"];
        $mediaId = $arr["id"];
	echo '<div class="text-center">';
        echo  $this->Html->Link(
            'Contact Seller',
            ['controller' => 'Communications', 'action' => 'msgSend', $ownerInfo, $mediaTitle],
            ['class'=>"btn btn-success btn"]
        );
	echo '</div>';
	
	echo '</h2>';
	echo '<h2 class="text-center"><a href="';
	$full_path2 = '~su17g03' . $full_path;
	echo substr($full_path2,9);
	echo '"class="btn btn-success" target="_blank">DOWNLOAD</a>';
        }
	echo "</div>";
	echo "</div>";
	}

	echo "</div>";
	echo "</div>";
		
		} 
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



