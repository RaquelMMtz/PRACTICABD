<!DOCTPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<time>Document</time>
</head>
<body>
	<div>
		<form action="buscar.php" method="post">
			<input type="text" name="Buscar" id="">
			<input type="submit" value="Buscar">
			<a href="nuevo.php">Nuevo</a>
		</form>
	</div>

<div>
	<table>
		<tr>
	<table border="1">
   		<tr>
		   	<td>ID</td>
		   	<td>NOMBRE</td>
		   	<td>APELLIDO</td>
		   	<td>EDAD</td>
		   	<td>CEL</td>
		   	<td>STATUS</td>
   		</tr>
		<?php
		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "pr";

			$cnx = mysqli_connect ("localhost","root","password","datebase");
			$sql = "SELECT id,nom, ape,edad,cel FROM talumno order by id desc";
			$rta = mysql_query ($cnx, $sql);
			while ($mostrar = mysqli_fetch_row($rta)) {
			?>
			<tr>
				<td><?php echo $mostrar ['0'] ?></td>
				<td><?php echo $mostrar ['1'] ?></td>
			    <td><?php echo $mostrar ['2'] ?></td>
			    <td><?php echo $mostrar ['3'] ?></td>
			    <td><?php echo $mostrar ['4'] ?></td>
    		<td>
		    	<a href= "editar.php?
                  id=<?php echo $mostrar ['0'] ?> &
                  nom=<?php echo $mostrar ['1'] ?> &
                  ape=<?php echo $mostrar ['2'] ?> &
                  edad=<?php echo $mostrar ['3'] ?> &
                  cel=<?php echo $mostrar ['4'] ?> 
		    	">Editar</a>
		    	<a href= "sp_eliminar.php? id=<?php echo $mostrar ['0'] ?>">Eliminar </a>
    		</td>

		</tr>
		<?php
		}
		?>
	  </table>

	</div>

</body>
</html>