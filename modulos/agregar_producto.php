<?php
check_admin();//checkear si el user es admin y si no redirecciona a la principal con el js

//si le damos clic a enviar se limpian los campos
if(isset($enviar)){
	$codigo = clear($codigo);
	$name = clear($name);
	$marca = clear($marca);
	$price = clear($price);
	$cantidad = clear($cantidad);
	$categoria = clear($categoria);

	
//insertar imagen (guardar)
	$imagen = "";

	if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
		$imagen = $name.rand(0,1000).".png";
		move_uploaded_file($_FILES['imagen']['tmp_name'], "productos/".$imagen);
	}
//insertar datos en la base 
	$mysqli->query("INSERT INTO productos (codigo,name,marca,price,cantidad,imagen,stock) VALUES ('$codigo','$name','$marca','$price','$cantidad','$imagen','$stock')");
	alert("Producto agregado");
	redir("?p=agregar_producto");
}
//si existe la variable eliminar , se elimina producto de la bd 
if(isset($eliminar)){
	$mysqli->query("DELETE FROM productos WHERE id = '$eliminar'");
	alert("Producto eliminado");
	redir("?p=agregar_producto");
}

?>
<!--formulario datos del producto-->
<form method="post" action="" enctype="multipart/form-data">

	<div class="form-group">
		<input type="text" class="form-control" name="codigo" placeholder="codigo del producto" required/>
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="name" placeholder="Nombre del producto" required/>
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="marca" placeholder="Marca del producto" required/>
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="price" placeholder="Precio del producto" required/>
	</div>


	<div class="form-group">
		<input type="text" class="form-control" name="cantidad" placeholder="Cantidad del producto" required/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="stock" placeholder="Unidades" required/>
	</div>


	<label>Imagen del producto</label>

	<div class="form-group">
		<input type="file" class="form-control" name="imagen" title="Imagen del producto" placeholder="Imagen del producto" required/>
	</div>


	

	<div class="form-group">
		<button type="submit" class="btn btn-success" name="enviar"><i class="fa fa-check"></i> Agregar Producto</button>

	</div>
</form>
	<a href="?p=admin">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>

<!--Mostrar datos del producto-->

<br><br><br>
<table class="table table-striped">
	<tr>
		<th><i class="fa fa-image"></i> </th>
		<th>ID</th>
		<th>Nombre</th>
		<th>Marca</th>
		<th>Precio</th>
		<th>Cantidad</th>
		<th>U.Disponibles</th>
		<th>Funciones</th>
				
	</tr>
		<?php
		//arreglo para traer los datos de la base categorias
		$prod = $mysqli->query("SELECT * FROM productos ORDER BY id DESC");

		//traer los datos mediante un arreglo
		while($rp=mysqli_fetch_array($prod)){

			//arreglo para traer la categoria 
			$cat = $mysqli->query("SELECT * FROM categorias WHERE id = '".$rp['id_categoria']."'");
			

			if(mysqli_num_rows($cat)>0){
				$rcat = mysqli_fetch_array($cat);
				$categoria = $rcat['categoria'];
			}else{
				$categoria = "--";
			}
			?>
			<!--Mostrar el dato traido por el arreglo-->
			
			<tr>


				<td><img src="productos/<?=$rp['imagen']?>" class="imagen_carro"/></td>
				<td><?=$rp['id']?></td>
				<td><?=$rp['name']?></td>
				<td><?=$rp['marca']?></td>
				<td><?=$rp['price']?></td>
				<td><?=$rp['cantidad']?></td>
				<!--Si el stock es menor a 12, mostrar alerta-->
				<td><?=$rp['stock']; if($rp['stock']<12){
					?>
					<a class="btn btn-prmiary" name="stock"><i class="fa fa-serch"></i></a>
					<?php
				}?> </td>
				

				<!--Boton para modificar los productos-->
				<td>
				<a href="?p=modificar_producto&id=<?=$rp['id']?>"><i class="btn btn-warning glyphicon glyphicon-pencil"></i></a>
				<!--Boton para eliminar categoria , Se envia al if anterior -->
					
					<a href="?p=agregar_producto&eliminar=<?=$rp['id']?>"><i class="btn btn-danger glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>




			<?php
		}
	
		?>
		
</table>

		