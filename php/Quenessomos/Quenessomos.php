<?php
session_start();
/**
 * Created by PhpStorm.
 * User: quiqu
 * Date: 07/08/2016
 * Time: 20:53
 */?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/cabecera.css">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <title>Meiga</title>
</head>
<body>
<?php
include_once("../cabecera.php");
include_once("../menu.php");
?>
<div class="ptext">
    <div>
        <p style="font-size: 3.5vh;text-align: center;font-weight: bold;">QUENES SOMOS</p>
        <img style="float: right;height: 30vh;margin-bottom: 2vh;" src="/imagenes/logo.png" alt="Meiga">
        <div style="padding-top: 2vh;">
        <p style="font-size: 3.5vh">ME.I.GA (Medicina Intercambios Galicia) é o comité local de IFMSA-Spain en Santiago de Compostela.</p>
        <p style="font-size: 3.5vh">Somos unha asociación de estudantes de Medicina que traballa por cambiar o mundo.</p>
        </div>
    </div>
</div>
<script src="../../js/navbar.js"></script>
</body>
</html>
