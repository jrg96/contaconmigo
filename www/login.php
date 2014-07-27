<?php
	session_start();
	
	include 'api_logic.php';
	
	if (isset($_SESSION['id_org'])){
		header('Location: adminpanel.php');
	}
	
	if (isset($_POST["btn_submit"])){
		$status = login($_POST["txt_name"], $_POST["txt_password"]);
		
		if($status != null){
			$_SESSION['id_org'] = $status['id'];
			header('Location: adminpanel.php');
		}
	}
	
?>

<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>ContáConmigo</title>
	<!--Bootstrap / css / fonts-->
	<meta charset="UTF-8"/>		
	<link rel="stylesheet" type="text/css" href="common/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="common/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="common/css/main1.css"/>
	<link rel="stylesheet" type="text/css" href="common/css/buttons.css"/>

	<!--Responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
		<center><img src="common/img/logo.png"></center>
		<form action="login.php" method="POST">
			<div class="panel panel-default">
				<div class="panel-heading col-lg-4 col-lg-offset-4 col-md-5 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-7 col-xs-offset-3">
						<div>
						<h4>Usuario:</h4>
						<input name="txt_name" type="text" class="form-control" placeholder="Usuario" required/>
						<h4>Contraseña:</h4>
						<input name="txt_password" type="password" class="form-control" placeholder="*****" required/>
						<br>
						<button name="btn_submit" class="btn btn-lg btn-success pull-right" type="submit" >Iniciar Sesión</button>
					</div>		
				</div>
			</div>
		</form>
		</div>


	<script src="common/js/bootstrap.js"></script>
	<script src="common/js/jquery"></script>
</body>
</html>