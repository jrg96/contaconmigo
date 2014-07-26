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

?>