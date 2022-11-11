
<?php
//comprobar que este la sesion iniciada



if(isset($agregar) && isset($cant)){

	$idp = clear($agregar);
	$cant = clear($cant);
	$id_cliente = clear($_SESSION['id_cliente']);
/////////////////////////////////////////////////////////////////este
	

	$v = $mysqli->query("SELECT * FROM carrito WHERE id_cliente = '$id_cliente' AND id_producto = '$idp'");
	/*$q3 = $mysqli->query("SELECT * FROM productos WHERE id_producto= '$idp'");
	$r3=mysqli_fetch_array($q3);

	 if ($cant>$r3['stock']) {
		# code...
	}
*/
	if(mysqli_num_rows($v)>0){

	   //si le producto si esta agregado, actualizar la cantidad

		$q = $mysqli->query("UPDATE carrito SET cant = cant + $cant WHERE id_cliente = '$id_cliente' AND id_producto = '$idp'");
	
	}

	else{
		//si el producto no esta gregado, insertarlo

		$q = $mysqli->query("INSERT INTO carrito (id_cliente,id_producto,cant) VALUES ($id_cliente,$idp,$cant)");

	}
	



	

	alert("Se ha agregado al carro de compras",1,'productos');
	redir("?p=productos");

}
//Si existe la val¡iable busqueda , consultar en la bd
if(isset($busq)){
	$q = $mysqli->query("SELECT * FROM productos WHERE name LIKE '%$busq%'");
}else{
	$q = $mysqli->query("SELECT * FROM productos ORDER BY id DESC");
}
?>


<form method="post" action="">
	<!--Recuadro de busqueda-->
	
				<div class="form-group">
					<input type="text" class="form-control" name="busq" placeholder="Coloca el nombre del producto"/>
				</div>
		
			<div>
				<button type="submit" class="btn btn-prmiary" name="buscar"><i class="fa fa-serch"></i> Buscar</button>
			</div>
		
</form>
<?php

//mostrar toso los productos agregados del mas nuevo al mas antiguo
$q = $mysqli->query("SELECT * FROM productos ORDER BY id DESC");
while($r=mysqli_fetch_array($q)){
	?>
	<!--Si la cantidad de unidades es menor a cero, no se muestra producto-->
	<?php
			if($r['stock']>0){

				?>
<!--mostrar  nomre del producto-->
		<div class="productos">
			<div class="name_producto">
			<?=$r['name']?>
		</div>

<!--mostrar  imagen del producto-->

				<div>
					<img class="img_producto" src="productos/<?=$r['imagen']?>"/>

					<!--Informacion del prducto-->
				<div class="info">
					<p><br>Codigo del producto:<span class="codigo"><?=$r['codigo']?></span><br></p>
					<p>Marca: <span class="marca"><?=$r['marca']?></span><br></p>
					<p>Cantidad: <span class="cantidad"><?=$r['cantidad']?></span><br></p>
					<p>Precio: <span class="precio"><?=$r['price']?><?=$divisa?></span><br></p>
				</div>

					<!--Boton con carrito -->
					<?php
					if(isset($_SESSION['id_cliente'])){

						?>
					<button class="btn btn-success pull-right" onclick="agregar_carro('<?=$r['id']?>');"><i class="fa fa-shopping-cart"></i></button>

					<?php
				}
				?>

					<!--Onclic para j¡llamar funcion js de elegir cantidad-->

				</div>



		</div>

		<?php
}

?>

		
		<?php
}

?>
<br><br>
	<a href="?p=carrito">
	     <button class="btn btn-danger"><i class="fas fa-shopping-cart"></i> Ir al carrito</button>
	 </a>





	  <script type="text/javascript">

function agregar_carro(idp){
		var cant = prompt("¿Cuantas unidades desea agregar?",1);

		if(cant<=0){
		 confirm("Cantidad no valida, por favor ingrese una cantidad correcta (solo numeros) cantidad minima 1, cantidad maxima 20");
		}	

		 else if(cant.length>0){
			window.location="?p=productos&agregar="+idp+"&cant="+cant;
		}
		
		



		
	}

</script>