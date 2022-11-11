

<?php

//si hay una sesion inciciada se redirige a la pagina principal

if(isset($_SESSION['id_cliente'])){
	redir("./"); 
}


//si hay una sesion inciada se hace esto
if(isset($enviar)){
	$username = clear($username);
	$password = clear($password);
//pregunta  a la base de datos, tabla de administradores

	$q = $mysqli->query("SELECT * FROM clientes WHERE username = '$username' AND password = '$password'");

	//comprobacion de datos para el logueo

	if(mysqli_num_rows($q)>0){
		$r = mysqli_fetch_array($q);
		$_SESSION['id_cliente'] = $r['id'];
		if(isset($return)){
			redir("?p=".$return);
		}else{
			redir("./");
		}
	}else{
		alert("Los datos no son validos",0,'login');
		
	}
}

//Si ya hay una sesion iniciada hacer esto


?>

<center>

	<form method="post" action="">
			<div class="centrar_login">
				<label><h2><i class="fa fa-key"></i> Iniciar Sesión</h2></label>
				<div class="form-group">
					<i class="glyphicon glyphicon-user"></i><input type="text" autocomplete="off" class="form-control" placeholder="Usuario" name="username"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Contraseña" name="password"/>
				</div>

				<div class="form-group">
					<button class="btn btn-log-on" name="enviar" type="submit"><i class="glyphicon glyphicon-log-in"></i> Ingresar</button>
				</div>
				<br>
				<a class="" href="?p=registro " >Registrarse</a>
               
			</div>
		</form>
	</center>
