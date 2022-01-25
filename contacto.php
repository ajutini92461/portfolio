<?php
    $pg = "contacto";
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
<body id="contacto">
    <?php include_once("header.php");?>
    <main class="container">
        <div class="row">
            <div class="col-12 col-sm-6 pt-4 pb-5 ps-sm-0">
                <h1>Contacto</h1>
            </div>
        <div class="row">
            <div class="col-12 col-sm-6 ps-sm-0">
                <p>Te invito a que te contactes enviándome un mensaje o bien por WhatsApp.</p>
            </div>
            <div class="col-12 col-sm-6 ps-3 pe-0">
                <form action="" method="post">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/WhatsApp" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow"></textarea>
                    </div>
                    <div class="pb-3">
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btnBlanco shadow">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>