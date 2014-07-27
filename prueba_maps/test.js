$(document).ready(function() {
	$("#test_btn").click(function(){
		var LatLong = new google.maps.LatLng(13.685449, -89.239938);
		var marker = new google.maps.Marker({
			position: LatLong,
			map: map,
			title:"Aqui desde casa presidencial :D"
		});
		
		var populationOptions = {
			strokeColor: '#FF0000',
			strokeOpacity: 0.8,
			strokeWeight: 2,
			fillColor: '#FF0000',
			fillOpacity: 0.35,
			map: map,
			center: LatLong,
			radius: 100
		};
		
		markers[0] = marker;
		
		cityCircle = new google.maps.Circle(populationOptions);
		
		circles[0] = cityCircle;
	});
	
	$("#test_btn2").click(function(){
		markers[0].setMap(null);
		circles[0].setMap(null);
	});
});