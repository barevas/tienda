<?php
check_admin();
if(isset($registro) && ($password)==($password1) ){

//si le damos clic a enviar se limpian los campos
// && ($username)==true && ($password)==true && ($name)==true && ($tipo_documento)==true && ($numero_documento)==true && ($direccion1)==true && ($barrio)==true && ($telefono)==true && ($celular)==true && ($correo)==true){
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

	
//insertar imagen (guardar)
	$imagen = "";

	if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
		$imagen = $name.rand(0,1000).".png";
		move_uploaded_file($_FILES['imagen']['tmp_name'], "domiciliario/".$imagen);
	}
//insertar datos en la base 
	$mysqli->query("INSERT INTO domiciliario (username,password,name,tipo_documento,numero_documento,direccion1,barrio,telefono,celular,correo, eps,arl,imagen) VALUES ('$username','$password','$name','$tipo_documento','$numero_documento','$direccion1','$barrio','$telefono','$celular','$correo','$eps','$arl','$imagen')");
	alert("Datos agregados correctamente");
	redir("?p=admin");

}else if(isset($registro) && ($password)!=($password1)){
	alert("Las contraseñas no coinciden");
	redir("?p=registro");

}


?>
<!--formulario datos del producto-->
<form method="post" action="" enctype="multipart/form-data">

	<div class="form-group">
		<input type="text" class="form-control" name="username" placeholder="Usuario de ingreso" required />
	</div>

	<div class="form-group registrarse">
		<input type="password" class="form-control" name="password" placeholder="contraseña de ingreso" required/>
	</div>

	<div class="form-group registrarse">
		<input type="password" class="form-control" name="password1" placeholder="Confirmar contraseña" required/>
	</div>

	<div class="form-group registrarse">
		<input type="text" class="form-control" name="name" placeholder="Nombres y Apellidos" required/>
	</div>

	<select name="tipo_documento" required>
		<option value="cc" selected="">Cedula de ciudadania</option>
		<option value="ti">Tarjeta de identidad</option>
		<option value="ce">Cedula de Extranjeria</option>
	</select>

	<div class="form-group">
		<input type="number" class="form-control" name="numero_documento" placeholder="Numero de documento" required/>
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="direccion1" placeholder="Primera direccion" required/>
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="barrio" placeholder="Barrio" required/>
	</div>

	<div class="form-group">
		<input type="number" class="form-control" name="telefono" placeholder="Telefono (opcional)"/>
	</div>

	<div class="form-group">
		<input type="number" class="form-control" name="celular" placeholder="celular" required/>
	</div>

	<div class="form-group">
		<input type="email" class="form-control" name="correo" placeholder="Correo electronico" required/>
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="eps" placeholder="EPS"required/>
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="arl" placeholder="ARL" required/>
	</div>
    
	<label>Foto de perfil (opcional)</label>

	<div class="form-group">
		<input type="file" class="form-control" name="imagen" title="Foto de perfil" placeholder="Foto de perfil" required/>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-success" name="registro"><i class="fa fa-check"></i> Registrar</button>

		
	</div>


	
</form>
<a href="?p=mostrar_domiciliario">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>

