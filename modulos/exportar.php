<?php


	header('Content-type:application.xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');

	require_once('config.php');
	$conn = new ();
	$link = $conn->conectarse();

	$query= "SELECT *FROM clientes";
	$result=mysqli_query($link, $query);
?>
<table>

	<tr>
		<th><i class="fa fa-image"></i> </th>
		<th>Nombre</th>
		<th>Username</th>
		<th>T.documento</th>
		<th>N.documento</th>
		<th>Dirección 1</th>
		<th>Dirección 2</th>
		<th>Barrio</th>
		<th>Telefono</th>
		<th>Celular</th>
		<th>Correo</th>
	</tr>
<?php



while($row=mysqli_fetch_assoc($result)){
	?>



		<tr>
	  		<td><?php echo $row['name']; ?></td>
	  
	   </tr>

	<?php
	
}
?>
</table>
