<?php
require_once '../conexionV.php';

$id = $_GET['id'];


$sql = "DELETE FROM proyecto WHERE titulo='$id'";
if(mysqli_query($conexion, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="listapro.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="listapro.php";';
	echo '</script>';
}
?>