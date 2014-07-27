<?php
	session_start();
	
	include 'api_logic.php';
	
	if (!isset($_SESSION['id_org'])){
		header('Location: login.php');
	}
	
	if (isset($_POST['btn_submit'])){
		insertRequest($_SESSION['id_org'], $_POST['txt_title'], $_POST['txt_description'], 0);
	}
	
	$requests = requestById($_SESSION['id_org']);
	$list = "";
	
	foreach($requests as $req){
		$list .= '<li><span class="glyphicon glyphicon-ok">' . $req[0] . '-' . $req[1] . '<br />' . $req[2] . '</span></li>';
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

		<a href="logout.php"><span class="glyphicon glyphicon-remove pull-right" id="close" style="margin-right:2em; margin-top:1em; font-size:20px;"></span></a>
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
			<h1>Recursos que necesito</h1>
			<br>
				<div class="col-lg-offset-2 info-need">
					<ul id="req-list">
						<?php echo $list; ?>
					</ul>
				</div>
			</div>
		<div class="col-lg-5 col-lg-offset-1 col-md-offset-1 col-md-5 col-sm-5 col-xs-12 ">
			<form action="adminpanel.php" method="POST">
			<div class="col-lg-12">
				<br>
				<label>Titulo:</label>
				<input name="txt_title" type="text" class="form-control" placeholder="Titulo" required/>
			</div>
			<div class="col-lg-12">
				<br>
				<label>Descripcion:</label>
				<textarea name = "txt_description" class="form-control" placeholder="Descripcion..." required></textarea>
				<br>
				<button name="btn_submit" class="btn btn-lg btn-success pull-right" type="submit">Pedir colaboracion</button>
				
			</div>
			</form>
		</div>
		</div>


	<script src="map_funcs.js"></script>
	<script src="jquery.js"></script>
	<script src="busqueda_logic.js"></script>
  </body>
</html>