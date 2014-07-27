<?php 
	include '../api_logic.php';
	$data = orgDataInfoByStateFromDB($_GET['id']);
	
	foreach($data as $row){
		echo $row[12] . '|' . $row[2] . '|' . $row[3] . '|' . $row[4] . '|';
	}
?>