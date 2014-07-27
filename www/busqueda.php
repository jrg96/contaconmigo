<?php include 'api_logic.php';?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="common/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="common/css/main.css"/>
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBYuhiS0SauIzg3yLxlsIlF4knSwrIW_cU&sensor=true">
    </script>
    <script type="text/javascript">
		var map = null;
		var markers = [];
		var circles = [];
		var mark_id = {};
		
		function initialize() {
			var mapOptions = {
				center: new google.maps.LatLng(13.685449, -89.239938),
				zoom: 9,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById("map_canvas"),
				mapOptions);
		}
    </script>
	<script src="map_funcs.js"></script>
	<script src="jquery.js"></script>
	<script src="busqueda_logic.js"></script>
  </head>
  <body onload="initialize()">
	<!--Menu -->
	<section class="main-menu">
		<center><img class="logo" class="pull-left" src="common/img/logo.png" title="ContaConmigo"></center>
	</section>
	<!--search -->
		<div class="col-xs-12  col-md-12 clearfix searching">
			<br>
				<div class="col-md-2"></div>
				<div class="col-xs-12 col-md-8">
					<div class="col-xs-12 col-md-6">
						<label>Departamento:</label>
						<?php echo getStates(); ?>
					</div>
					<div class="col-xs-12 col-md-6">
						<label>Tipo de organización:</label>
							<select class="form-control">
								<option>a</option>
							</select>
					</div>
				</div>
		</div>
	<br>
	<br>
	<!--map -->
    <div id="map_canvas" style="width:100%; height:80%"></div>
  </body>
</html>