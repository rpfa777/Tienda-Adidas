<?php
$servidor = "localhost";
$usuarioBD = "root";
$passwordBD = "";
$nombreBD = "tienda_adidas";

$conexion = mysqli_connect($servidor, $usuarioBD, $passwordBD, $nombreBD);

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>