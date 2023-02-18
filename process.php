<?php
	$name = $_POST["text"];
	if ($name == "secret") {
		$file = $name . ".php";
		header("Location: login.php");
		exit;
	} 
	else{
		$file = $name . ".html"; 
		header("Location: $file");
	}	
?>
