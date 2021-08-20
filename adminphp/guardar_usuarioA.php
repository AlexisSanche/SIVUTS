<!--CÓDIGO PARA EL REGISTRO DE UN NUEVO USUARIO-->

<!--...........................................-->

<?php
//Abre PHP

//Necesita de la función "conexion.php"

require_once '../conexionV.php';

//Si el campo de Email y(||) Pass están vacíos (empty), enviar mensaje (echo)

if (empty($_POST['email']) || empty($_POST['pass'])) {

echo 
	'<script language="javascript" type="text/javascript"> 
        alert("Campos Incompletos");
        window.location = "crearUsuario.php";
	</script>';

}else{

	//De lo contrario, continuar con...

	//Asignación de variables con los id/name de los <inputs>
	$cargo     = $_POST['cargo'];
	$name     = $_POST['name'];
	$lastname = $_POST['lastname'];
	$phone    = $_POST['phone'];
	$years    = $_POST['years'];
	$curp     = $_POST['curp'];
	$matri    = $_POST['matri'];
	$email    = $_POST['email'];
	$pass     = sha1($_POST['pass']);

	//Insertar los datos obtenidos en la variable "$query" y mandarlos a la BD

	$query    = "INSERT INTO votante (cargo_id,name, lastname, phone, years, curp, matri, email, pass) VALUES ('$cargo','$name', '$lastname  ', '$phone', '$years', '$curp', '$matri', '$email', '$pass')";

	//Una vez insertados los datos, guardar datos haciendo uso de las funciones en variable ($conexion y $query)

	$guardar  = mysqli_query($conexion, $query);

	//Si se guardan correctamente, muestra en pantalla el siguiente mensaje... Y redirecciona a la vista para iniciar sesión

	if ($guardar) {

		echo 
		'<script language="javascript" type="text/javascript"> 
            alert("Registrado Correctamente");
            window.location = "indexA.view.php";
  		</script>';

	//De lo contrario, mandará mensaje de error que returnará a la misma vista de registro

	} else {

		echo 
		'<script language="javascript" type="text/javascript"> 
            alert("Error, intente nuevamente");
            window.location = "crearUsuario.php";
  		</script>';
	}
}

//Cierra PHP
?>