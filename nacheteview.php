Jaime S D
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- <form>
		<input type="text" name="id" value="<?=$persona[0]['id'];?>">
	</form> -->
	<table>
		<thead>
			<th>id</th>
			<th>nom</th>
			<th>cognom</th>
			<th>edat</th>
		</thead>

		<?php  
		if(isset($persona)){
			/*echo('
				<td><a class="" href="/CodeIgniter-3.1.3/nachete/insertar?id='.@$id.'">Insertar</a></td>
				<td><a class="" href="/CodeIgniter-3.1.3/nachete/actualizar?id='.@$id.'">Actualizar</a></td>
				');*/
			foreach ($persona as $p => $valores) {
				echo('
					<form action="/CodeIgniter-3" >
						<input type="text" value='.$valores["id"].'></input>
						<input type="text" value='.$valores["nom"].'></input>
						<input type="text" value='.$valores["cognom"].'></input>
						<input type="text" value='.$valores["edat"].'></input>
						<input type="submit" class="" href="/CodeIgniter-3.1.3/nachete/actualizar?id='.$valores["id"].'">Editar</a>
						<input type="submit" class="" href="/CodeIgniter-3.1.3/nachete/insertar?id='.$valores["id"].'&action=insertar">Insertar</a>						
					<br>

					');
			}
		}


		?>
	</table>
</body>
</html>