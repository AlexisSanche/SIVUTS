<!--CÓDIGO PARA LA CONEXIÓN A LA BASE DE DATOS-->

<!--..........................................-->

<?php
//Abre PHP

//Crea una conexion con el host, nombre de usuario, contraseña y nombre de la base de datos,
//todo guardado en una variable para su fácil uso.


$conexion = mysqli_connect("localhost", "root", "", "sivuts");



//iniciar la sesion

if(!isset($_SESSION)){
    session_start();
}

//Cierra PHP
?>