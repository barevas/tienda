<?php

$id = clear($id);

//arreglo para traer info de la compra

$s = $mysqli->query("SELECT *FROM compra WHERE id ='$id'");
$r = mysqli_fetch_array($s);

//areglo para traer info de la admins
$sa = $mysqli->query("SELECT *FROM admins WHERE id ='2'");
$ra = mysqli_fetch_array($sa);


//arreglo para traer info del cliente
$sc = $mysqli->query("SELECT * FROM clientes WHERE id = '".$r['id_cliente']."'");
$rc = mysqli_fetch_array($sc);
//traigo la informacion a las variables
$nombre = $rc['name'];
$venta = $r['id'];
$fecha = $r['fecha'];
$direccion1 = $rc['direccion1'];
$celular = $rc['celular'];
$telefono = $rc['telefono'];
$latitude = $rc['latitude'];
$longitude = $rc['longitude'];

$latitude_admin = $ra['latitude_admin'];
$longitude_admin = $ra['longitude_admin'];

?><!--Mostrar informacion traida con los arreglos-->
<!--Importando scripts de maps-->

<body>


<h3><span style="color: orange"><b>Venta #<?=$venta?></b></span></h3>

<table class="table table-striped">
	<tr>
		<td><h4>Fecha</h4></td>
		<td><?=$fecha?></td>
	</tr>
	<tr>
		<td><h4>Cliente</h4></td>
		<td><?=$nombre?></td>
	</tr>
	<tr>
		<td><h4>Valor</h4></td>
		<td><?=number_format($r['monto'])?> <?=$divisa?></td>
	</tr>
	<tr>
		<td><h4>Direccion</h4></td>
		<td><?=$direccion1?></td>
	</tr>
	<tr>
		<td><h4>Celular</h4></td>
		<td><?=$celular?></td>
	</tr>
	<tr>
		<td><h4>Telefono</h4></td>
		<td><?=$telefono?></td>
	</tr>
	<tr>
		<td><h4>Costo domicilio</h4></td>
		<td>8,000 COP</td>
	</tr>
	<tr>
		<td><h4>Distancia de recorrido</h4></td>
		<td>2,451 metros</td>
	</tr>
	<!--
	<tr>
		<td><h4>Latitud (hidden)</h4></td>
		<td><?=$latitude?></td>
	</tr>
	<tr>
		<td><h4>Longitud (hidden)</h4></td>
		<td><?=$longitude?></td>
	</tr>
	<tr>
		<td><h4>Latitud Admin (hidden)</h4></td>
		<td><?=$latitude_admin?></td>
	</tr>
	<tr>
		<td><h4>Longitud Admin(hidden)</h4></td>
		<td><?=$longitude_admin?></td>
	</tr>
-->

	<tr>
		<h4>Mapa</h4>
		
	</tr>

<tr>
<div class="row">
	<div class="col-md-12">
		<div id="mapa" style="width: 100%; height: 300px;">
			
		</div>
	</div>
</div>
</tr>

   	<tr>
		<td><h4>Estado</h4></td>
<!--DEfinimos una funcion en js para validar el estado de la venta (estado)-->
		<td><?=estado($r['estado'])?></td>
	</tr>
	<?php
$id = clear($id);
//Traer los datos de la tabla compra
$s = $mysqli->query("SELECT * FROM compra WHERE id = '$id'");
//almacenar los datos en el arreglo
$r = mysqli_fetch_array($s);
//Modificar datos de la tabla estado de la compra
if (isset($modificar)){
	$estado = clear($estado);
	$mysqli->query("UPDATE compra SET estado = '$estado' WHERE id = '$id' ");
	redir("?p=manejar_tracking");
}
?>
<tr>
<td>
<h4>Estado de la venta </h4>
</td>
<td>
<form method="post" action>
	<div class="form group">
	<select class="form-control" name="estado">
		<option <?php if($r['estado'] == 0){echo "selected";}?>value="0">Registrado</option>
		<option <?php if($r['estado'] == 1){echo "selected";}?>value="1">Alistando</option>
		<option <?php if($r['estado'] == 2){echo "selected";}?>value="2">En camino</option>
		<option <?php if($r['estado'] == 3){

			

			echo "selected";}?>value="3">Entregado</option>
	</select>
	</div>
	<div class="form group">
		<input class ="btn-warning" type="submit" value= "Modificar "name="modificar">

	</div>
</form>
</td>
<tr>
</table>
<table class="table table-hover">
	
	<th>ID Producto</th>
	<th>Nombre</th>
	<th>Marca</th>
	<th>Precio</th>
	<th>Medida	</th>
	<th>Cantidad	</th>
	<th>Monto Total	</th>

	<?php

	//arreglo para traer los datos de la tabal productos_compra
	$sp = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '$id'");
		while($rp=mysqli_fetch_array($sp)){
//arreglo para traer datos de los productpr
			$spro = $mysqli->query("SELECT * FROM productos WHERE id = '".$rp['id_producto']."'");
			$rpro = mysqli_fetch_array($spro);
	//funciones para llenar las variables con la info de la bd
		$id = $rpro['id'];
		$nombre_producto = $rpro['name'];
		$marca = $rpro['marca'];
		$precio = $rpro['price'];
		$cantidad = $rpro['cantidad'];
		$montototal = $rp['monto']* $rp['cantidad'];
		$monto1 = $r['monto'];
		?>
		<tr>
		<td><?=$id?></td>
		<td><?=$nombre_producto?></td>
		<td><?=$marca?></td>
		<td><?=$precio?></td>
		<td><?=$cantidad?></td>
		<td><?=$rp['cantidad']?></td>
		
		<td><?=$montototal?></td>
		</tr>

		

		<?php
	}
	?>
		<tr>
			<td><h3>Total a pagar:</h3><td></td><td></td><td></td><td></td><td></td><td><h3><?=$monto1?></h3></td>
		</tr>

</table>
<!--
<div class="row">
	<div class="col-md-6">

		<div class="form-group"></div>
		<label for="latitud1">Latitud</label>
		<input type="text" id="latitud1" class="form-control">

	</div>
	<div class="col-md-6">

		<div class="form-group"></div>
		<label for="longitud1">Longitud</label>
		<input type="text" id="longitud1" class="form-control">

	</div>

</div>

<div class="row">
	<div class="col-md-12">
		<div id="mapa" style="width: 100%; height: 500px;">
			
		</div>
	</div>
</div>
-->
<!--Definiendo la funcion iniciar mapa -->
<script>
	function iniciarMapa(){
		var latitud1 = <?=$latitude?>;
		var longitud1 = <?=$longitude?>;

		var latitud2 = <?=$latitude_admin?>;
		var longitud2 = <?=$longitude_admin?>;

		coordenadas = {
			lng: longitud1,
			lat: latitud1
		}

		coordenadas2 = {
			lng: longitud2,
			lat: latitud2
		}

		generarMapa(coordenadas);
	}

	function generarMapa(coordenadas){
		var mapa = new google.maps.Map(document.getElementById('mapa'),
		{
			zoom: 15,
			center: new google.maps.LatLng(coordenadas.lat, coordenadas.lng),
		});
//marcador de destino
		marcador = new google.maps.Marker({
			map: mapa,
			draggable: false, //atributo de arrastre
			position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng), //ubicacion del marcador
			title:"Entregar domicilio" 
		});
//marcador de origen
const image ="https://cdn-icons-png.flaticon.com/32/1041/1041883.png";//icono tienda
		marcador2 = new google.maps.Marker({
			map: mapa,
			draggable: false, //atributo de arrastre
			position: new google.maps.LatLng(coordenadas2.lat, coordenadas2.lng),
			animation: google.maps.Animation.DROP,
			title:"Recoger domicilio",
			icon: image,		
		});

const image1 ="https://cdn-icons-png.flaticon.com/64/3161/3161998.png";//icono tienda
		marcador3 = new google.maps.Marker({
			map: mapa,
			draggable: false, //atributo de arrastre
			position: new google.maps.LatLng(4.577291716454708, -74.2198274799588),
			//animation: google.maps.Animation.DROP,
			title:"Tu ubicación",
			icon: image1,		
		});

		//Funcionalidada para el registro del cliente

		marcador.addListener('dragend',function(event){//cuando se arrastra y suelta el marcador , se ejecuta un evento 

		//el evento va la latitud y longitud del marcador a las variable latitud y longitud
			document.getElementById("latitud1").value = this.getPosition().lat();
			document.getElementById("longitud1").value = this.getPosition().lng();

		});
		//ruta
////////////////////**/
		var objConfigDR = {
			map: mapa,
			suppressMarkers: true
		}

		var objConfigDS = {
			origin: coordenadas2,
			destination: coordenadas,
			travelMode: google.maps.TravelMode.DRIVING

		}

		var ds = new google.maps.DirectionsService( );// obtiene coordenadas
		var dr = new google.maps.DirectionsRenderer(objConfigDR); // muestra la ruta

		ds.route( objConfigDS, fnRutear );

		function fnRutear( resultados, status ){  //resultados almacena toda la trza de la ruta
			//muestra la ruta entre A y B
			if( status == 'OK' ){
				dr.setDirections( resultados ); // si todo sale bien , enviar los datos de resultados al renderes
			}else {
				alert('Error Ruta'+status);
			}
		}


	}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN8H80OXCRsrEQg6bjd50f7yZvSY7nxgQ&callback=iniciarMapa"></script>

<a href="?p=manejar_tracking">
	     <button class="btn btn-info"><i class="fas fa-reply"></i> Volver</button>
	 </a>