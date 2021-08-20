<!--CÓDIGO PARA LA VALIDACIÓN EN EL INICIO DE SESIÓN-->

<!--................................................-->

<?php 
//Abrir PHP

//Parámetro de inicio de sesión

session_start();

//Necesita de la función "conexion.php"

require_once "conexionV.php";

//Asignación de variables con los id/name de los <inputs>

$nombre= $_POST['nombre'];
$pass=$conexion->real_escape_string(sha1($_POST['pass']));

//Variable que guarda la consulta de la tabla de los usuarios registrados

$sql = "SELECT * FROM votante WHERE name ='$nombre' AND pass ='$pass'";

//Variable que almacena la conexión con la BD y la consulta de la misma

$result = mysqli_query($conexion, $sql);

$fila=mysqli_fetch_array($result);

//Si hay al menos un resultado que coincida, este iniciará una nueva sesión y redireccionará al index 

if ($fila['cargo_id'] == 1){



	$_SESSION['usuario']=$nombre;
	header("Location: adminphp/indexA.view.php");



//De lo contrario, mostrará un mensaje en pantalla indicando que el usuario no existe

}else
if($fila['cargo_id']== 2){

		$_SESSION['usuario']=$nombre;
	header("Location:indexU.view.php");
		
	
}
else {

	echo 
		'<script language="javascript" type="text/javascript"> 
            alert("Correo o contraseña incorrectos");
            window.location = "index.php";
  		</script>';
}

//Cerrar PHP
?>