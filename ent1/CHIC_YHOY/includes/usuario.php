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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Chic</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/fondo_usuario.css">
    <link rel="stylesheet" href="../css/btn.css">
    <link rel="stylesheet" href="../css/ima_carru.css">
    <link rel="stylesheet" href="../css/pie_pag.css">
    <!-- Añadir Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">CHIC YHOY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Centro de Registros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="prenda_vestir.php">Prendas de vestir</a>
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

    <!-- Encabezado centrado con el nombre de la tienda -->
    <div class="store-name">CHIC YHOY</div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../images/descc.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/desccc.png" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    

    <!-- Información de la Empresa -->
<footer class="footer bg-dark text-white mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>INFORMACIÓN DE LA EMPRESA</h5>
                <ul class="list-unstyled">
                    <li>Somos una tienda online dedicada a ofrecer las mejores prendas de vestir y accesorios. Brindamos un excelente servicio al cliente y acceso a las últimas tendencias.</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>PROPOSITO DE LA EMPRESA</h5>
                <ul class="list-unstyled">
                    <li>En CHIC YHOY , nuestro propósito es ofrecer moda accesible y de alta calidad a todos nuestros clientes.</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>GUIA DE ESTILOS</h5>
                <ul class="list-unstyled">
                    <li>Te brindamos consejos y sugerencias para crear looks únicos,innovadores y todo segun el avance de la moda. </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>ENCUENTRANOS EN:</h5>
                <ul class="list-unstyled">
                    <li>Síguenos en nuestras redes sociales para descubrir las últimas tendencias, promociones exclusivas y más.</li>
                    <li><a href="https://www.instagram.com/empresa_oficial" target="_blank">Instagram</a></li>
                    <li><a href="https://www.instagram.com/empresa_oficial" target="_blank">Whatsapp</a></li>
                    <li><a href="https://www.instagram.com/empresa_oficial" target="_blank">Facebook</a></li>
                </ul>
            </div>
        </div>
        <!-- Agrega los enlaces a tus redes sociales aquí -->
        <hr>
        <div class="row">
            <div class="col-md-3">
                <img src="../images/bcp.png" alt="BCP" class="payment-icon small">
            </div>
            <div class="col-md-9">
                <p>©2024 CHIC YHOY Todos los derechos reservados</p>
                <p>
                    <a href="#" class="text-white">Centro de privacidad</a> |
                    <a href="#" class="text-white">Política de privacidad y cookies</a> |
                    <a href="#" class="text-white">Administrar cookies</a> |
                    <a href="#" class="text-white">Condiciones generales</a> |
                    <a href="#" class="text-white">Aviso de propiedad intelectual</a> |
                    <a href="#" class="text-white">Impresión</a> |
                    <a href="#" class="text-white">Selección de anuncio</a>
                </p>
                <p>Peru-Huanuco</p>
                <p>Este sitio está protegido por el programa Trusted Commerce de Trustwave. Estado de protección de DMCA.com</p>
            </div>
        </div>
    </div>
</footer>

<!-- Añadir Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Añadir Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
