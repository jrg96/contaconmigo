function addOrg(lat, lng, radio, name){
	var LatLong = new google.maps.LatLng(lat, lng);
	var marker = new google.maps.Marker({
		position: LatLong,
		map: map,
		title: name
	});
	
	markers.push(marker);
	
	google.maps.event.addListener(marker, 'click', function() {
		var id = mark_id[marker.getTitle()];
		
		$.ajax({
			url: "php_helpers/get_org_info_2.php?id=" + id,
		}).done(function(data) {
			data = data.split('|');
			
			$("#address").html(data[0]);
			$("#manager").html(data[1]);
			$("#phone").html(data[2]);
			$("#mail").html(data[3]);
			$("#org-name").html(marker.getTitle());
			
			$.ajax({
				url: "php_helpers/get_org_req.php?id=" + id,
			}).done(function(data2) {
				data2 = data2.split("|");
				
				var index = 0;
				var str="";
				
				while (index < data2.length && data2[index] != ""){
					str += '<li><span class="glyphicon glyphicon-ok">';
					str += '<input style="border: solid 1px green" type="radio" name="req" value="' + data2[index + 0] + '">' + data2[index+1] + "<br />" + data2[index + 2] + "";
					str += '</span></li>';
					index += 3;
				}
				
				$("#req-list").html(str);
			});
			
			
			$('#info-content').show('slow');
		});
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