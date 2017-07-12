<?php
/**
 * this is the individual home page
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';


include 'search_by_title.php';
include 'show_search_result.php';
?>


<!DOCTYPE html>
<html>
<body>
	<h1> Welcome to Jizhou Yang's home page! </h1>
	<?php include 'init.php';?>
	<?php include 'show_table.php';?>
	<h2> Test the database! </h2>
	<p> direct query with title="city" </p>
	<?php 
		$str="city";
		$result=search_by_title($str,$conn);
		show_search_result($result);
	?>
	<br/><br/>

<!--
	<p> Search by title 
		<form action="SearchID" method="post">
		<input type="text" name="query"/>
		<input type="submit" value="Search" /> 
	</p>
-->

<?php
	echo $this->Form->create("Registrations",array('url'=>'/register'));
   	echo $this->Form->input('username');
   	echo $this->Form->input('password');
/*
   	echo '<label for="address">Address</label>';
   	echo $this->Form->textarea('address');
   	echo $this->Form->file('profilepic');
  	echo '<div>'.$this->Form->checkbox('terms').'<label for="country">Terms &Conditions</label></div>';
*/
   	echo $this->Form->button('Submit');
   	echo $this->Form->end();
?>	
	
  
</body>
</html>


