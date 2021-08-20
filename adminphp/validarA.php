<!--CÓDIGO PARA VALIDAR LOS DATOS INGRESADOS -->

<!--.........................................-->

<?php
//Abre PHP

//Asignación de variables con los id/name de los <inputs>

$username = $_POST['username'];
$password = $_POST['password'];


//Crea una conexion con el host, nombre de usuario, contraseña y nombre de la base de datos,
//todo guardado en una variable para su fácil uso.

$conexion = mysqli_connect("localhost","root","","sivuts");

//Variable que guarda la consulta de la tabla de los usuarios registrados

$consulta = "SELECT * FROM admins WHERE username ='$username' AND password ='$password'";

//Variable que almacena la conexión con la BD y la consulta de la misma

$resultado = mysqli_query($conexion, $consulta);

//Variable que almacena todo lo anterior y que se usará en el Index del Admin

$filas = mysqli_num_rows($resultado);

//Si hay al menos un resultado que coincida, este iniciará una nueva sesión y redireccionará al index 

if ($filas > 0) {

	session_start();
        $_SESSION["uuario"] = TRUE;
	header("location:indexA.view.php");

//De lo contrario, mostrará un mensaje en pantalla indicando que se ingresó mal los datos

} else {
	echo 
		'<script language="javascript" type="text/javascript"> 
            alert("Correo o contraseña incorrectos");
            window.location = "loginA.view.php";
  		</script>';
}

//Cierra PHP
?>