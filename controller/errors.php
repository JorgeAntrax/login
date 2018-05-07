<?php 
//archivo que maneja y controla los eventos...
	$errorMessage;
	if (isset($_GET['errno'])) {
		switch ($_GET['errno']) {
			case 'Qdad218fdak':
				$errorMessage = 'No puedes enviar campos vacios.';
			break;
			case 'Qsxa':
				$errorMessage = "El usuario o la contraseña es incorrecto.";
			break;
			case 'Qdfhs2sG':
				$errorMessage = 'No has iniciado sesión';
			break;
			case 'Q7duxXZ':
				$errorMessage = 'Usuario no registrado';
				break;
			case 'send':
				$errorMessage = 'Email enviado correctamente';
				break;
			case 'mail':
				$errorMessage = 'Email no registrado';
				break;
			default:
				$errorMessage = 'Error desconocido';
			break;
		}
	}
?>