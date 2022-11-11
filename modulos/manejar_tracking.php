<?php
//para validar si el admin tiene la sesion iniciada
//si existe eliminar(boton de aabajo )

if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM productos_compra WHERE id_compra = '$eliminar'");
	$mysqli->query("DELETE FROM compra WHERE id = '$eliminar'");
	alert("Venta eliminada");
	redir("?p=manejar_tracking");  
}

//arreglo para traer estado de la compra
$s = $mysqli->query("SELECT * FROM compra WHERE estado != 3 ORDER BY  fecha desc");

?>

<h1>Estado</h1>
<table class="table table-stripe">
	<tr>
		
		<th>Cliente</th>
		<th>Fecha</th>
		<th>Monto</th>
		<th>Estado</th>
		<th>Acciones</th>
	</tr>
	<?php

	while($r=mysqli_fetch_array($s)){
//TRAEMOS LA INFORMACION DEL CLIENTE DE LA BD
		$sc = $mysqli->query("SELECT *FROM clientes WHERE id = '".$r['id_cliente']."'");
		$rc = mysqli_fetch_array($sc);
		$cliente = $rc['name'];
//si el estado es 0 estara en registrado
		if($r['estado'] == 0){
			$estado = "Registrado";
		}elseif ($r['estado'] == 1) {
			$estado = "Alistando";
		}elseif ($r['estado'] == 2) {
			$estado = "En camino";
		}else{
			$estado = "Entregado";
		}
		?>
		<tr>
		<!--Llamar los  datos de la tabla compra-->
			<td><?=$cliente?></td>
			<td><?=$r['fecha']?></td>
			<td><?=$r['monto']?> <?=$divisa?></td>
			<td><?=$estado?></td>
			<td>
				

		<?php
      			if(isset($_SESSION['id'])){
    	?>

				<a href="?p=manejar_tracking&eliminar=<?=$r['id']?>"><i class="btn btn-danger glyphicon glyphicon-trash"></i></a>

		<?php
		}
		?>

				<a href="?p=ver_compra&id=<?=$r['id']?>"><i class="btn btn-info glyphicon glyphicon-eye-open"></i></a>

			</td>

		</tr>
		<?php

	}

	?>

</table>
<a href="?p=admin">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>

<?php
      			if(isset($_SESSION['id'])){
    	?>
	  <a href="?p=historico_ventas">
	     <button class="btn btn-warning"><i class="fas fa-search"></i> Historico</button>
	 </a>
<?php

}
?>