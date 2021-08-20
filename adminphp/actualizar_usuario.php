<?php
require_once '../conexionV.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$curp = $_POST['curp'];
$matri = $_POST['matricula'];
$email = $_POST['email'];
$password = $_POST['contrasena'];

$sql = "UPDATE votante SET name='$nombre', lastname='$apellido', phone='$telefono', years='$edad', curp='$curp', matri='$matri',
 email='$email', pass='$password' 
WHERE name='$id'";

if(mysqli_query($conexion, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="indexA.view.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="editarUsuario.php";';
	echo '</script>';
}
?>

