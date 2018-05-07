<?php
@session_start();
require 'ctrl.connect.php';
$get = $_GET['ref'];
$db = new Conexion();
$opc = mysqli_real_escape_string($db, $get);
$key = "AWDxcya1994";
$encriptar = new Crypt($key);
// recoje el valor de la variable ref enviada por metodo get y la evalua dentro
// del condicional switch
//si estadefinido user lo guarda en una variable
$usuario = isset($_POST['user']) ? mysqli_real_escape_string($db, $_POST['user']) : '' ;
$pass = isset($_POST['pass']) ? mysqli_real_escape_string($db, $_POST['pass']) : '' ;
switch ($opc) {
	//Si el valor de ref es igual a  LoQdIsAdXgin login
	case 'LoQdIsAdXgin':
		//comprueba que el usuario y clave esten definidos
		if (empty($usuario) || empty($pass)) {
			header("location: ../index.php?errno=Qdad218fdak");
		} else {
			//si no estan vacios hace esto
			//consulta sql
			$sql = "SELECT * FROM user inner join perfiles on user.perfil = perfiles.id_perfil WHERE user.login_user='$usuario' and user.passwd='$pass' and user.active=1";
			//guarda en $result lo que devuelve el metodo consultar de la clase ctrl.connect.php
			$result = $db->getArray($sql);
			//usando el ciclo foreach busca el usuario ingresado
			if ($usuario == $result['login_user'] && $pass == $result['passwd']) {
				$_SESSION['usuario'] = $result['login_user'];
				$_SESSION['perfil'] = $result['perfil'];
				header("location: ../index.php");
			} else {
				header("location: ../index.php?errno=Qsxa");
			}
		}
		break;
	//Si no es ninguna de las anteriores	
	default:
		//header('location: index.php');
		break;
}
unset($sql, $result, $usuario, $password, $db);
mysqli_close($db);
?>