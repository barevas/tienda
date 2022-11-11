<?php
check_admin();

$id = clear($id);

$q = $mysqli->query("SELECT * FROM domiciliario WHERE id = '$id'");
$rq = mysqli_fetch_array($q);

if(isset($enviar)){
	$iddom = clear($iddom);
	$username = clear($username);
	$password = clear($password);
	$name = clear($name);
	$tipo_documento = clear($tipo_documento);
	$numero_documento = clear($numero_documento);
	$direccion1 = clear($direccion1);
	$barrio = clear($barrio);
	$telefono = clear($telefono);
	$celular = clear($celular);
	$correo = clear($correo);
	$eps = clear($eps);
	$arl = clear($arl);


	$mysqli->query("UPDATE domiciliario SET username = '$username',password = '$password',name = '$name',tipo_documento = '$tipo_documento',numero_documento = '$numero_documento',direccion1 = '$direccion1',barrio = '$barrio',telefono = '$telefono',celular = '$celular',correo = '$correo',eps = '$eps',arl = '$arl' WHERE id = '$iddom'");
	redir("?p=mostrar_domiciliario");

}

?>
<table>
<form method="post" action="" enctype="multipart/form-data">
<tr>
	<td>Usuario  </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="username" value="<?=$rq['username']?>" placeholder="Usuario"/>
	</div>
	</td>
</tr>

<tr>
	<td>Contraseña </td>
	<td>
	<div class="form-group">
		<input type="password" class="form-control" name="password" value="<?=$rq['password']?>" placeholder="Contraseña"/>
	</div>
	
	</td>
</tr>
<tr>

<tr>
	<td>Nombre  </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="name" value="<?=$rq['name']?>" placeholder="Nombre "/>
	</div>
	</td>
</tr>
<tr>
	<td>Tipo_documento  </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="tipo_documento" value="<?=$rq['tipo_documento']?>" placeholder="tipo_documento "/>
	</div>
	</td>
</tr>
<tr>
	<td>Numero_documento  </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="numero_documento" value="<?=$rq['numero_documento']?>" placeholder="numero_documento "/>
	</div>
	</td>
</tr>

<tr>
	<td>Direccion </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="direccion1" value="<?=$rq['direccion1']?>" placeholder="Direccion"/>
	</div>
	</td>
</tr>

<tr>
	<td>Barrio   </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="barrio" value="<?=$rq['barrio']?>" placeholder="Barrio"/>
	</div>
	</td>
</tr>

<tr>
	<td>Telefono  </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="telefono" value="<?=$rq['telefono']?>" placeholder="Telefono"/>
	</div>
	</td>
</tr>

<tr>
	<td>celular   </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="celular" value="<?=$rq['celular']?>" placeholder="celular"/>
	</div>
	</td>
</tr>
<tr>
	<td>Correo   </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="correo" value="<?=$rq['correo']?>" placeholder="Correo"/>
	</div>
	</td>
</tr>
<tr>
	<td>Eps   </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="eps" value="<?=$rq['eps']?>" placeholder="Eps"/>
	</div>
	</td>
</tr>
<tr>
	<td>Arl   </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="arl" value="<?=$rq['arl']?>" placeholder="arl"/>
	</div>
	</td>
</tr>

</table>
	


	

	

		
	




<br><br> 

	<div class="form-group">
		<button type="submit"  class="btn btn-success" name="enviar"><i class="glyphicon glyphicon-folder-open">  Modificar</i></button>
	</div>



<input type="hidden" name="iddom" value="<?=$id?>"/>

</form>
<a href="?p=mostrar_domiciliario">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>