<?php
@session_start();
$parametersLogout = 'id="index" class="is-full-center"';
$loggedUser = isset($_SESSION['usuario']) ? true : false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>
	<?php
		if($loggedUser){
			echo 'Logged ' . $_SESSION['usuario'];
		}else {
			echo 'Iniciar sesión';
		}
	?>
	</title>
	<?php
		include 'resources/dependences.php';
	?>
</head>
<body <?php echo $loggedUser ? '' : $parametersLogout; ?>>
	<?php
	if($loggedUser){
		include 'views/app.php';
	}else {
		include 'views/home.php';
	}
	?>
	<script src="js/kimera.min.js"></script>
	<script src="https://use.fontawesome.com/ba69364c65.js"></script>
</body>
</html>