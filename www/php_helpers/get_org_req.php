<?php 
	include '../api_logic.php';
	$data = requestById($_GET['id']);
	
	foreach($data as $row){
		echo $row[0] . '|' . $row[1] . '|' . $row[2] . '|';
	}
?>