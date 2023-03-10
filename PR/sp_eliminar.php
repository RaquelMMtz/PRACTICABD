<?php
$id = $_GET ['id'];

	$cnx = mysqli_connect ("localhost","root","password","dbpr");
	$sql = "DELETE FROM talumno where id like  $id";
	$rta = mysql_query ($cnx, $sql);
		if (!$rta) {
			echo "No se Elimino!";
		}
		else {
            header("Location: pr.php");
		}
?>