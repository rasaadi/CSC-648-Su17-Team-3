<?php
	function search_by_title($str,$conn){ 
		$sql = "SELECT * FROM image where title=('$str')";
//		$sql = "SELECT * FROM image where title='city'";
		$result = $conn->query($sql);
		return $result;  //returns the second argument passed into the function
	}
?>
