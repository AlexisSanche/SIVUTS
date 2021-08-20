<!--CÓDIGO PARA CERRAR SESIÓN ABIERTA E IR AL LOGIN PARA VOTANTE-->

<!--.................................-->

<?php
//Abre PHP

//Parámetro de inicio de sesión

session_start();

//Usamos "unset" para eliminar el contenido de la variable nombrada dentro de las comillas simples

unset($_SESSION['usuario']);

//Redirecciona nuevamente a la vista del Inicio de Sesión

header("location:index.php");

//Cierra PHP
?>