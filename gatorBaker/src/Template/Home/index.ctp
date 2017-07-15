<?php
    use Cake\Datasource\ConnectionManager;
?>


<!DOCTYPE html>
<html>
    <?php echo $this->Html->css('ui_style'); ?>
<body>
<!--	<h1> CSC648/848 Team03 home page </h1>   -->
    <h1 class="Top"> Stock Media Marketplace </h1>
    <?php echo $this->Html->image('images.jpg', array('url' => './picture/')); ?>
	<img class="Top" src="picture/images (1).jpg"/>
	<img class="Top" src="picture/images.jpg"/>
	<img class="Top" src="picture/Vintage-Photography-46-HD-Wallpaper.jpg"/>
	<img class="Top" src="picture/wp1813232.jpg"/>
	
	<div class="Top">
		<h1 class="aboutus"> Beautiful, high quality media marketplace </h1>
		<ul class="nav">
			<li class="nav"> <input class="search" type="text" name="term" placeholder="Enter your search terms"> </li>
			<li class="nav"> <button class="search" type="button" onclick="alert('Hello world!')">SEARCH</button> </li>
		</ul>
	</div>
	
	<div class="pic">
		<img class="cat" src="picture/BMW-M2-lead.jpg"/>
		<p class="cat"> Car </p>
	</div>
	
	<div class="pic">
		<img class="cat" src="picture/images (2).jpg"/>
		<p class="cat"> View </p>
	</div>
	
	<div class="pic">
		<img class="cat" src="picture/Bay20Bridge20and20San20Francisco.jpg"/>
		<p class="cat"> City </p>
	</div>
	
	<div class="pic2">
		<img class="cat" src="picture/pexels-photo-186077.jpeg"/>
		<p class="cat"> House </p>
	</div>
	
	<div class="pic">
		<img class="cat" src="picture/flower-purple-lical-blosso.jpg"/>
		<p class="cat"> Flower </p>
	</div>
	
	<div class="pic">
		<img class="cat" src="picture/slide09.jpg"/>
		<p class="cat"> Animal </p>
	</div>
	
	<div class="End">
		<p class="End"> <span style="font-weight:bold" >&#169 &nbsp </span> Summer 2017 CSC648/848 Team03, San Francisco State University </p> </div>
	</div>
    
    
	<h2> The table is shown as below: </h2>
	
<?php
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
?>
    
<?php
	echo $this->Form->create("Registrations",array('url'=>'/SearchID'));
   	echo $this->Form->input('theTitle',array('label'=>'search by title: '));
   	echo $this->Form->button('Submit');
   	echo $this->Form->end();
?>	
    
<p> Our team contains 6 members: </p>

        <p>
            <?php
            echo $this->Html->link(
                'aboutus',
                ['controller' => 'About', 'action' => 'aboutus', '_full' => true]
            );
            ?>
        </p>

  
</body>
</html>

