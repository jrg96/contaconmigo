<?php 
	include '../api_logic.php';
	$data = orgDataById($_GET['id']);
	
	echo $data[0] . '|' . $data[4] . '|' . $data[6] . '|' . $data[2];
?>