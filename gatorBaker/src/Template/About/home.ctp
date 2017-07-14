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
    
<p> Our team contains 6 members: </p>

        <p>
            <?php
            echo $this->Html->link(
                'Brandon',
                ['controller' => 'About', 'action' => 'brandon', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Jizhou',
                ['controller' => 'About', 'action' => 'jizhou', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Rafsan',
                ['controller' => 'About', 'action' => 'rafsan', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Raghav',
                ['controller' => 'About', 'action' => 'raghav', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Todaka',
                ['controller' => 'About', 'action' => 'todaka', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Zach',
                ['controller' => 'About', 'action' => 'zach', '_full' => true]
            );
            ?>
        </p>


<?php
	echo $this->Form->create("Registrations",array('url'=>'/SearchID'));
   	echo $this->Form->input('theTitle',array('label'=>'search by title: '));
   	echo $this->Form->button('Submit');
   	echo $this->Form->end();
?>	
	
  
</body>
</html>
