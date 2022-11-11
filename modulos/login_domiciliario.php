<?php
if(isset($_SESSION['id_domiciliario'])){
	redir("./"); 
}
//si hay una sesion inciada se hace esto
if(isset($enviar1)){
	$username = clear($username);
	$password = clear($password);
//pregunta  a la base de datos, tabla de administradores

	$q = $mysqli->query("SELECT * FROM domiciliario WHERE username = '$username' AND password = '$password'");

	//comprobacion de datos para el logueo

	if(mysqli_num_rows($q)>0){
		$r =mysqli_fetch_array($q);
		$_SESSION['id_domiciliario'] = $r['id'];
		redir("?p=perfil_domiciliario");
	}else{
		alert("Los datos no son validos");
		redir("?p=login_domiciliario");
	}
}

//Si ya hay una sesion iniciada hacer esto

if(isset($_SESSION ['id_domiciliario'])){
	?>

	<a href="?p=agregar_producto">
	     <button class="btn btn-primary"><i class="fa fa-plus-circle"></i> Agregar productos</button>
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
		
<!--Login para el domiciliario-->
	
<div class="centrar_login">
	<label></label><h2><i class="fa fa-key"></i>     Iniciar sesion como Domiciliario</h2></label>
<div class="form-group">

				<div class="fa fa-hiking">
				</div>
				<br>

	
					<input type="text" class="form-control" placeholder="Usuario" name="username"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="password"/>
				</div>

				<div class="form-group">
					<button class="btn btn-submit" name="enviar1" type="submit"><i class="glyphicon glyphicon-log-in"></i>  Ingresar</button>
				</div>
				<a href="?p=admin">
       				Regresar
     			</a>


     
    

		</div>

		</form>

	</center>
	<?php


}
?>
