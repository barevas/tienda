<?php


$host_mysql = "localhost";
$user_mysql = "root";
$pass_mysql = "";
$db_mysql = "tienda";
$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

 //mysql_connect($host_mysql,$user_mysql,$pass_mysql) or die("Error al conectar al servidor mysql");

 //conexion a la base de datos

 //mysql_select_db($db_mysql) or die("Error conectando a la base de datos");
  
//login del administrador

  function clear($var){
	htmlspecialchars($var);

	return $var;
}

 function check_admin(){
	if(!isset($_SESSION['id'])){
		redir("./");
	}
}

function check_domiciliario(){
	if(!isset($_SESSION['id_domiciliario'])){
		redir("./");
	}
}

 function redir($var){
	?>
	<script>
		window.location="<?=$var?>";
	</script>
	<?php
	die();
}

 function alert($var){
 	?>
 	<script type="text/javascript">
 		alert("<?=$var?>");
 	</script>

 	<?php
 }

//funcion para comprobar el user
 function check_user($url){

 	//si no existe la sesion de cliente entonces retornar al login
 	if(!isset($_SESSION['id_cliente'])){
 		redir("?p=login&return=$url");	
 	}else{

 	}

 }

 //funcion que recibe el id_cliente
 //funcion para mostrar el nombre del cliente

 function nombre_cliente($id_cliente){
	$mysqli = connect();

	$q = $mysqli->query("SELECT * FROM clientes WHERE id = '$id_cliente'");
	$r = mysqli_fetch_array($q);
	return $r['name'];
}

function nombre_domiciliario($id_domiciliario){
	$mysqli = connect();

	$q = $mysqli->query("SELECT * FROM domiciliario WHERE id = '$id_domiciliario'");
	$r = mysqli_fetch_array($q);
	return $r['name'];
}

 function connect(){
	$host_mysql = "localhost";
	$user_mysql = "root";
	$pass_mysql = "";
	$db_mysql = "tienda";


 	$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

	return $mysqli;
}

function admin_name_connected(){
	include "config.php";
	$id = $_SESSION['id'];
	$mysqli = connect();

	$q = $mysqli->query("SELECT * FROM admins WHERE id = '$id'");
	$r = mysqli_fetch_array($q);

	return $r['name'];

}

function estado($id_estado){
	
	if($id_estado == 0){
			$estado = "Registrado";
		}elseif ($id_estado == 1) {
			$estado = "Alistando";
		}elseif ($id_estado == 2) {
			$estado = "En camino";
		}elseif ($id_estado == 3) {
			$estado = "Entregado";
		}elseif ($id_estado == 4){
			$estado = "Cancelado";
		}
		return $estado;
}

?>
