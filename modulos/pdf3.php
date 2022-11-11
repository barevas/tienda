<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');

	require_once('conexion1.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM productos_compra ";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Id</th>
		<th>Id compra</th>
		<th>Id producto</th>
		<th>Producto</th>
		<th>Cantidad</th>
		<th>V.unitario</th>
		
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['id_compra']; ?></td>
					<td><?php echo $row['id_producto']; ?></td>
					<td><?php echo $row['cantidad']; ?></td>
					<td><?php echo $row['monto']; ?></td>
					
				</tr>	

			<?php
		}

	?>
</table>