<?php

$id = clear($id);

//arreglo para traer info de la compra

$s = $mysqli->query("SELECT *FROM compra WHERE id ='$id'");
$r = mysqli_fetch_array($s);

//arreglo para traer info del cliente
$sc = $mysqli->query("SELECT * FROM clientes WHERE id = '".$r['id_cliente']."'");
$rc = mysqli_fetch_array($sc);
//traigo la informacion a las variables
$nombre = $rc['name'];
$venta = $r['id'];
$fecha = $r['fecha'];
$direccion1 = $rc['direccion1'];
$celular = $rc['celular'];
$telefono = $rc['telefono'];

?><!--Mostrar informacion traida con los arreglos-->
<h3><span style="color: orange"><b>Venta #<?=$venta?></b></span></h3>

<table class="table table-striped">
	<tr>
		<td><h4>Fecha</h4></td>
		<td><?=$fecha?></td>
	<tr>
	<tr>
		<td><h4>Cliente</h4></td>
		<td><?=$nombre?></td>
	<tr>
	<tr>
		<td><h4>Valor</h4></td>
		<td><?=number_format($r['monto'])?> <?=$divisa?></td>
	<tr>
	<tr>
		<td><h4>Direccion</h4></td>
		<td><?=$direccion1?></td>
	<tr>
	<tr>
		<td><h4>Celular</h4></td>
		<td><?=$celular?></td>
	<tr>
	<tr>
		<td><h4>Telefono</h4></td>
		<td><?=$telefono?></td>
	<tr>
   	<tr>
		<td><h4>Estado</h4></td>
<!--DEfinimos una funcion en js para validar el estado de la venta (estado)-->
		<td><?=estado($r['estado'])?></td>
	</tr>
	<?php
$id = clear($id);
//Traer los datos de la tabla compra
$s = $mysqli->query("SELECT * FROM compra WHERE id = '$id'");
//almacenar los datos en el arreglo
$r = mysqli_fetch_array($s);
//Modificar datos de la tabla estado de la compra
if (isset($modificar)){
	$estado = clear($estado);
	$mysqli->query("UPDATE compra SET estado = '$estado' WHERE id = '$id' ");
	redir("?p=manejar_tracking");
}
?>
<tr>
<td>
<h4>Estado de la venta </h4>
</td>
<td>
<form method="post" action>
	<div class="form group">
	<select class="form-control" name="estado">
		<option <?php if($r['estado'] == 0){echo "selected";}?>value="0">Registrado</option>
		<option <?php if($r['estado'] == 1){echo "selected";}?>value="1">Alistando</option>
		<option <?php if($r['estado'] == 2){echo "selected";}?>value="2">En camino</option>
		<option <?php if($r['estado'] == 3){

			

			echo "selected";}?>value="3">Entregado</option>
	</select>
	</div>
	<div class="form group">
		<input class ="btn-warning" type="submit" value= "Modificar "name="modificar">

	</div>
</form>
</td>
<tr>
</table>
<table class="table table-hover">
	
	<th>ID Producto</th>
	<th>Nombre</th>
	<th>Marca</th>
	<th>Precio</th>
	<th>Medida	</th>
	<th>Cantidad	</th>
	<th>Monto Total	</th>

	<?php

	//arreglo para traer los datos de la tabal productos_compra
	$sp = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '$id'");
		while($rp=mysqli_fetch_array($sp)){
//arreglo para traer datos de los productpr
			$spro = $mysqli->query("SELECT * FROM productos WHERE id = '".$rp['id_producto']."'");
			$rpro = mysqli_fetch_array($spro);
	//funciones para llenar las variables con la info de la bd
		$id = $rpro['id'];
		$nombre_producto = $rpro['name'];
		$marca = $rpro['marca'];
		$precio = $rpro['price'];
		$cantidad = $rpro['cantidad'];
		$montototal = $rp['monto']* $rp['cantidad'];
		$monto1 = $rp['monto'];
		?>
		<tr>
		<td><?=$id?></td>
		<td><?=$nombre_producto?></td>
		<td><?=$marca?></td>
		<td><?=$precio?></td>
		<td><?=$cantidad?></td>
		<td><?=$rp['cantidad']?></td>
		
		<td><?=$montototal?></td>
		</tr>

		

		<?php
	}
	?>
		<tr>
			<td><h3>Total a pagar:</h3><td></td><td></td><td></td><td></td><td></td><td><h3><?=$monto1?></h3></td>
		</tr>

</table>


<a href="?p=manejar_tracking">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>