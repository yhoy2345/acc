<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../css/es.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/fondo_usuario.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="usuario.php">CHIC YHOY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Centro de Registros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="articulos.php">Prendas de vestir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cliente.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Foro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../includes/reporte.php"> Generar Reporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../includes/c_session.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
<body id="page-top">
    <form action="validar.php" method="post">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <br>
                            <h3 class="text-center">Registro de nuevo usuario</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" name="correo" id="correo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="genero" class="form-label">Género</label>
                                <select name="genero" id="genero" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="preferencias_estilo" class="form-label">Preferencias de Estilo</label>
                                <textarea name="preferencias_estilo" id="preferencias_estilo" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <br>
                            <div class="mb-3">
                                <input type="submit" value="Registar" class="btn btn-success" name="registrar">
                                <a href="usuario.php" class="btn btn-danger">Cancelar</a>
                                <a href="login.php" class="btn btn-primary">Ir al Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
