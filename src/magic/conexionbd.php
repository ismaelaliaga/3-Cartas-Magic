<?php
$servidor = "localhost";
$user = "root";
$password = "";
$database = "proyecto_102";

//Conectar con la base de datos

$bd = new mysqli($servidor, $user, $password, $database);

//Comprobar la conexion con la base de datos

if ($bd->connect_error) {
    die("La conexión con la bd ha fallado. Error: " . $bd->connect_errno . ": " . $bd->connect_error);
}
