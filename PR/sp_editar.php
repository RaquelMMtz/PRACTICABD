<?php
$id = $_POST ['id'];
$nom = $_POST ['nom'];
$ape = $_POST ['ape'];
$edad = $_POST ['edad'];
$cel = $_POST ['cel'];

	$cnx = mysqli_connect ("localhost","root","password","dbpr");
	$sql = "UPDATE talumno set nom = '$nom',ape = '$ape',edad = '$edad',cel = '$cel' where id like  $id";
	$rta = mysql_query ($cnx, $sql);
		if (!$rta) {
			echo "No se Actualizo!";
		}
		else {
            header("Location: pr.php");
		}
?>