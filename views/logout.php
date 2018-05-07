<div class="is-text-center padding-t-2 padding-b-1">
	<responsive class="is-square-84">
		<img src="../image/autor.jpg" class="is-rounded">
		<tag class="is-success is-small is-rounded">online</tag>
	</responsive>
	<dropdown>
		<justify class="is-small is-toggle-dropdown">
			<?php echo $_SESSION['usuario']; ?>
			<icon><i class="fa fa-angle-down"></i></icon>
		</justify>
		<dropmenu style="width: 160px">
			<drop-item>
				<a href="#">
					<icon><i class="fa fa-shield"></i></icon>
					<span>Seguridad</span>
				</a>
			</drop-item>
			<drop-item>
				<a href="#">
					<icon><i class="fa fa-cogs"></i></icon>
					<span>Opciones</span>
				</a>
			</drop-item>
			<drop-item>
				<a href="controller/close.php">
					<icon><i class="fa fa-sign-out"></i></icon>
					<span>Salir</span>
				</a>
			</drop-item>
		</dropmenu>
	</dropdown>
</div>