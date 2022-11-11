<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');

	require_once('conexion1.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM clientes";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Username</th>
		<th>Nombre</th>
		<th>T.Documento</th>
		<th>N.Documento</th>
		<th>Direccion 1</th>
		<th>Direccion 2</th>
		<th>Barrio</th>
		<th>Telefono</th>
		<th>Celular</th>
		<th>Correo</th>	
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['tipo_documento']; ?></td>
					<td><?php echo $row['numero_documento']; ?></td>
					<td><?php echo $row['direccion1']; ?></td>
					<td><?php echo $row['direccion2']; ?></td>
					<td><?php echo $row['barrio']; ?></td>
					<td><?php echo $row['telefono']; ?></td>
					<td><?php echo $row['celular']; ?></td>
					<td><?php echo $row['correo']; ?></td>
					
				</tr>	

			<?php
		}

	?>
</table>