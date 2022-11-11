<?php
check_admin();

?>


<table class ="table table-striped">

	<tr>
		
		<th>Id_accion</th>
		<th>Id_compra</th>
		<th>Id_producto</th>
		<th>Cantidad</th>
		<th>Und. vendidas</th>
		<th>V.Unidad</th>
		
	</tr>
<?php

		
$q = $mysqli->query("SELECT * FROM productos_compra");
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
<?php
$sp = $mysqli->query("SELECT * FROM productos WHERE id = '".$r['id_producto']."'");
		$rp = mysqli_fetch_array($sp);
?>

		<tr>
	  
	  <td><span class=""><?=$r['id']?></span></td>
	  <td><span class=""><?=$r['id_compra']?></span></td>
	  <td><span class=""><?=$rp['name']?></span></td>
	  <td><span class=""><?=$rp['cantidad']?></span></td>
	  <td><span class=""><?=$r['cantidad']?></span></td>
	  <td><span class=""><?=$r['monto']?></span></td>
	  

	<?php
	
}
?>
</table>
<br><br>


	  


<a href="?p=admin">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>

	 <a href="modulos/pdf3.php">
	     <button class="btn btn-warning"><i class="fas fa-download"></i> Exportar</button>
	 </a>

	 <a href="?p=reporte"></a>

	 <div class="row">
        
      </div>
  	</div>

