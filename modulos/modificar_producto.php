<?php
check_admin();

$id = clear($id);

$q = $mysqli->query("SELECT * FROM productos WHERE id = '$id'");
$rq = mysqli_fetch_array($q);

if(isset($enviar)){
	$idpro = clear($idpro);
	$name = clear($name);
	$marca = clear($marca);
	$price = clear($price);
	$cantidad = clear($cantidad);


	$mysqli->query("UPDATE productos SET name = '$name',marca = '$marca',price = '$price',cantidad = '$cantidad', stock = '$stock' WHERE id = '$idpro'");
	redir("?p=agregar_producto");

}

?>
<table>
<form method="post" action="" enctype="multipart/form-data">
<tr>
	<td>Nombre  </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="name" value="<?=$rq['name']?>" placeholder="Nombre del producto"/>
	</div>
	</td>
</tr>

<tr>
	<td>Marca </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="marca" value="<?=$rq['marca']?>" placeholder="Precio del producto"/>
	</div>
	</td>
</tr>
<tr>
	<td>Precio </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="price" value="<?=$rq['price']?>" placeholder="Precio del producto"/>
	</div>
	</td>
</tr>
<tr>
	<td>Cantidad    </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="cantidad" value="<?=$rq['cantidad']?>" placeholder="Cantidad del producto"/>
	</div>
	</td>
</tr>

<tr>
	<td>  Stock    </td>
	<td>
		<a>  <?=$rq['stock']?></a>
	</td>
	
</tr>

</table>


	


	

	

		<!--
	<div class="form-group">


		<select name="categoria"  class="form-control">
			<option value="">Seleccione una categoria</option>
			<?php
				$q = $mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");

				while($r=mysqli_fetch_array($q)){
					?>

						<option <?php if($rq['id_categoria'] == $r['id']) { echo "selected"; } ?>  value="<?=$r['id']?>"><?=$r['categoria']?></option>
					<?php
				}
			?>
		</select>

	</div>
-->  





<br><br> 
	<div class="form-group">
		<button type="submit" class="btn btn-success" name="enviar"><i class="glyphicon glyphicon-folder-open">  Modificar</i></button>
	</div>

	<a href="?p=admin">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>


<input type="hidden" name="idpro" value="<?=$id?>"/>

</form>