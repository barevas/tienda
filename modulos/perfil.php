<?php
check_user("clientes");
?>

<div align="center">
<table class ="table table-striped">

	
<?php
$id_cliente = clear($_SESSION['id_cliente']);

$q = $mysqli->query("SELECT * FROM clientes WHERE id_cliente = '$id_cliente'");
	
	
	?>
	
<?php
$q = $mysqli->query("SELECT * FROM clientes WHERE id='$id_cliente'");
while($r=mysqli_fetch_array($q)){
	?>


		
	  <tr><h3>Mi perfil</h3><br></tr>	
	  <tr><img src="clientes/<?=$r['imagen']?>" class="imagen_perfil"/></tr><br><br>
	  <tr><span class="name"><?=$r['name']?></span></tr><br>
	  <tr><span class="username"><?=$r['username']?></span></tr><br>
	  <tr>Tipo de documento<span class="tipo_documento"><?=$r['tipo_documento']?></span></tr><br>
	  <tr><span class="Numero de documento"><?=$r['numero_documento']?></span></span></tr><br>
	  <tr><span class="direccion1"><?=$r['direccion1']?></span></tr><br>
	  <tr><span class="direccion2"><?=$r['direccion2']?></span></tr><br>
	  <tr><span class="barrio"><?=$r['barrio']?></span></tr><br>
	  <tr><span class="telefono"><?=$r['telefono']?></span></tr><br>
	  <tr><span class="celular"><?=$r['celular']?></span></tr><br>
	  <tr><span class="correo"><?=$r['correo']?></span></tr><br><br>

	  
	   

	<?php
	
}
?>
</table>
</div>
<br><br>


	  


<a href="./">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>

	<a href="?p=modificar_perfil"><i class="btn btn-warning glyphicon glyphicon-pencil"> Editar</i></a>

	 