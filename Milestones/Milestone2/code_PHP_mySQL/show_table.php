<?php
		$sql = "SELECT * FROM image";
		$result = $conn->query($sql);
		echo("the table is shown as follows: <br/><br/>");
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "id: " . $row["id"]. " Title: " . $row["title"]. " Author: " . $row["author"]. " Price: " . $row["price"]. "<br>";
			}
		} else {
			echo "0 result";
		}
?>