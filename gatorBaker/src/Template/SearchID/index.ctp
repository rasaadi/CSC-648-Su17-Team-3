<?php
	echo "this will be print to new page<br/>";



	echo "<table style='border: 1px solid blue'>";
	echo "<tr> <td> user_id </td> <td> title </td> <td> author </td> <td> price </td> </tr>";
	foreach($res as $arr){
		echo "<tr>";
		echo "<td>" .  $arr["id"] . "</td>";
		echo "<td>" .  $arr["title"] . "</td>";
		echo "<td>" .  $arr["author"] . "</td>";
		echo "<td>" .  $arr["price"] . "</td>";
		echo "</tr>";
	}
	echo "</table>";

