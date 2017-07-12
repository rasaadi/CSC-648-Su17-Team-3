<?php
		// initiate the mysql
		$servername = "localhost";
		$username = "jyang15";
		$password = "62812104A!b";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("database Connection failed: " . $conn->connect_error);
		} 
		else{
			echo("database Connection succeed!");
			echo("<br/><br/>");
		}
		
		$conn->query("use student_jyang15");
?>