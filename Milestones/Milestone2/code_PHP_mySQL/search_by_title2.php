<?php
	echo $query;
	$sql = "SELECT * FROM image where title=('$str')";
	$result = $conn->query($sql);
?>
