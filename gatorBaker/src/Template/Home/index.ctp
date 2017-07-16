<?php
    use Cake\Datasource\ConnectionManager;
?>


<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
  <?php echo $this->Html->css('ui_style'); ?>
</head>
    <?php echo $this->Html->css('ui_style'); ?>
<body>
<!--	<h1> CSC648/848 Team03 home page </h1>   -->
    <h1 class="Top"> Stock Media Marketplace </h1>
    <?php echo $this->Html->image('images (1).jpg', ['class' =>'Top'], ['alt' => 'cover_picture']); ?>
    <?php echo $this->Html->image('images.jpg', ['class' =>'Top'], ['alt' => 'cover_picture']); ?>
    <?php echo $this->Html->image('Vintage-Photography-46-HD-Wallpaper.jpg', ['class' =>'Top'], ['alt' => 'cover_picture']); ?>
    <?php echo $this->Html->image('wp1813232.jpg', ['class' =>'Top'], ['alt' => 'cover_picture']); ?>
	
	<div class="Top">
		<h1 class="aboutus"> Beautiful, high quality media marketplace </h1>
		<ul class="nav">
			<li class="nav"> <input class="search" type="text" name="term" placeholder="Enter your search terms"> </li>
			<li class="nav"> <button class="search" type="button" onclick="alert('Hello world!')">SEARCH</button> </li>
		</ul>
	</div>
	
	<div class="pic">
        <?php echo $this->Html->image('BMW-M2-lead.jpg', ['class' =>'cat'], ['alt' => 'cover_picture']); ?>
		<p class="cat"> Car </p>
	</div>
	
	<div class="pic">
        <?php echo $this->Html->image('images (2).jpg', ['class' =>'cat'], ['alt' => 'cover_picture']); ?>
		<p class="cat"> View </p>
	</div>
	
	<div class="pic">
        <?php echo $this->Html->image('Bay20Bridge20and20San20Francisco.jpg', ['class' =>'cat'], ['alt' => 'cover_picture']); ?>
		<p class="cat"> City </p>
	</div>
	
	<div class="pic2">
        <?php echo $this->Html->image('pexels-photo-186077.jpeg', ['class' =>'cat'], ['alt' => 'cover_picture']); ?>
		<p class="cat"> House </p>
	</div>
	
	<div class="pic">
        <?php echo $this->Html->image('flower-purple-lical-blosso.jpg', ['class' =>'cat'], ['alt' => 'cover_picture']); ?>
		<p class="cat"> Flower </p>
	</div>
	
	<div class="pic">
        <?php echo $this->Html->image('slide09.jpg', ['class' =>'cat'], ['alt' => 'cover_picture']); ?>
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

