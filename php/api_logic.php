<?php 
	header('Content-Type: text/html; charset=utf-8');

	function getData($path){
		$myCurl=curl_init();
		curl_setopt($myCurl, CURLOPT_URL, "http://api.gobiernoabierto.gob.sv/".$path);
		curl_setopt($myCurl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($myCurl, CURLOPT_HTTPHEADER, array(
		  'Authorization:  Token  token="36bc11762f97f155729497f7099d76c4"'
		));
		$response = curl_exec($myCurl);
		$xml = new SimpleXMLElement($response);

		return $xml;
	}

	function getStates(){
		$states=getData("states/index.xml");

		$stateSelect="<select>";
		foreach ($states as $single) {
			$stateSelect.="<option value=".$single->id.">".$single->name."</option>";
		}
		$stateSelect.="</select>";

		return $stateSelect;
	}

	function getCityByState($state){
		$cities=getData("cities/index.xml?&q[state_id_eq]=".$state."&per_page=100");

		$citieSelect="<select>";
		foreach ($cities as $single) {
			$citieSelect.="<option value=".$single->id.">".$single->name."</option>";
		}
		$citieSelect.="</select>";

		return $citieSelect;
	}

	function typesOrg(){
		$types=getData("civil_organization_types/index.xml");

		$typeSelect="<select>";
		foreach ($types as $single) {
			$typeSelect.="<option value=".$single->id.">".$single->name."</option>";
		}
		$typeSelect.="</select>";

		return $typeSelect;
	}

	function orgByType($type){
		$organization=array();
		$page=0;
		$index=0;

		do {
			$page++;
			$index=0;
			$orgs=getData("civil_organizations/index.xml?q[civil_organization_type_id_eq]=".$type."&per_page=100&page=".$page);

			foreach ($orgs as $org) {
				$index++;
				$actIndex=($page*100)-100+$index;
				$organization[$actIndex]=array();
				$organization[$actIndex][0]=$org->id;
				$organization[$actIndex][1]=$org->name;
				$organization[$actIndex][2]=$org->address;
				$organization[$actIndex][3]=$org->phone;
				$organization[$actIndex][4]=$org->manager;
				$organization[$actIndex][5]=$org->slug;
				$organization[$actIndex][6]=$org->email;
				$organization[$actIndex][7]=$org->civil_organization_type_id;
			}

		} while($index==100);

		return $organization;
	}

	function orgByTypeAndPage($type,$page){
		$organization=array();
		$index=0;

		$orgs=getData("civil_organizations/index.xml?q[civil_organization_type_id_eq]=".$type."&per_page=100&page=".$page);

		foreach ($orgs as $org) {
			$index++;
			$organization[$index]=array();
			$organization[$index][0]=$org->id;
			$organization[$index][1]=$org->name;
			$organization[$index][2]=$org->address;
			$organization[$index][3]=$org->phone;
			$organization[$index][4]=$org->manager;
			$organization[$index][5]=$org->slug;
			$organization[$index][6]=$org->email;
			$organization[$index][7]=$org->civil_organization_type_id;
		}

		return $organization;
	}

?>