<!--CÓDIGO PARA LA VALIDACIÓN EN EL INICIO DE SESIÓN-->

<!--................................................-->

<?php 
//Abrir PHP


//Necesita de la función "conexion.php"

require_once "../conexionV.php";

//Asignación de variables con los id/name de los <inputs>

$username    = $_POST['username'];
$password     =$conexion->real_escape_string( $_POST['password']);

//Variable que guarda la consulta de la tabla de los usuarios registrados

$sql = "SELECT * FROM admins WHERE username='$username' AND password ='$password'";

//Variable que almacena la conexión con la BD y la consulta de la misma

$result = mysqli_query($conexion, $sql);



//Si hay al menos un resultado que coincida, este iniciará una nueva sesión y redireccionará al index 

if (mysqli_num_rows($result) > 0){

	$_SESSION['usuario']=$username;
	header("Location: indexA.view.php");

//De lo contrario, mostrará un mensaje en pantalla indicando que el usuario no existe

} else {

	echo 
		'<script language="javascript" type="text/javascript"> 
            alert("Correo o contraseña incorrectos");
            window.location = "loginA.view.php";
  		</script>';
}

//Cerrar PHP
?>





