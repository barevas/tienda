<?php
check_user("clientes");


$id_cliente = clear($_SESSION['id_cliente']);

$q = $mysqli->query("SELECT * FROM clientes WHERE id = '$id_cliente'");
$rq = mysqli_fetch_array($q);

if(isset($enviar)){
	$idcli = clear($idcli);
	$name = clear($name);
	$numero_documento = clear($numero_documento);
	$direccion1 = clear($direccion1);
	$direccion2 = clear($direccion2);
	$barrio = clear($barrio);	
	$telefono = clear($telefono);
	$celular = clear($celular);

	



	$mysqli->query("UPDATE clientes SET name = '$name',numero_documento = '$numero_documento',direccion1 = '$direccion1',direccion2 = '$direccion2',barrio = '$barrio',telefono = '$telefono',celular = '$celular' WHERE id = '$idcli'");
	redir("?p=perfil");

}

?>
<table>
<form method="post" action="" enctype="multipart/form-data">
<tr>
	<td>Nombre  </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="name" value="<?=$rq['name']?>" placeholder="Nombre"/>
	</div>
	</td>
</tr>

<tr>
	<td>Numero Documento </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="numero_documento" value="<?=$rq['numero_documento']?>" placeholder="Numero de documento"/>
	</div>
	</td>
</tr>

<tr>
	<td>Direccion 1 </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="direccion1" value="<?=$rq['direccion1']?>" placeholder="Primera Direccion"/>
	</div>
	</td>
</tr>

<tr>
	<td>Direccion 2 </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="direccion2" value="<?=$rq['direccion2']?>" placeholder="Segunda Direccion"/>
	</div>
	</td>
</tr>

<tr>
	<td>Barrio </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="barrio" value="<?=$rq['barrio']?>" placeholder="Barrio"/>
	</div>
	</td>
</tr>

<tr>
	<td>Telefono  </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="telefono" value="<?=$rq['telefono']?>" placeholder="Telefono"/>
	</div>
	</td>
</tr>

<tr>
	<td>Celular  </td>
	<td>
	<div class="form-group">
		<input type="text" class="form-control" name="celular" value="<?=$rq['celular']?>" placeholder="Celular"/>
	</div>
	</td>
</tr>




</table>
	


	

	

		<!--
	<div class="form-group">


		<select name="categoria" required class="form-control">
			<option value="">Seleccione una categoria</option>
			<?php
				$q = $mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");

				while($r=mysqli_fetch_array($q)){
					?>

						<option <?php if($rq['id_categoria'] == $r['id']) { echo "selected"; } ?>  value="<?=$r['id']?>"><?=$r['categoria']?></option>
					<?php
				}
			?>
		</select>

	</div>
-->




<br><br> 
	<div class="form-group">
		<button type="submit" class="btn btn-success" name="enviar"><i class="glyphicon glyphicon-folder-open">  Modificar</i></button>
	</div>


<input type="hidden" name="idcli" value="<?=$id_cliente?>"/>

</form>