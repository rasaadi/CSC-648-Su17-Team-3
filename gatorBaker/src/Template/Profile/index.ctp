<?php
	$ThisEmail = $GLOBALS['userme'];
	$ThisUser = strstr($ThisEmail,'@',true);
	
	echo "<h1>"; 
	echo "Welcome " . $ThisUser . "(" . $ThisEmail . ")" . "</br>";
	echo "</h1>";
	echo "</br>";
	
// generate link to upload page	
	echo $this->Form->create("Uploads",array('url'=>'/Uploads'));
	echo $this->Form->button('Media Manager',array('class'=>'btn btn-warning'));
	echo $this->Form->end();

    echo "</br>";
	
//generate link to message page
	echo $this->Form->create("Message",array('url'=>'/Communications/msgList'));
	echo $this->Form->button('Communication Manager',array('class'=>'btn btn-warning'));
	echo $this->Form->end();

?>