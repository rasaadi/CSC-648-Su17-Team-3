<?php
	$ThisEmail = $GLOBALS['userme'];
	$ThisUser = strstr($ThisEmail,'@',true);
	
	echo "<h1>"; 
	echo "Welcome " . $ThisUser . "(" . $ThisEmail . ")" . "</br>";
	echo "</h1>";
	echo "</br>";
	
// generate link to upload page	
	echo $this->Form->create("Uploads",array('url'=>'/Uploads'));
	echo $this->Form->button('Manage my media',array('class'=>'btn btn-warning'));
	echo $this->Form->end();
	
//generate link to message page
	echo $this->Form->create("Message",array('url'=>'/Communications'));
	echo $this->Form->button('Message',array('class'=>'btn btn-warning'));
	echo $this->Form->end();

?>