<box class="tablet-12 loginContainer">
	<row>
		<column class="tablet-is-half">
			<mega class="is-text-cloud">
				<h1 class="megatitle">Bienvenido</h1>
				<justify class="megasubtitle padding-t-1">Aprende cuando quieras y en cualquier momento.</justify>
				<responsive><img src="image/logo-blanco.png" alt=""></responsive>
			</mega>
		</column>
		<column class="tablet-is-half color-cloud padding-3">
		<?php
	if (isset($_GET['form']) && $_GET['form'] == 'register') {
		include 'views/register.php';
	} else {
		include 'views/login.php';
	}
	?>
		</column>
	</row>
</box>