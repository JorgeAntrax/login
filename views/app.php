<?php
require 'controller/session.php';
require 'controller/ctrl.connect.php';
$db = new Conexion();
$sql = 'SELECT * FROM user ORDER BY name_user DESC';
$result = $db->getQuery($sql);
?>
<layout id="layout-main" class="is-dashboard is-small-sidebar">
	<sidebar>
		<?php
	if ($_SESSION['perfil'] === 'superAdmin') {
		include 'views/panelSAdmin.php';
	} else if ($_SESSION['perfil'] === 'admin') {
		include 'views/panelAdmin.php';
	} else if ($_SESSION['perfil'] === 'user') {
		include 'views/panelUser.php';
	} else {
	}
	?>
	</sidebar>
	<main>
		<navbar>
			<?php include 'views/navigation.php'; ?>
		</navbar>
		<div>
			<?php
			if(isset($_GET['page'])){
				switch ($_GET['page']) {
					case 'home':
						include 'login.php';
						break;
					case 'users':
						include 'demo-users.php';
						break;
					case 'profile':
						include 'perfil.php';
						break;
					case '':
						break;
				}
			}else {
				include 'dashboard.php';
			}
			?>
		</div>
	</main>
</layout>