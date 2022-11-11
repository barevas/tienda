<?php
check_admin();

if(isset($enviar)){
	$categoria = clear($categoria);
//busqcar en la tabla categorias , si ya existe un categoria con ese nombre
	$s = $mysqli->query("SELECT * FROM categorias WHERE categoria = '$categoria'");
//si existo no agregar 
	if(mysqli_num_rows($s)>0){
		alert("Ya esta categoria esta agregada a la base de datos");
		redir("");
	}else{
		$mysqli->query("INSERT INTO categorias (categoria) VALUES ('$categoria')");
		alert("Categoria Agregada");
		redir("");
	}

}
//si existe la variable eliminar, se eliminar la informacion del id correspondiente
if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM categorias WHERE id = '$eliminar'");
	alert("Categoria eliminada");
	redir("?p=agregar_categoria");  
}

?>

<h1>Agregar Categoria</h1>

<form method="post" action="">
	<div class="form-group">
		<input type="text" class="form-control" name="categoria" placeholder="Categoria"/>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="enviar" value="Agregar categoria"/>
	</div>
</form><br>

<br>

<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Categoria</th>
		<th>Acciones</th>
	</tr>

	<?php
	//seleccionar todas las categorias en orden ascendente
	$q = $mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");
	while($r=mysqli_fetch_array($q)){
		?>
			<tr>
				<td><?=$r['id']?></td>
				<td><?=$r['categoria']?>
				<td>
					<button class="btn btn-success">
					<a href="?p=agregar_categoria&eliminar=<?=$r['id']?>"><i class="glyphicon glyphicon-trash"></i></a>
					</button>
				</td>
			</tr>
		<?php
	}
	?>
</table>