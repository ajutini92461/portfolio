<?php
    $pg = "proyectos";
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

<body id="proyectos">
    <?php include_once("header.php");?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-5 ps-2">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-0 pb-3">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../portfolio/imagenes/abmclientes.png" alt class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-gradiente" id="proyecto-card">
                        <h2>ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 pt-3 pb-5">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y Json.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href class="btn btn-rojo px-3">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href>Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../portfolio/imagenes/abmventas.png" alt class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-gradiente" id="proyecto-card">
                        <h2>SISTEMA DE GESTIÓN DE CLIENTES</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row py-5 mt-2">
                        <div class="col-6">
                            <a href class="btn btn-rojo px-3">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href>Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../portfolio/imagenes/proyecto-integrador.png" alt class="img-fluid">
                    </div>
                    <div class="col-12 py-3 color-gradiente" id="proyecto-card">
                        <h2>PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 pt-3 pb-1">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href class="btn btn-rojo px-3">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href>Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>