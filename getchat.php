<?php
	$file = "chatlog.html";
	if(file_exists($file)){
		$msges = file_get_contents($file);
		echo $msges;
    }	
?>