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
	
	id:
		<tr><?php echo(@$persona['id']); ?></tr><br>
		nom:
		<tr><?php echo(@$persona['nom']); ?></tr><br>
		cognom:
		<tr><?php echo(@$persona['cognom']); ?></tr><br>
		edat:
		<tr><?php echo(@$persona['edat']); ?></tr>
	</table>
</body>
</html>