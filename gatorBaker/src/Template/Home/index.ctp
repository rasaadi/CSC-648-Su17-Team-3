<?php
/**
 *cakePHP(tm) : Rapid Development Framework (http://cakephp.org)
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

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;
$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<style>
#image-display
{
 pointer-events: none;
}
</style>

<?php

	if($GLOBALS['userme']){
//		echo $GLOBALS['userme'] . "<br/>";
		$ThisEmail = $GLOBALS['userme'];
		$ThisUser = strstr($ThisEmail,'@',true);
//		echo $ThisUser;
	}

?>


<?php
	$connection = ConnectionManager::get('default');
	$results = $connection->execute('SELECT * FROM MediaInfo')->fetchAll('assoc');
	Echo "<html>";
	echo '<div class="container">';
	echo '<div class="row">';
	foreach($results as $arr){
		
// construct the full path to the image, use substr function to remove the 'webroot\'		
		$full_path = substr($arr["media_dir"],7) . $arr["media_data"];
		Echo "<div class='col-sm-4'>";
		if ($arr["media_category"] ==1) 
		{
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
		echo '<p id="image-display">';

		echo $this->Html->image($full_path, array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:220px'));
		echo '<div class="panel-footer">Media Category: ';
		if ($arr["media_category"] ==1) 
		{
			Echo "Landscape";
		}
		if ($arr["media_category"] ==2) {
			Echo "Nature";
		} 
		if ($arr["media_category"] ==3) {
			Echo "Background";
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
//		echo '<h1 class="text-center"><a href="#contactSeller" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Seller</a></h1>';
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
	$full_path2 = '~su17g03'  . $full_path;
	echo substr($full_path2,9);
	echo '"class="btn btn-success" target="_blank">DOWNLOAD</a>';
        }
	echo "</div>";
	echo "</div>";
	}

	echo "</div>";
	echo "</div>";

	
	
?>	
	
	


    
<?php
/*
	$connection = ConnectionManager::get('default');
	$results = $connection->execute('SELECT * FROM media_info')->fetchAll('assoc');
	echo "<table style='border: 1px solid blue'>";
	echo "<tr> <td> ID </td> <td> title </td> <td> description </td> <td> media_cat </td>  <td> media_type </td> 
     <td> price </td>  <td> owner </td>  <td> media_created </td>  <td> media_modified </td>  <td> thumbnail </td>  
      <td> data </td>  </tr>";
	foreach($results as $arr){
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
	echo $this->Form->create("Registrations",array('url'=>'/SearchID'));
   	echo $this->Form->input('theTitle',array('label'=>'search by title: '));
   	echo $this->Form->button('Submit');
   	echo $this->Form->end();
*/    
?>	

  
</body>
</html>

