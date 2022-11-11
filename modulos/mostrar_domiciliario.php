
<?php

check_admin();

if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM domiciliario WHERE id = '$eliminar'");
	alert("Domiciliario eliminado");
	redir("?p=mostrar_domiciliario");  
}

?>
<table class ="table table-striped">

	<tr>
		<th>Nombre</th>
		<th>Username</th>
		<th>T.documento</th>
		<th>N.documento</th>
		<th>Dirección 1</th>
		<th>Barrio</th>
		<th>Telefono</th>
		<th>Celular</th>
		<th>Correo</th>
		<th>eps</th>
		<th>arl</th>
		<th>acciones</th>
	</tr>
<?php


$q = $mysqli->query("SELECT * FROM domiciliario ORDER BY id DESC");
while($r=mysqli_fetch_array($q)){
	?>
<!--mostrar  nomre del producto-->
<!--
		<div class="productos">
			<div class="name_producto">
			<?=$r['name']?>
		</div>


				<div>
					<img class="img_producto" src="clientes/<?=$r['imagen']?>"/>

					
				<div class="info">
					<p><br>Nombre:<span class="name"><?=$r['name']?></span><br></p>
					<p>Username: <span class="username"><?=$r['username']?></span><br></p>
					<p>Tipos de documento: <span class="tipo_documento"><?=$r['tipo_documento']?></span><br></p>
					<p>Numero de documento: <span class="Numero de documento"><?=$r['numero_documento']?></span><br></p>
					<p>Direccion 1: <span class="direccion1"><?=$r['direccion1']?></span><br></p>
					<p>Direccion 2: <span class="direccion2"><?=$r['direccion2']?></span><br></p>
					<p>Barrio: <span class="barrio"><?=$r['barrio']?></span><br></p>
					<p>Telefono: <span class="telefono"><?=$r['telefono']?></span><br></p>
					<p>Celular: <span class="celular"><?=$r['celular']?></span><br></p>
					<p>Correo: <span class="correo"><?=$r['correo']?></span><br></p>
				</div>


				</div>



		</div>
-->


		<tr>
	  
	  <td><span class="name"><?=$r['name']?></span></td>
	  <td><span class="username"><?=$r['username']?></span></td>
	  <td><span class="tipo_documento"><?=$r['tipo_documento']?></span></td>
	  <td><span class="Numero de documento"><?=$r['numero_documento']?></span></span></td>
	  <td><span class="direccion1"><?=$r['direccion1']?></span></td>
	  <td><span class="barrio"><?=$r['barrio']?></span></td>
	  <td><span class="telefono"><?=$r['telefono']?></span></td>
	  <td><span class="celular"><?=$r['celular']?></span></td>
	  <td><span class="correo"><?=$r['correo']?></span></td>
	  <td><span class="eps"><?=$r['eps']?></span></td>
	  <td><span class="correo"><?=$r['arl']?></span></td>
	  <td><a href="?p=modificar_domiciliario&id=<?=$r['id']?>"><i class="btn btn-warning glyphicon glyphicon-pencil"></i></a>
					<a href="?p=mostrar_domiciliario&eliminar=<?=$r['id']?>"><i class="btn btn-danger glyphicon glyphicon-trash"></i></a>
					
</td>
	   </tr>


	<?php
	
}
?>
</table>
<br><br>


	  


<a href="?p=admin">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>

	<!-- <a href="?p=reporte">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Exportar</button>
	 </a>
	-->

	  <a href="?p=domiciliario">
	     <button class="btn btn-success"><i class="fa fa-plus-circle"></i> Agregar</button>
	 </a>

	
