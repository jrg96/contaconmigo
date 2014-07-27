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
      #map_canvas { height: auto; }
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
	<div class="content" id="info-content">
		<span class="glyphicon glyphicon-remove pull-right" id="close" style="margin-right:2em; margin-top:1em; font-size:20px;"></span>
		<div class="col-lg-5 col-lg-offset-1 col-md-5 col-sm-5 col-xs-12 ">
			<h1 align="center">Nombre de organizacion</h1>
			<br>
			<div class="col-lg-offset-2 info">
				<span class="glyphicon glyphicon-road"></span>
				<label> Direccion</label>
				<p>Santa Tecla.</p>
				<br>
				<span class= "glyphicon glyphicon-user"></span>
				<label> Encargado</label>
				<p>Pedrito.</p>
				<br>
				<span class= "glyphicon glyphicon-earphone"></span>
				<label> Telefono</label>
				<p>Pedrito.</p>
				<span class= "glyphicon glyphicon-envelope"></span>
				<label> Correo Electronico</label>
				<p>Pedrito.</p>
			</div>
			
		</div>

		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
			<h1>Recursos a necesitar</h1>
			<br>
			<div class="col-lg-offset-2 info-need">
				<ul>
					<li><span class="glyphicon glyphicon-ok"></span></li>
					<li><span class="glyphicon glyphicon-ok"></span></li>
					<li><span class="glyphicon glyphicon-ok"></span></li>
	
				</ul>
			</div>
		</div>


		<div class="col-lg-8 col-lg-offset-2 col-md-5 col-sm-5 col-xs-12">
			<hr>
			<h1>Contacto</h1>
			<br>
			<div>
				<div class="col-lg-4">
					<form>
						<label>Nombre*:</label>
							<input type="text" class="form-control" placeholder="Nombre" required/>
				</div>
				<div class="col-lg-4">
					<form>
						<label>Telefono*:</label>
							<input type="text" class="form-control" placeholder="Telefono" required/>
					</form>
				</div>
				<div class="col-lg-4">
					<form>
						<label>Correo:</label>
							<input type="mail" class="form-control" placeholder="Correo"/>
					</form>
				</div>
				<div class="col-lg-12">
					<label>Mensaje:</label>
					<textarea  class="form-control" max-length="130" placeholder="Mensaje..." required></textarea>
					<br>
					<button class="btn btn-lg btn-success pull-right" type="submit">Enviar</button>
					<br>
					<br>
					<br>
				</div>
			</form>
			</div>
		</div>
	</div>
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