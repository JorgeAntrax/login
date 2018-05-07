<form action="controller/conexion.php?ref=LoQdIsAdXgin" method="post">
<hgroup>
		<h3>Registrar</h3>	
		<justify class="is-subtitle is-small">ya tienes tienes cuenta? <a href="/">acceder ahora</a>.</justify>
</hgroup>
<tabs class="is-fluid margin-b-1 is-small">
	<tab data-id="#datosAcceso">Acceso</tab>
	<tab data-id="#datosGeneral">Datos</tab>
	<tab data-id="#datosAdicional">Adicional</tab>
</tabs>
<tabs-content>
	<tab-content id="datosAcceso">
		<field>
			<input name="userRegister" min="5" type="text" class="input is-material" placeholder="Ingresa tu usuario" required>
			<help class="is-validate">Tu usuario debe tener minimo 5 caracteres.</help>
		</field>
		<field>
			<input name="userPassword" min="5" type="password" class="input is-material" placeholder="Ingresa tu contraseña" required>
			<help class="is-validate">Tu clave debe tener minimo 5 caracteres.</help>
		</field>
		<field>
			<input name="userEmail" type="mail" class="input is-material" placeholder="Ingresa tu email" required>
			<help class="is-validate">Tu email debe tener minimo 5 caracteres.</help>
		</field>
	</tab-content>
	<tab-content id="datosGeneral">
		<field>
			<input type="text" class="input is-material" name="userName" placeholder="Ingresa tu nombre" required="required">
			<help class="is-validate">Nombre no valido</help>
		</field>
		<field>
			<input type="text" class="input is-material" name="userLastname" placeholder="Ingresa tus apellidos" required="required">
			<help class="is-validate">Apellidos no validos</help>
		</field>
	</tab-content>
	<tab-content id="datosAdicional">
		<field>
			<input type="number" class="input is-material" required="required" name="userEdad" placeholder="Ingresa tu edad">
			<help class="is-validate">Debes ser mayor de 15 años</help>
		</field>
		<field>
			<input type="date" class="input is-material" required="required" name="userBirthday" placeholder="Ingresa tu fecha de nacimiento">
			<help class="is-validate">Fecha no valida</help>
		</field>
		<field class="is-separated is-horizontal margin-b-1">
			<control>
				<radio value="M" name="userGender" id="userMale" text="Hombre" class="is-check"></radio>
			</control>
			<control>
				<radio value="F" name="userGender" id="userFemale" text="Mujer" class="is-check"></radio>
			</control>
		</field>
	</tab-content>
</tabs-content>
<div class="is-text-right">
	<button type="submit" class="is-success is-rounded">Registrarme</button>
</div>
<div class="opacity-4 padding-v-1 is-text-center is-tiny">Al enviar tus datos aceptas los <strong class="is-tiny">terminos y condiciones del servicio</strong>.</div>
</form>