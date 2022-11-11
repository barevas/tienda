<?php


//si le damos clic a enviar se limpian los campos
if(isset($registro) && ($password)==($password1) ){// && ($username)==true && ($password)==true && ($name)==true && ($tipo_documento)==true && ($numero_documento)==true && ($direccion1)==true && ($barrio)==true && ($telefono)==true && ($celular)==true && ($correo)==true){
	$username = clear($username);
	$password = clear($password);
	$name = clear($name);
	$tipo_documento = clear($tipo_documento);
	$numero_documento = clear($numero_documento);
	$direccion1 = clear($direccion1);
	$direccion2 = clear($direccion2);
	$barrio = clear($barrio);
	$telefono = clear($telefono);
	$celular = clear($celular);
	$correo = clear($correo);

	
//insertar imagen (guardar)
	$imagen = "";

	if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
		$imagen = $name.rand(0,1000).".png";
		move_uploaded_file($_FILES['imagen']['tmp_name'], "clientes/".$imagen);
	}

	$latitude = clear($latitude);
	$longitude = clear($longitude);
//insertar datos en la base 
	$mysqli->query("INSERT INTO clientes (username,password,name,tipo_documento,numero_documento,direccion1,direccion2,barrio,telefono,celular,correo,imagen,latitude,longitude) VALUES ('$username','$password','$name','$tipo_documento','$numero_documento','$direccion1','$direccion2','$barrio','$telefono','$celular','$correo','$imagen','$latitude','$longitude')");
	alert("Datos agregados correctamente");
	redir("?p=login");
}else if(isset($registro) && ($password)!=($password1)){
	alert("Las contraseñas no coinciden");
	redir("?p=registro");

}



?>
<head></head>
<!--formulario datos del producto-->
<body onload="getLocation();">
<form class="myform" method="post" action="" enctype="multipart/form-data">

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
	

<!--datos de geolocalizacion-->

<div class="form-group">
	<div class="col-md-6">
		<input type="text" class="form-control" name="latitude" id="latitude">
	</div>
</div>
	
<div class="form-group">
	<div class="col-md-6">
		<input type="text" class="form-control" name="longitude" id="longitude">
	</div>
</div>
<div align="center"><h5>Por favor ingrese su ubicación</h5></div>



<!--Mapa-->
<!--
<div class="row">
	<div class="col-md-6">

		<div class="form-group"></div>
		<label for="latitud2">Latitud</label>
		<input type="text" id="latitud2" class="form-control">

	</div>
	<div class="col-md-6">

		<div class="form-group"></div>
		<label for="longitud2">Longitud</label>
		<input type="text" id="longitud2" class="form-control">

	</div>

</div>
-->
	<div class="row">
	<div class="col-md-12">
		<div id="mapa" style="width: 100%; height: 500px;">
			
		</div>
	</div>
	</div>
<br>

	<div class="form-group" align="center">
		<button type="submit" class="btn btn-success" name="registro"><i class="fa fa-check"></i> Registrarse</button>

	</div>	

</form>

<script type="text/javascript">
	function getLocation(){ //verifincando si el navegador admite geolocalizacion
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition,showError);
		}
	}//PENDIENTE REVISAR VARIABLES DE MAPA PREDETERMINADO
	function showPosition(position){ //enviando latitude y longitude al formulario
		document.querySelector('.myform input[name = "latitude2"]').value = position.coords.latitude;
		document.querySelector('.myform input[name = "longitude2"]').value = position.coords.longitude;
	}
	function showError(error){
		switch(error.code){
			case error.PERMISSION_DENIED:
			alert("Por favor dar permisos de Ubicación");
			location.reload();
			break;

		}
	}
</script>

<script>
	function iniciarMapa(position){
		//pendiente modificar variables por ubicacion en tiempo real
		var latitude = 4.57597276535407;
		var longitude = -74.20964931589242;

		coordenadas = {
			lng: longitude,
			lat: latitude
		}

		generarMapa(coordenadas);
	}

	function generarMapa(coordenadas){
		var mapa = new google.maps.Map(document.getElementById('mapa'),
		{
			zoom: 16,
			center: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
		});

		marcador = new google.maps.Marker({
			map: mapa,
			draggable: true, //atributo de arrastre
			position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng) //ubicacion del marcador
		});

		//Funcionalidada para el registro del cliente

		marcador.addListener('dragend',function(event){//cuando se arrastra y suelta el marcador , se ejecuta un evento 
		//el evento va la latitud y longitud del marcador a las variable latitud y longitud
			document.getElementById("latitude").value = this.getPosition().lat();
			document.getElementById("longitude").value = this.getPosition().lng();

		})
	}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN8H80OXCRsrEQg6bjd50f7yZvSY7nxgQ&callback=iniciarMapa"></script>
</body>