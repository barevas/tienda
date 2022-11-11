<?php
check_admin();

?>


<table class ="table table-striped">

	<tr>
		<th><i class="fa fa-image"></i> </th>
		<th>Nombre</th>
		<th>Username</th>
		<th>T.documento</th>
		<th>N.documento</th>
		<th>Dirección 1</th>
		<th>Dirección 2</th>
		<th>Barrio</th>
		<th>Telefono</th>
		<th>Celular</th>
		<th>Correo</th>
	</tr>
<?php


$q = $mysqli->query("SELECT * FROM clientes ORDER BY id DESC");
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
	  <td><img src="clientes/<?=$r['imagen']?>" class="imagen_carro"/></td>
	  <td><span class="name"><?=$r['name']?></span></td>
	  <td><span class="username"><?=$r['username']?></span></td>
	  <td><span class="tipo_documento"><?=$r['tipo_documento']?></span></td>
	  <td><span class="Numero de documento"><?=$r['numero_documento']?></span></span></td>
	  <td><span class="direccion1"><?=$r['direccion1']?></span></td>
	  <td><span class="direccion2"><?=$r['direccion2']?></span></td>
	  <td><span class="barrio"><?=$r['barrio']?></span></td>
	  <td><span class="telefono"><?=$r['telefono']?></span></td>
	  <td><span class="celular"><?=$r['celular']?></span></td>
	  <td><span class="correo"><?=$r['correo']?></span></td>
	   </tr>

	<?php
	
}
?>
</table>
<br><br>


	  


<a href="?p=admin">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>

	 <a href="modulos/pdf.php">
	     <button class="btn btn-warning"><i class="fas fa-download"></i> Exportar</button>
	 </a>

	 <a href="?p=reporte"></a>

	 <div class="row">
        <div class="col text-center">
          <a href="modulos/pdf.php">
            Generar XLS
          </a>
        </div>
      </div>
  	</div>




	 

