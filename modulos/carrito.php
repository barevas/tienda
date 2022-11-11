
<?php

check_user("carrito");
//Si existe la variable eliminar , eliminar producto del carrito 


if(isset($eliminar)){
	$mysqli->query("DELETE FROM carrito WHERE id = '$eliminar'");
	redir("?p=carrito");
}

if(isset($finalizar)){

	$monto = clear($monto_total);
	$id_cliente = clear($_SESSION['id_cliente']);
	//insertar datos en la tabla compra 
	$q = $mysqli->query("INSERT INTO compra (id_cliente,fecha,monto,estado) VALUES ('$id_cliente',NOW(),'$monto',0)");
//variable para llamar unicamente l aultima compra hecha por el id_cliente
	$sc = $mysqli->query("SELECT * FROM compra WHERE id_cliente = '$id_cliente' ORDER BY id DESC LIMIT 1");
	$rc = mysqli_fetch_array($sc);
//ultima compra
	$ultima_compra = $rc['id'];

	 $q2 = $mysqli->query("SELECT * FROM carrito WHERE id_cliente = '$id_cliente'");
	while($r2=mysqli_fetch_array($q2)){

	 	//llamando el precio del producto
//arreglo para traer informacion sobre el procuctos

		//traer el costo del producto
	 	$sp = $mysqli->query("SELECT * FROM productos WHERE id = '".$r2['id_producto']."'");
		$rp = mysqli_fetch_array($sp);

		$monto = $rp['price'];

		$mysqli->query("INSERT INTO productos_compra (id_compra,id_producto,cantidad,monto) VALUES ('$ultima_compra','".$r2['id_producto']."','".$r2['cant']."','$monto')");
	 }
	 //vaciar carrito de compras despues de finalizar la compra 
	 

	 $mysqli->query("DELETE FROM carrito WHERE id_cliente='$id_cliente'");
	 alert("Compra finalizada");
	 //despues de finalizar la compra y vaciar el carrito re dirigimos al principal.	
	 redir("./");
}



?>
<h1><i class="fa fa-shopping-cart"></i>  Carrito de compras </h1>
<br><br>

<table class ="table table-striped">

	<tr>
		<th><i class="fa fa-image"></i>  Imagen</th>
		<th>Nombre del producto</th>
		<th>Marca</th>
		<th>Precio</th>
		<th>medida_producto</th>
		<th>Cantidad</th>
		<th>Precio total</th>
		<th>Acciones</th>
		
	</tr>
<?php
//mostrar datos del carrito donde ide sea igual a id:cliente 
$id_cliente = clear($_SESSION['id_cliente']);
$q = $mysqli->query("SELECT * FROM carrito WHERE id_cliente = '$id_cliente'");
//$q3 = mysqli_fetch_array($q);
$monto_total = 0;

//arreglo para mostrar los productos agregados al carro
//areglo para llamar datos de una base 
while($r = mysqli_fetch_array($q)){
	$q2 = $mysqli->query("SELECT * FROM productos WHERE id = '".$r['id_producto']."'");
	$r2 = mysqli_fetch_array($q2);

	$nombre_producto = $r2['name'];//nombre en la base de datos
	//llamar datos mediante arreglos
	$marca_producto = $r2['marca'];
	$precio_producto = $r2['price']	;
	$medida_producto = $r2['cantidad'];
	$cantidad_productos = $r['cant'];
	$precio_total= $cantidad_productos * $precio_producto;
	$imagen_producto = $r2['imagen'];

//--Calcular costo total--
	$monto_total = $monto_total + $precio_total;
	?>



<!--Declarar variables-->


	
	<tr>
	  <td><img src="productos/<?=$imagen_producto?>" class="imagen_carro"/></td>
	  <td><?=$nombre_producto?></td>
	  <td><?=$marca_producto?></td>
	  <td><?=$precio_producto?><?=$divisa?></td>
	  <td><?=$medida_producto?></td>
	  <td><?=$cantidad_productos?></td>
	  <td><?=$precio_total?><?=$divisa?></td>

	  <!--Eliminar-->
	  <td>
	  	

					<a href="?p=carrito&eliminar=<?=$r['id']?>"><i class="btn btn-danger glyphicon glyphicon-trash"></i></a>
				</td>
	</tr>
	<?php
	
}
?>
</table>
<table class="table table-striped">
<tr>
	<td><h4>Total a pagar:</h4></td>
	<td>
<div class="costo_total">
<td><h4><?=$monto_total?><?=$divisa?></h4></td>
</div>
</td>
</tr>

  </table>

<!--finaliza la compra, envia datos a facturacion-->

<?php
if($monto_total!=0){
?>
<form method="post" action="">
	<input type="hidden" name="monto_total" value="<?=$monto_total?>"/>
	<button class="btn btn-danger" type="submit" name="finalizar"><i class="fa fa-cart-arrow-down	"></i> Finalizar Compra</button>
</form>
<?php
}
?>
<br>
<a href="?p=productos">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>
