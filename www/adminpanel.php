<?php
	session_start();
	
	if (!isset($_SESSION['id_org'])){
		header('Location: login.php');
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="common/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="common/css/main2.css"/>

  </head>
  <body onload="initialize()">
	<!--Menu -->
	<section class="main-menu">
		<center><img class="logo" class="pull-left" src="common/img/logo.png" title="ContaConmigo"></center>
	</section>

	<div class="content" id="info-content">
		<span class="glyphicon glyphicon-remove pull-right" id="close" style="margin-right:2em; margin-top:1em; font-size:20px;"></span>
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
			<h1>Recursos que necesito</h1>
			<br>
				<div class="col-lg-offset-2 info-need">
					<ul id="req-list">
						<li><span class="glyphicon glyphicon-ok"></span></li>
						<li><span class="glyphicon glyphicon-ok"></span></li>
						<li><span class="glyphicon glyphicon-ok"></span></li>
					</ul>
				</div>
			</div>
		<div class="col-lg-5 col-lg-offset-1 col-md-offset-1 col-md-5 col-sm-5 col-xs-12 ">
			<div class="col-lg-12">
				<br>
				<label>Titulo:</label>
				<input type="text" class="form-control" placeholder="Titulo" required/>
			</div>
			<div class="col-lg-12">
				<br>
				<label>Descripcion:</label>
				<textarea class="form-control" placeholder="Descripcion..." required></textarea>
				<br>
				<button name="btn_submit" class="btn btn-lg btn-success pull-right" type="submit">Pedir colaboracion</button>
				
			</div>
		</div>
		</div>


	<script src="map_funcs.js"></script>
	<script src="jquery.js"></script>
	<script src="busqueda_logic.js"></script>
  </body>
</html>