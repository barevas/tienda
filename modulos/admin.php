<?php

//si hay una sesion inciada se hace esto
if(isset($enviar)){
	$username = clear($username);
	$password = clear($password);
//pregunta  a la base de datos, tabla de administradores

	$q = $mysqli->query("SELECT * FROM admins WHERE username = '$username' AND password = '$password'");

	//comprobacion de datos para el logueo

	if(mysqli_num_rows($q)>0){
		$r =mysqli_fetch_array($q);
		$_SESSION['id'] = $r['id'];
		redir("?p=admin");
	}else{
		alert("Los datos no son validos");
		redir("?p=admin");
	}
}

//Si ya hay una sesion iniciada hacer esto

if(isset($_SESSION ['id'])){
	?>

	<a href="?p=agregar_producto">
	     <button class="btn btn-primary"><i class="fas fa-drumstick-bite"></i> Productos</button>
	 </a>

	 <a href="?p=inventario">
	     <button class="btn btn-info"><i class="glyphicon glyphicon-list-alt"></i> Inventario</button>
	 </a>

	  <a href="?p=manejar_tracking">
	     <button class="btn black-background white"><i class="glyphicon glyphicon-usd"></i> Ventas</button>
	 </a>

	 <a href="?p=clientes">
	     <button class="btn btn-warning	"><i class="fas fa-user-friends"></i> Mis clientes</button>
	 </a>

	 <a href="?p=mostrar_domiciliario">
	     <button class="btn btn-success	"><i class="fas fa-motorcycle"></i> Domiciliarios</button>
	 </a>


	 <a href="?p=salir">
	     <button class="btn btn-warning pull-right">Salir<span class="glyphicon glyphicon-log-out"></span></button>
	 </a>

	<?php






//si no , esto (login de ingreso como adminictrador)Loguarse
}

else {
?>

<center>
	<form method="post"  action="">		

		<div class="centrar_login"><!--Diseño del login-->
			<label></label><h2><i class="fa fa-key"></i>     Iniciar sesion como Emprendedor</h2></label>
		<div class="form-group">

	
					<input type="text" class="form-control" placeholder="Usuario" name="username"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="password"/>
				</div>

				<div class="form-group">
					<button class="btn btn-submit" name="enviar" type="submit"><i class="glyphicon glyphicon-log-in"></i>  Ingresar</button>
				</div>
		
	<a href="?p=registro_admin"><b>
       Registrarse</b>
      </a><br><br>

     <a href="?p=login_domiciliario">
       Domiciliario
      </a>

       

    

		</div>

		</form>

	</center>
	<?php


}
?>
