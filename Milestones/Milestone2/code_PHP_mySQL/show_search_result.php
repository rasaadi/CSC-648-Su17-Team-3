<?php
function show_search_result($result){
	if ($result->num_rows > 0) {
		$colums=$result->num_rows;
		echo "<table style='border: 1px solid blue'>";
		echo "<tr> <td> user_id </td> <td> title </td> <td> author </td> <td> price </td> </tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr>";

			echo "<td>" .  $row["id"] . "</td>";
			echo "<td>" .  $row["title"] . "</td>";
			echo "<td>" .  $row["author"] . "</td>";
			echo "<td>" .  $row["price"] . "</td>";
			echo "</tr>";
			}
		} else {
			echo "Found 0 result, but you may be interested in the following:";
		}
		echo "</table>";
	}
	
?>
