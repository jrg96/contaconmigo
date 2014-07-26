<?php
	include '../php/api_logic.php';
	
	$orgs = getData('civil_organizations/index.xml');
	
	$data = '';
	
	foreach($orgs as $org){
		$id = $org->{'id'};
		$name = $org->{'name'};
		
		$name = str_replace(" ", "_", $name);
		$name = substr($name, 0, 18) . rand(123, 10000);
		
		
		$data .= "INSERT INTO users VALUES($id, '$name', '$name');";
	}
	
	echo $data;
?>