function addOrg(lat, lng, radio){
	var LatLong = new google.maps.LatLng(lat, lng);
	var marker = new google.maps.Marker({
		position: LatLong,
		map: map,
		title:"Aqui desde casa presidencial :D"
	});
	
	markers.push(marker);
	
	var coverArea = {
		strokeColor: '#FF0000',
		strokeOpacity: 0.8,
		strokeWeight: 2,
		fillColor: '#FF0000',
		fillOpacity: 0.35,
		map: map,
		center: LatLong,
		radius: radio
	};
	
	orgCircle = new google.maps.Circle(coverArea);
	
	circles.push(orgCircle);
}

function deleteOrgs(){
	for (var i=0; i<markers.length; i++){
		markers[i].setMap(null);
	}
	
	for (var i=0; i<circles.length; i++){
		circles[i].setMap(null);
	}
}