<?php
$host = "localhost";
$user = "root";
$pass = "ellanoteama";
$database = "persona"; // Cambié la base de datos a 'persona' según lo solicitado

$conexion = new mysqli ($host, $user, $pass, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
else
{
       //echo"Conexión exitosa:";
}