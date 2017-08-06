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
		Echo "<div class='panel panel-primary'>";
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
//		echo '<h1 class="text-center"><a href="#contactSeller" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Seller</a></h1>';

        $ownerInfo = $arr["owner"];
        $mediaTitle = $arr["title"];
        $mediaId = $arr["id"];
        echo  $this->Html->Link(
            'Concat Seller',
            ['controller' => 'Communications', 'action' => 'msgSend', $ownerInfo, $mediaTitle],
            ['class'=>"btn btn-success btn"]
        );

        echo "</div>";
		echo "</div>";
	}
	echo "</div>";
	echo "</div>";

	
	
?>	
	
	
<!--
<html lang="en">

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"> &nbsp</div>
	<?php echo $this->Html->image('BMW-M2-lead.jpg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:220px')); ?>
        <div class="panel-footer">Media Category: Car</div>
	<div class="panel-footer">Media Title: BMW</div>
	<div class="panel-footer">Media description: a sports car</div>
	<div class="panel-footer">Media Price: $1.02</div>
	<h1 class="text-center"><a href="#contactSeller" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Seller</a></h1>
    
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">&nbsp</div>
	<?php echo $this->Html->image('images (2).jpg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:220px')); ?>
        <div class="panel-footer">Media Category: View</div>
	<div class="panel-footer">Media Title: grassland</div>
	<div class="panel-footer">Media description: a grassland and a lake</div>
	<div class="panel-footer">Media Price: $1.03</div>
	<h1 class="text-center"><a href="#contactSeller" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Seller</a></h1>

      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">&nbsp</div>
	<?php echo $this->Html->image('Bay20Bridge20and20San20Francisco.jpg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:220px')); ?>
        <div class="panel-footer">Media Category: City</div>
	<div class="panel-footer">Media Title: San Francisco</div>
	<div class="panel-footer">Media description: night view of SF</div>
	<div class="panel-footer">Media Price: $1.01</div>
	<h1 class="text-center"><a href="#contactSeller" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Seller</a></h1>

      </div>
    </div>
  </div>
</div>



<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">&nbsp</div>
	<?php echo $this->Html->image('pexels-photo-186077.jpeg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:220px;')); ?>
        <div class="panel-footer">Media Category: House</div>
	<div class="panel-footer">Media Title: Nice house</div>
	<div class="panel-footer">Media description: a big house</div>
	<div class="panel-footer">Media Price: $1.04</div>
	<h1 class="text-center"><a href="#contactSeller" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Seller</a></h1>

      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">&nbsp</div>
	<?php echo $this->Html->image('flower-purple-lical-blosso.jpg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:220px;')); ?>
        <div class="panel-footer">Media Category: Flower</div>
	<div class="panel-footer">Media Title: Flower</div>
	<div class="panel-footer">Media description: Pink Blossom</div>
	<div class="panel-footer">Media Price: $1.05</div>
<h1 class="text-center"><a href="#contactSeller" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Seller</a></h1>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">&nbsp</div>
	<?php echo $this->Html->image('slide09.jpg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:220px;')); ?>
        <div class="panel-footer">Media Category: Animal</div>
	<div class="panel-footer">Media Title: Two dogs</div>
	<div class="panel-footer">Media description: cute dogs</div>
	<div class="panel-footer">Media Price: $1.06</div>
<h1 class="text-center"><a href="#contactSeller" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Seller</a></h1>
      </div>
    </div>
  </div>
</div><br><br>

-->

    
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

