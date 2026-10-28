<?php
// Datos para conectar a la base de datos en MySQL
$servidor = "localhost";
$usuarioBD = "root";
$passwordBD = "";
$nombreBD = "tienda_adidas";

// Crear la conexión a la base de datos
$conexion = mysqli_connect($servidor, $usuarioBD, $passwordBD, $nombreBD);

// Verificar si hubo un error en la conexión
if (!$conexion) {
    // Si falla la conexión, muestra el mensaje y detiene la página
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>
