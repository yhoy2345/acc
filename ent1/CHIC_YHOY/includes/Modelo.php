<style>

.success-message {
    background-color: #dff0d8;
    border: 1px solid #d6e9c6;
    color: #3c763d;
    padding: 10px;
    margin-bottom: 20px;
    text-align: center;
}

</style>
<?php
function insertarProducto($conexion, $nombre, $correo, $telefono, $direccion, $fecha_nacimiento, $genero, $preferencias_estilo, $password) {
    // Consulta SQL para insertar datos
    $sql = "INSERT INTO usuarios (nombre, correo, telefono,direccion,fecha_nacimiento,genero, preferencias_estilo,  password ) VALUES (?, ?,?,?,?,?,?,?)";

    // Preparar la consulta
    $stmt = $conexion->prepare($sql);
    $idcategorias = null;
    // Vincular parámetros
    $stmt->bind_param("ssssssss", $nombre, $correo, $telefono, $direccion, $fecha_nacimiento, $genero, $preferencias_estilo, $password);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Mostrar mensaje de éxito
        echo '<div class="success-message">Producto ingresado correctamente.</div>';
        echo "<script>setTimeout(function(){window.location.href='index.php';}, 1000);</script>";
    } else {
        echo "Error al insertar producto: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();
}
?>
