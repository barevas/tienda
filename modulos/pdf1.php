<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');

	require_once('conexion1.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM compra WHERE estado = 3 ORDER BY  fecha desc ";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Id cliente</th>
		<th>Fecha</th>
		<th>Monto</th>
		<th>Estado</th>
		
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['id_cliente']; ?></td>
					<td><?php echo $row['fecha']; ?></td>
					<td><?php echo $row['monto']; ?></td>
					<td><?php echo $row['estado']; ?></td>
					
				</tr>	

			<?php
		}

	?>
</table>