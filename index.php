<?php
    $pg = "inicio";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="inicio">
    <?php include_once("header.php");?>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <a href="../portfolio/proyectos.html">
                    <img src="../portfolio/imagenes/cohete.svg" alt class="cohete">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center col-sm-6 offset-sm-3 pt-3">
                <div class="input-home">
                    <p class="p1">Bienvenid@ a mi sitio web</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center p-3">
                <a href="../portfolio/proyectos.php" class="btn btnBlanco shadow px-3">Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>