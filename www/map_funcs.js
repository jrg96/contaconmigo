function addOrg(lat, lng, radio, name){
	var LatLong = new google.maps.LatLng(lat, lng);
	var marker = new google.maps.Marker({
		position: LatLong,
		map: map,
		title: name
	});
	
	markers.push(marker);
	
	google.maps.event.addListener(marker, 'click', function() {
		alert(mark_id[marker.getTitle()]);
	});
	
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
	
	markers = [];
	
	for (var i=0; i<circles.length; i++){
		circles[i].setMap(null);
	}
	
	circles = [];
	mark_id = {};
}