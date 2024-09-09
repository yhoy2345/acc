<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <form action="funciones.php" method="post">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <br><br>
                            <h3 class="text-center">ACCEDER A CHIC YHOY</h3>
                            <hr>
                            <div class="form-group">
                                <label for="nombre">Usuario</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                                <input type="hidden" name="accion" value="acceso_usuario">
                            </div>
                            <br>
                            <center>
                                <input type="submit" class="btn btn-success" value="Ingresar">
                                <a href="index.php" class="btn btn-primary">Registrarse</a>
                            </center>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
