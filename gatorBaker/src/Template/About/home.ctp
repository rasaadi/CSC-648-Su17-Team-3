?>


<!DOCTYPE html>
<html>
<body>
	<h1> CSC648/848 Team03 home page </h1>
	<h2> The table is shown as below: </h2>
	
<?php
	$connection = ConnectionManager::get('default');

	$results = $connection->execute('SELECT * FROM image')->fetchAll('assoc');

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


?>


<?php
	echo $this->Form->create("Registrations",array('url'=>'/SearchID'));
   	echo $this->Form->input('theTitle',array('label'=>'search by title: '));
   	echo $this->Form->button('Submit');
   	echo $this->Form->end();
?>	
	
  
</body>
</html>
