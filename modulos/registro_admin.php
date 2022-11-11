<?php


//si le damos clic a enviar se limpian los campos
if(isset($registro) && ($password)==($password1) ){// && ($username)==true && ($password)==true && ($name)==true && ($tipo_documento)==true && ($numero_documento)==true && ($direccion1)==true && ($barrio)==true && ($telefono)==true && ($celular)==true && ($correo)==true){
	$correo_admin = clear($correo_admin);
	$password_admin = clear($password_admin);
	$name_admin = clear($name_admin);
	$tipo_documento_admin = clear($tipo_documento_admin);
	$numero_documento_admin = clear($numero_documento_admin);
	$direccion1_admin = clear($direccion1_admin);
	$direccion2_admin = clear($direccion2_admin);
	$barrio_admin = clear($barrio);
	$telefono_admin = clear($telefono_admin);
	$celular_admin = clear($celular_admin);

	
//insertar imagen (guardar)
	$imagen_admin = "";

	if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
		$imagen_admin = $name.rand(0,1000).".png";
		move_uploaded_file($_FILES['imagen_admin']['tmp_name'], "emprendedor/".$imagen_admin);
	}
//insertar datos en la base 
	$mysqli->query("INSERT INTO clientes (correo_admin,password_admin,name_admin,tipo_documento_admin,numero_documento_admin,direccion1_admin,direccion2_admin,barrio_admin,telefono_admin,celular_admin,imagen_admin) VALUES ('$correo','$password','$name','$tipo_documento','$numero_documento','$direccion1','$direccion2','$barrio_admin','$telefono_admin','$celular_admin','$imagen_admin')");
	alert("Datos agregados correctamente");
	redir("?p=login");
}else if(isset($registro) && ($password)!=($password1)){
	alert("Las contraseñas no coinciden");
	redir("?p=registro_admin");

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
		<input type="text" class="form-control" name="direccion2" placeholder="Segunda direccion (opcional)"/>
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
    
	<label>Foto de perfil (opcional)</label>

	<div class="form-group">
		<input type="file" class="form-control" name="imagen" title="Foto de perfil" placeholder="Foto de perfil"/>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-success" name="registro"><i class="fa fa-check"></i> Registrarse</button>

	</div>


	
</form>