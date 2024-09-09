<?php
require_once("db.php");

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'editar_registro':
            editar_registro();
            break;
        case 'eliminar_registro':
            eliminar_registro();
            break;
        case 'acceso_usuario':
            acceso_usuario();
            break;
        case 'sumar_carrito':
            sumar_carrito();
            break;
    }
}

function editar_registro() {
    $conexion = mysqli_connect("localhost", "root", "ellanoteama", "persona");
    extract($_POST);
    $consulta = "UPDATE usuarios SET nombre = '$nombre', correo = '$correo', telefono = '$telefono', direccion = '$direccion', fecha_nacimiento = '$fecha_nacimiento', genero = '$genero', preferencias_estilo = '$preferencias_estilo', password = '$password' WHERE id = '$id'";
    mysqli_query($conexion, $consulta);
    header('Location: usuario.php');
}

function eliminar_registro() {
    $conexion = mysqli_connect("localhost", "root", "ellanoteama", "persona");
    extract($_POST);
    $consulta = "DELETE FROM usuarios WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header('Location: usuario.php');
}

function acceso_usuario() {
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['nombre'] = $nombre;
    $conexion = mysqli_connect('localhost', 'root', 'ellanoteama', 'persona');
    $consulta = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = '$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_num_rows($resultado);
    if ($fila) {
        header("Location: usuario.php");
    } else {
        header("Location: login.php");
        session_destroy();
    }
}

function sumar_carrito() {
    session_start();
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }
    $total = 0;
    foreach ($_SESSION['carrito'] as $producto) {
        $total += $producto['precio'];
    }
    echo json_encode(array('total' => $total));
}
