<?php
$id = $_GET['id'];
$conexion = mysqli_connect("localhost", "root", "ellanoteama", "persona");
$consulta = "SELECT * FROM usuarios WHERE id=$id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../css/es.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <form action="/editar_usuario/{{ usuario.id }}" method="post">
        <h3>Editar Usuario</h3>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ usuario['nombre'] }}" required><br>
        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" value="{{ usuario['correo'] }}" required><br>
        <!-- Agregar los otros campos igual que arriba -->
        <input type="submit" value="Guardar">
        <a href="/usuario">Cancelar</a>
    </form>
</body>
</html>
