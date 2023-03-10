<?php
$nom = $_POST ['nom'];
$ape = $_POST ['ape'];
$edad = $_POST ['edad'];
$cel = $_POST ['cel'];

	$cnx = mysqli_connect ("localhost","root","password","dbpr");
	$sql = "INSERT INTO talumno (nom,ape,edad,cel) VALUES ('$nom','$ape', 'edad','$cel')";
	$rta = mysql_query ($cnx, $sql);
		if (!$rta) {
			echo "No se interto!";
		}
		else {
            header("Location: pr.php");
		}
?>

