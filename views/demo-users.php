<div class="padding-2">
	<h1>Bienvenido <?php echo $_SESSION['usuario'] ?></h1>
	<row class="padding-v-2 is-distributed">
		<column class="tablet-4">
			<responsive class="is-square-256"><img src="../image/autor.jpg" alt="" class="is-rounded"></responsive>
		</column>
		<column class="tablet-4">
			<responsive class="is-square-256"><img src="../image/autor.jpg" alt="" class="is-rounded"></responsive>
		</column>
		<column class="tablet-4">
			<responsive class="is-square-256"><img src="../image/autor.jpg" alt="" class="is-rounded"></responsive>
		</column>
		<column class="tablet-4">
			<responsive class="is-square-256"><img src="../image/autor.jpg" alt="" class="is-rounded"></responsive>
		</column>
	</row>
	<responsive class="is-table margin-t-2">
		<table class="is-cell is-narrow is-small">
			<thead>
				<tr>
					<th class="is-text-info">ID</th>
					<th class="is-text-info">USUARIO</th>
					<th class="is-text-info">CONTRASEÑA</th>
					<th class="is-text-info">EMAIL</th>
					<th class="is-text-info">EDAD</th>
					<th class="is-text-info">FECHA DE NACIMIENTO</th>
					<th class="is-text-info"></th>
				</tr>
			</thead>
			<tbody>
			<?php
		while ($row = $result->fetch_array()) { ?>
				<tr>
					<td><?php echo $row['id_user']; ?></td>
					<td><?php echo $row['login_user']; ?></td>
					<td><?php echo $row['passwd']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['age_user']; ?></td>
					<td><?php echo $row['birthday']; ?></td>
					<td><button class="is-info is-rounded is-small">Editar</button></td>
				</tr>
			<?php 
	} ?>
			</tbody>
		</table>
	</responsive>
</div>