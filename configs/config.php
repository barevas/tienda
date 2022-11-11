<?php
@session_start();
@extract($_REQUEST);

//variable conexion con mysql

$host_mysql = "localhost";
$user_mysql = "root";
$pass_mysql = "";
$db_mysql = "tienda";
$divisa= "COP";/*Divisa (tipo de moneda)*/

?>