<!DOCTYPE HTML>
<html lang= "en">
<head>
	<meta charset="UTF=8">
	<meta http-equiv="X-UA-Compatible" content= "IE=edge">
	<meta name= "viewport" content= "width=device-width, initial-scale=1.0">
    <title> Document </title>
</head>
<body>
<?php
$id = $_GET ['id'];
$nom = $_GET ['nom'];
$ape = $_GET ['ape'];
$edad = $_GET ['edad'];
$cel = $_GET ['cel'];
?>
	<div>
		<form action="sp_editar.php" method ="post">
			<table border="1">
				<tr>
					<td> Ingresar Datos: </td>
					<td><input type="text" name="id" id="" style = "visibility: hidden" value="<?=$id?>"></td>
				</tr>
				<tr>
					<td>NOMBRE:</td>
					<td><input type= "text" name="nom" id="" value="<?=$nom?>"></td>
				</tr>
				<tr>
					<td>APELLIDO:</td>
					<td><input type="text" name="ape" id="" value="<?=$ape?>"></td>
				</tr>
				<tr>
					<td>EDAD:</td>
					<td><input type="text" name="edad" id="" value="<?=$edad?>"></td>
				</tr>
				<tr>
					<td>CEL:</td>
					<td><input type="text" name="cel" id="" value="<?=$cel?>"></td>
				</tr>
				<tr>
					<td><input type ="submit" value= "Actualizar"></td>
					<td><a href="pr.php">Cancelar</a></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>