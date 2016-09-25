<?php 
	$name = "Aland Kawa"
	$results = array("name" => $name);
	header("Content-Type: application/json");
	echo json_encode($results);
?>