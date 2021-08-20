<?php
require_once 'conexionV.php';

$id = $_GET['like'];


$sql ="UPDATE proyecto SET votos = votos + 1 WHERE titulo ='".$_GET['like']."'";


if(mysqli_query($conexion, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Gracias por su voto... ¡Saludos!");';
	echo 'window.location="indexU.view.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error. En proceso de votacion!");';
	echo 'window.location="indexU.view.php";';
	echo '</script>';
}
?>

