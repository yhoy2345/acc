<?php
include_once './db.php';
include_once './Modelo.php';
//kjskjskjskjkjskskjsjkjksjsjsk
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores de los números enviados por el formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $genero = $_POST["genero"];
    $preferencias_estilo = $_POST["preferencias_estilo"];
    $password = $_POST["password"];


    insertarProducto($conexion,$nombre, $correo, $telefono, $direccion, $fecha_nacimiento, $genero, $preferencias_estilo, $password);
}