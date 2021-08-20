<?php
require_once 'conexionA.php';

$id = $_GET['id'];


$sql = "DELETE FROM votante WHERE name='$id'";
if(mysqli_query($conexion, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="indexA.view.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="indexA.view.php";';
	echo '</script>';
}
?>