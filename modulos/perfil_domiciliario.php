   
    <?php
//chequeamos si existe una session de domiciliario mediante la funcion en JS
check_domiciliario('id_domiciliario');
    if(isset($enviar)){
    	?>

    	<table class="table table-striped">
	<tr>
		<th><i class="fa fa-image"></i> </th>
		<th>ID</th>
		<th>Nombre</th>
		<th>Marca</th>
		<th>Precio</th>
		<th>Cantidad</th>
		<th>Categoria</th>
				
	</tr>
		<?php
		//arreglo para traer los datos de la base categorias
		$q = $mysqli->query("SELECT * FROM productos ORDER BY id DESC");

		//traer los datos mediante un arreglo
		while($r=mysqli_fetch_array($q)){
			?>
			<!--Mostrar el dato traido por el arreglo-->
			<tr>
				<td><img src="productos/<?=$r['imagen']?>" class="imagen_carro"/></td>
				<td><?=$r['id']?></td>
				<td><?=$r['name']?></td>
				<td><?=$r['marca']?></td>
				<td><?=$r['price']?></td>
				<td><?=$r['cantidad']?></td>
				<td><?=$r['id_categoria']?></td>
				
			</tr>



			<?php
		}
	}
		?>
	</table>
		<a href="?p=salir">
	     <button class="btn btn-warning pull-right">Salir<span class="glyphicon glyphicon-log-out"></span></button>
	 </a>

		
		
 	<form method="post" action="">
  <div class="form-gorup">
  	
  		<input type="submit" class="btn btn-success" name="enviar" value="Productos"/>
  	</div>
</form>
		<br>
	<a href="?p=manejar_tracking2">
	     <button class="btn btn-primary"><i class="fas fa-hiking"></i> Entregas</button>
	 </a>


	 







