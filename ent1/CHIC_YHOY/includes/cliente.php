<?php
session_start();
error_reporting(0);
$validar = $_SESSION['nombre'];
if ($validar == null || $validar == '') {
    header('Location: ../includes/login.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="../css/fondo_usuario.css">
    <link rel="stylesheet" href="../css/es.css">
    <link rel="stylesheet" href="../css/styles.css">
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
                    <a class="nav-link" href="reporte.php"> Generar Reporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../includes/c_session.php">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
<body>
    <form action="../includes/funciones.php" method="post">
    <div class="container is-fluid">
        <div class="col-xs-12">
            <h1>Tabla de usuarios Registrados</h1>
            <br>
            <div class="btn-group">
                <a class="btn btn-success" href="index.php">Nuevo usuario</a>
                <a class="btn btn-success" href="usuario.php">Atras</a>
            </div>
            <br><br>
        </form> <!-- Corrected form closing tag position -->
            <table class="table table-striped table-secondary" id="table_id">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Género</th>
                        <th>Preferencias de Estilo</th>
                        <th>Password</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexion = mysqli_connect("localhost", "root", "ellanoteama", "persona");
                        $sql = "SELECT * FROM usuarios";
                        $dato = mysqli_query($conexion, $sql);
                        if ($dato->num_rows > 0) {
                            while ($fila = mysqli_fetch_array($dato)) {
                    ?>
                                <tr>
                                    <td><?php echo $fila['nombre']; ?></td>
                                    <td><?php echo $fila['correo']; ?></td>
                                    <td><?php echo $fila['telefono']; ?></td>
                                    <td><?php echo $fila['direccion']; ?></td>
                                    <td><?php echo $fila['fecha_nacimiento']; ?></td>
                                    <td><?php echo $fila['genero']; ?></td>
                                    <td><?php echo $fila['preferencias_estilo']; ?></td>
                                    <td><?php echo $fila['password']; ?></td>
                                    <td><?php echo $fila['fecha']; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="editar_usuario.php?id=<?php echo $fila['id']; ?>">Editar</a>
                                        <a class="btn btn-danger" href="eliminar_registro.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
                                    </td>
                                </tr>
                    <?php
                            }
                        } else {
                    ?>
                            <tr class="text-center">
                                <td colspan="10">No existen registros</td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>