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
<body id="page-top">
    <form action="../includes/funciones.php" method="post">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <br>
                            <h3 class="text-center">Editar Usuario</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $usuario['nombre']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $usuario['correo']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $usuario['telefono']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $usuario['direccion']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="<?php echo $usuario['fecha_nacimiento']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="genero" class="form-label">Género</label>
                                <select name="genero" id="genero" class="form-control" required>
                                    <option value="Masculino" <?php echo ($usuario['genero'] == 'Masculino') ? 'selected' : ''; ?>>Masculino</option>
                                    <option value="Femenino" <?php echo ($usuario['genero'] == 'Femenino') ? 'selected' : ''; ?>>Femenino</option>
                                    <option value="Otro" <?php echo ($usuario['genero'] == 'Otro') ? 'selected' : ''; ?>>Otro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="preferencias_estilo" class="form-label">Preferencias de Estilo</label>
                                <input type="text" name="preferencias_estilo" id="preferencias_estilo" class="form-control" value="<?php echo $usuario['preferencias_estilo']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $usuario['password']; ?>" required>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </div>
                            <br>
                            <div class="mb-3">
                                <input type="submit" value="Guardar" class="btn btn-success" name="registrar">
                                <a href="usuario.php" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
