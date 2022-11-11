<?php
include "configs/config.php"; /*Incluyendo archivos de configuracion*/
include "configs/funciones.php";


if(!isset($p)){ //Si no existe una pagina entonces pagina va a ser igual a principaal
	$p = "principal";
}else{
	$p = $p;
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8"/>
    <!--Llamando llibrerias /framewors-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> <!--Llamando los estilos de bootstrap-->
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">





    <style type="text/css">
    	*{
	font-family: arial;
}

body{
	padding:0;
	margin:0;
}

@import url('//fonts.googleapis.com/css?family=Pacifico&text=Pure');
@import url('//fonts.googleapis.com/css?family=Roboto:700&text=css');
@import url('//fonts.googleapis.com/css?family=Kaushan+Script&text=!');
@import "lesshat";
@import url(https://fonts.googleapis.com/css?family=Open+Sans);


.header1{
	background:tomato;
	color:#tomato;
	padding:5px;
	text-align: center;
	font-size:30px;
	font-weight: bold;
	text-transform: uppercase;
}
/*franja*/
.menu {
	padding: 0
  px;
  color: tomato;
	background:#FF9F13;
	margin: 0;
  height: 45px;
}
/*letra del nombre y salir franja*/
.menu a{
	text-decoration: none;
	color: white;
	background: #FF9F13;
	font-size: 15px;



}
/*al pasar el cursor cambia de color*/
.menu a:hover{
	background: #FF9F13
}

.cuerpo{ /*Estilos del cuero*/
	background: #eaeaea;
	padding: 30px;
	min-height: 550px;

}

.footer_a{
	padding: 30px;
	background: #FF9F13;
	color: #FF1010;
	text-align: center;
	font-size: 10px;
    font:oblique 80% cursive;
    height: 100px;

    }

.a{
	text-decoration: none;
	color: #fff;
}

.centrar_login{ /*Diseño del login*/
	width: 25%;
	text-align: center;
	padding-top: 100px;

}
/*Estilos para mostra productos*/
.productos{
	display: inline-block;
	width: 23%;
	padding: 10px;
	background: rgba(0,0,0,0.05);/*Opaces de la imagen*/
	color:#444;/*Color letra*/
	margin: 5px; /*Separar cuadros de imagenes*/
}
/*Estilo imagen de producto*/
.img_producto{
	text-align: center;
	width: 277px;/*Tamaño de la imagen*/
	height: 277px;

}
/*Estilo informacion del producto*/
.info{
	text-align: right;
	font-family: arial;
	font-size: 15px;

}
/*pocision costo total*/
.costo_total{
  width: 530px;
  color: #0a0;
}
/*Estilo nombre del producto*/
.name_producto{
	padding: 10px;
	color: #fff;
	background: #ff8800;
	text-align: center;
	font-size: 16px;
	font-weight: bold;

}

/*estilo imagen del carrito*/

.imagen_carro{
  width: 60px;
  height: 60px;
  border-radius: 1000px;
}

.imagen_perfil{
  width: 10px;
  height: 10px;
  border-radius: 1000px;  
}

.pc{ /*Estilo del titulo*/
	font-size: 24px;
	padding: 0px;
	background: #FF9900;
	margin: 0;
  height: 10px;
}

.precio{
	color: #08868E;
}
.nombre{
  font-size: 15px;
  color: #48EA45;
  padding-right: 20px;

}

.slider{
  width: 40%;
  margin: auto;
  overflow: hidden;

}

.slider ul{
  
  display: flex;
  width: 400%;
  animation: cambio 30s infinite;
}

.slider li{
  list-style: none;
  width: 100%;
}

.slider img{
  width: 100%;
}



@keyframes cambio{
  0%{ margin-left: 0; }
  20%{ margin-left: 0; }
  25%{ margin-left: -100%; }
  45%{ margin-left: -100; }
  50%{ margin-left: -200%; }
  70%{ margin-left: -200; }
  75%{ margin-left: -300%; }
  100%{ margin-left: -300; }
}
}
*{
  margin: 0;
  padding: 0;
}

@font-face {
  font-family: 'Monoton';
  font-style: normal;
  font-weight: 100;
  src: local('Monoton'), local('Monoton-Regular'), url(http://themes.googleusercontent.com/static/fonts/monoton/v4/AKI-lyzyNHXByGHeOcds_w.woff) format('woff');
}

@font-face {
  font-family: 'Iceland';
  font-style: normal;
  font-weight: 100;
  src: local('Iceland'), local('Iceland-Regular'), url(http://themes.googleusercontent.com/static/fonts/iceland/v3/F6LYTZLHrG9BNYXRjU7RSw.woff) format('woff');
}

@font-face {
  font-family: 'Pacifico';
  font-style: normal;
  font-weight: 100;
  src: local('Pacifico Regular'), local('Pacifico-Regular'), url(http://themes.googleusercontent.com/static/fonts/pacifico/v5/yunJt0R8tCvMyj_V4xSjafesZW2xOQ-xsNqO47m55DA.woff) format('woff');
}

@font-face {
  font-family: 'PressStart';
  font-style: normal;
  font-weight: 100;
  src: local('Press Start 2P'), local('PressStart2P-Regular'), url(http://themes.googleusercontent.com/static/fonts/pressstart2p/v2/8Lg6LX8-ntOHUQnvQ0E7o3dD2UuwsmbX3BOp4SL_VwM.woff) format('woff');
}

@font-face {
  font-family: 'Audiowide';
  font-style: normal;
  font-weight: 100;
  src: local('Audiowide'), local('Audiowide-Regular'), url(http://themes.googleusercontent.com/static/fonts/audiowide/v2/8XtYtNKEyyZh481XVWfVOj8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
}

@font-face {
  font-family: 'Vampiro One';
  font-style: normal;
  font-weight: 100;
  src: local('Vampiro One'), local('VampiroOne-Regular'), url(http://themes.googleusercontent.com/static/fonts/vampiroone/v3/Ho2Xld8UbQyBA8XLxF1_NYbN6UDyHWBl620a-IRfuBk.woff) format('woff');
}
/*franja encima del menu*/
body{
  background-color: #FF9F13;
}

#container{
  width:100px;/*mover letras*/
  padding: 1px;
  height: 10px;
  margin: 1px;
  color: #FF9F13;
  background:#FF9F13;
}


/*neeeeoooon*/
p{
  text-align:center;
  font-siz2px
  margin:20px 0 20px 0; 
}

a{
  text-decoration:none; 
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
}

p:nth-child(1) a{
  color:#FF1177;
  font-family:Monoton;
}
p:nth-child(1) a:hover{
  -webkit-animation: neon1 1.5s ease-in-out infinite alternate;
  -moz-animation: neon1 1.5s ease-in-out infinite alternate;
  animation: neon1 1.5s ease-in-out infinite alternate; 
}

p:nth-child(2) a{
  font-size:1.5em;
  color:#228DFF;
  font-family:Iceland;
}
p:nth-child(2) a:hover{
  -webkit-animation: neon2 1.5s ease-in-out infinite alternate;
  -moz-animation: neon2 1.5s ease-in-out infinite alternate;
  animation: neon2 1.5s ease-in-out infinite alternate;
}

p:nth-child(3) a{
  color:#FFDD1B;
  font-family:Pacifico;
}
p:nth-child(3) a:hover{ 
  -webkit-animation: neon3 1.5s ease-in-out infinite alternate;
  -moz-animation: neon3 1.5s ease-in-out infinite alternate;
  animation: neon3 1.5s ease-in-out infinite alternate; 
}

p:nth-child(4) a{
  color:#B6FF00;
  font-family:PressStart;
  font-size:0.8em;
}
p:nth-child(4) a:hover{
  -webkit-animation: neon4 1.5s ease-in-out infinite alternate;
  -moz-animation: neon4 1.5s ease-in-out infinite alternate;
  animation: neon4 1.5s ease-in-out infinite alternate;
}

p:nth-child(5) a{
  color:#FF9900;
  font-family:Audiowide;
}
p:nth-child(5) a:hover{
  -webkit-animation: neon5 1.5s ease-in-out infinite alternate;
  -moz-animation: neon5 1.5s ease-in-out infinite alternate;
  animation: neon5 1.5s ease-in-out infinite alternate; 
}

p:nth-child(6) a{
  color:#BA01FF;
  font-family:Vampiro One;
}
p:nth-child(6) a:hover{
  -webkit-animation: neon6 1.5s ease-in-out infinite alternate;
  -moz-animation: neon6 1.5s ease-in-out infinite alternate;
  animation: neon6 1.5s ease-in-out infinite alternate;
}

p a:hover{
color:#ffffff;  
}



/*glow for webkit*/
@-webkit-keyframes neon1 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #FF1177,
               0 0 70px  #FF1177,
               0 0 80px  #FF1177,
               0 0 100px #FF1177,
               0 0 150px #FF1177;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #FF1177,
               0 0 35px #FF1177,
               0 0 40px #FF1177,
               0 0 50px #FF1177,
               0 0 75px #FF1177;
  }
}

@-webkit-keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #228DFF,
               0 0 70px  #228DFF,
               0 0 80px  #228DFF,
               0 0 100px #228DFF,
               0 0 150px #228DFF;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #228DFF,
               0 0 35px #228DFF,
               0 0 40px #228DFF,
               0 0 50px #228DFF,
               0 0 75px #228DFF;
  }
}

@-webkit-keyframes neon3 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #FFDD1B,
               0 0 70px  #FFDD1B,
               0 0 80px  #FFDD1B,
               0 0 100px #FFDD1B,
               0 0 150px #FFDD1B;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #FFDD1B,
               0 0 35px #FFDD1B,
               0 0 40px #FFDD1B,
               0 0 50px #FFDD1B,
               0 0 75px #FFDD1B;
  }
}

@-webkit-keyframes neon4 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #B6FF00,
               0 0 70px  #B6FF00,
               0 0 80px  #B6FF00,
               0 0 100px #B6FF00,
               0 0 150px #B6FF00;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #B6FF00,
               0 0 35px #B6FF00,
               0 0 40px #B6FF00,
               0 0 50px #B6FF00,
               0 0 75px #B6FF00;
  }
}

@-webkit-keyframes neon5 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #FF9900,
               0 0 70px  #FF9900,
               0 0 80px  #FF9900,
               0 0 100px #FF9900,
               0 0 150px #FF9900;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #FF9900,
               0 0 35px #FF9900,
               0 0 40px #FF9900,
               0 0 50px #FF9900,
               0 0 75px #FF9900;
  }
}

@-webkit-keyframes neon6 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px #fff,
               0 0 30px #fff,
               0 0 40px #ff00de,
               0 0 70px #ff00de,
               0 0 80px #ff00de,
               0 0 100px #ff00de,
               0 0 150px #ff00de;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #ff00de,
               0 0 35px #ff00de,
               0 0 40px #ff00de,
               0 0 50px #ff00de,
               0 0 75px #ff00de;
  }
}

/*glow for mozilla*/
@-moz-keyframes neon1 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #FF1177,
               0 0 70px  #FF1177,
               0 0 80px  #FF1177,
               0 0 100px #FF1177,
               0 0 150px #FF1177;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #FF1177,
               0 0 35px #FF1177,
               0 0 40px #FF1177,
               0 0 50px #FF1177,
               0 0 75px #FF1177;
  }
}

@-moz-keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #228DFF,
               0 0 70px  #228DFF,
               0 0 80px  #228DFF,
               0 0 100px #228DFF,
               0 0 150px #228DFF;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #228DFF,
               0 0 35px #228DFF,
               0 0 40px #228DFF,
               0 0 50px #228DFF,
               0 0 75px #228DFF;
  }
}

@-moz-keyframes neon3 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #FFDD1B,
               0 0 70px  #FFDD1B,
               0 0 80px  #FFDD1B,
               0 0 100px #FFDD1B,
               0 0 150px #FFDD1B;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #FFDD1B,
               0 0 35px #FFDD1B,
               0 0 40px #FFDD1B,
               0 0 50px #FFDD1B,
               0 0 75px #FFDD1B;
  }
}

@-moz-keyframes neon4 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #B6FF00,
               0 0 70px  #B6FF00,
               0 0 80px  #B6FF00,
               0 0 100px #B6FF00,
               0 0 150px #B6FF00;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #B6FF00,
               0 0 35px #B6FF00,
               0 0 40px #B6FF00,
               0 0 50px #B6FF00,
               0 0 75px #B6FF00;
  }
}

@-moz-keyframes neon5 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #FF9900,
               0 0 70px  #FF9900,
               0 0 80px  #FF9900,
               0 0 100px #FF9900,
               0 0 150px #FF9900;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #FF9900,
               0 0 35px #FF9900,
               0 0 40px #FF9900,
               0 0 50px #FF9900,
               0 0 75px #FF9900;
  }
}

@-moz-keyframes neon6 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px #fff,
               0 0 30px #fff,
               0 0 40px #ff00de,
               0 0 70px #ff00de,
               0 0 80px #ff00de,
               0 0 100px #ff00de,
               0 0 150px #ff00de;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #ff00de,
               0 0 35px #ff00de,
               0 0 40px #ff00de,
               0 0 50px #ff00de,
               0 0 75px #ff00de;
  }
}

/*glow*/
@keyframes neon1 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #FF1177,
               0 0 70px  #FF1177,
               0 0 80px  #FF1177,
               0 0 100px #FF1177,
               0 0 150px #FF1177;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #FF1177,
               0 0 35px #FF1177,
               0 0 40px #FF1177,
               0 0 50px #FF1177,
               0 0 75px #FF1177;
  }
}

@keyframes neon2 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #228DFF,
               0 0 70px  #228DFF,
               0 0 80px  #228DFF,
               0 0 100px #228DFF,
               0 0 150px #228DFF;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #228DFF,
               0 0 35px #228DFF,
               0 0 40px #228DFF,
               0 0 50px #228DFF,
               0 0 75px #228DFF;
  }
}

@keyframes neon3 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #FFDD1B,
               0 0 70px  #FFDD1B,
               0 0 80px  #FFDD1B,
               0 0 100px #FFDD1B,
               0 0 150px #FFDD1B;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #FFDD1B,
               0 0 35px #FFDD1B,
               0 0 40px #FFDD1B,
               0 0 50px #FFDD1B,
               0 0 75px #FFDD1B;
  }
}

@keyframes neon4 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #B6FF00,
               0 0 70px  #B6FF00,
               0 0 80px  #B6FF00,
               0 0 100px #B6FF00,
               0 0 150px #B6FF00;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #B6FF00,
               0 0 35px #B6FF00,
               0 0 40px #B6FF00,
               0 0 50px #B6FF00,
               0 0 75px #B6FF00;
  }
}

@keyframes neon5 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #FF9900,
               0 0 70px  #FF9900,
               0 0 80px  #FF9900,
               0 0 100px #FF9900,
               0 0 150px #FF9900;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #FF9900,
               0 0 35px #FF9900,
               0 0 40px #FF9900,
               0 0 50px #FF9900,
               0 0 75px #FF9900;
  }
}

@keyframes neon6 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px #fff,
               0 0 30px #fff,
               0 0 40px #ff00de,
               0 0 70px #ff00de,
               0 0 80px #ff00de,
               0 0 100px #ff00de,
               0 0 150px #ff00de;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #ff00de,
               0 0 35px #ff00de,
               0 0 40px #ff00de,
               0 0 50px #ff00de,
               0 0 75px #ff00de;
  }
}


/*REEEEEEEEEEESPONSIVE*/
@media (max-width: 100px) {
  
  #container{
    width: 10%;
    color: #FF9F13;
  background:#FF9F13;
  }
  
  p{
    font-size:1.2em;
  }

}
.subir{
  margin-bottom: 10px;
  position: relative;
}

.registro{
  color: #000;
  
}
/*Mover nombre y boton de salir*/
.pull-right {
  margin: 10px;

}


.imagen_perfil{
  height: 200px;
  width: 200px;
}


.imagen_perfil:hover {   

  transform: scale(1.2);
  transition: : all 30s linear;
}

.black-background {background-color:#9F88FF;}
.white {color:#ffffff;}

    </style>

	<title>Emcoding</title>
</head>

<body>
<div align="center">
   
      <div id="">
      	<div class="pc">
      	<a></a><a></a>
 		<p><a href="?p=principal">
   			 Emcoding
  		</a></p>
  	    </div>
     </div>
   
</div>

   <div class="menu"> <!--Menu general-->

   <table border="0" width="500">
   	<div id="container">
    <td><a></a><a></a><p><a href="?p=principal">Principal</a></p></td>
    <td><a></a><a></a><p><a href="?p=productos">Productos</a></p></td>

    <td><a></a><a></a><p><a href="?p=carrito">Carrito</a></p></td>
    <td><a></a><a></a><p><a href="?p=admin">Emprendedor</a></p></td>


    <?php
      if(isset($_SESSION['id_cliente'])){
    ?>
    
    <a class="pull-right" href="?p=salir">Salir</a>
    <a class="pull-right " href="?p=perfil"><?=nombre_cliente($_SESSION['id_cliente'])?></a> 

    <?php
      }else if(isset($_SESSION['id'])){
    ?>
    <a class="pull-right subir" href="?p=salir">Salir</a>
    <a class="pull-right subir" href="?p=admin">  Administrador</a>
    <?php
  }else if(isset($_SESSION['id_domiciliario'])){
    ?>
    <a class="pull-right subir" href="?p=salir">Salir</a>
    <a class="pull-right " href="?p=perfil_domiciliario"><?=nombre_domiciliario($_SESSION['id_domiciliario'])?></a>
    <?php
      }
    ?>
<!--registro , incio de sesion-->
    <?php
      if(!isset($_SESSION['id_cliente']) && !isset($_SESSION['id']) && !isset($_SESSION['id_domiciliario'])){
    ?>

    <a class="pull-right" href="?p=login">Iniciar sesion</a> 
    <a class="pull-right " href="?p=registro">Registrarse</a>
    
  
    <?php
      }
    ?>
  </div><!--Error-->
</table>



     </table>
     </div>
<!--Mostrar nombre del cliente logueado-->


  
   <div class="cuerpo">
    
		<?php
			if(file_exists("modulos/".$p.".php")){ //direccona pagina
				include "modulos/".$p.".php";
			}else{
				echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar</a></i>";
			}
		?>


	</div>	

   <div class="footer_a">

   	Copyright Estiven, A &copy; <?=date("M, Y")?>
   	
   </div>


</body>
</html>


