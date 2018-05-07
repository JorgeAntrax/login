<form action="controller/conexion.php?ref=LoQdIsAdXgin" method="post">
<hgroup>
		<h3 class="margin-b-1">Iniciar sesión</h3>	
		<justify class="is-subtitle is-small">No tienes cuenta? <a href="?form=register">crea tu cuenta</a> ahora, te tomará unos minutos.</justify>
</hgroup>
<div class="margin-v-2">
	<input name="user" id="user" type="text" class="input is-material" placeholder="Ingresa tu usuario">
		<help class="is-validate">Usuario no valido</help>
		<input name="pass" id="pass" type="password" class="input is-material" placeholder="Ingresa tu contraseña">
		<help class="is-validate">Contraseña no valida</help>
</div>
<div class="is-text-right margin-b-1">
	<button type="submit" class="is-success is-rounded">Iniciar sesión</button>
</div>
<justify class="is-small is-text-bolder">Iniciar sesión con</justify>
<buttons class="is-distributed is-tiny margin-t-1">
	<button class="is-rounded is-primary">
		<icon><i class="fa fa-facebook"></i></icon>
		<span>Facebook</span>
	</button>
	<button class="is-rounded is-info">
		<icon><i class="fa fa-twitter"></i></icon>
		<span>Twitter</span>
	</button>
	<button class="is-rounded is-danger">
		<icon><i class="fa fa-google-plus"></i></icon>
		<span>Google</span>
	</button>
</buttons>
</form>