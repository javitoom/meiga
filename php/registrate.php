<?php
session_start();
require_once("GestionBD.php");
require_once("gestionReg.php");
$conexion = crearConexion();
if(isset($_GET['reg'])){
    if($_GET['usuario']==""||$_GET['nomC']==""||$_GET['pass']==""){
        $errores[] = "No puede dejar datos en blanco";
    }else {
        anyadirUsuario($conexion, htmlentities($_GET['usuario']), htmlentities($_GET['nomC']), htmlentities($_GET['pass']));
        $infos[] = "Usuario creado";
        $_SESSION["infos"] = $infos;
        header("Location:Login.php");
    }
}

/**
 * Created by PhpStorm.
 * User: Javi
 * Date: 26/08/2016
 * Time: 22:11
 */
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cabecera.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <title>Meiga</title>
</head>
<body>
<?php
include_once("cabecera.php");
include_once("menu.php");
?>
<div class="w3-display-container" style="height: 500px">
    <h1 class="w3-display-topmiddle"><br>Registro</h1>
    <p class=" w3-display-bottommiddle">
        <?php
        if (isset($errores)) {
            foreach ($errores as $error) {
                echo "Error: " . $error; ?><br><?php
            }
            unset($errores);
        }
        if (isset($_SESSION["infos"])) {
            foreach ($_SESSION["infos"] as $info) {
                echo "Info: " . $info; ?><br><?php
            }
            unset($_SESSION["info"]);
        }
        ?>
    </p>
    <form class="w3-display-middle" name="freg" method="get" action="">
        <input class="w3-input" name="usuario" type="text" placeholder="Usuario">
        <input class="w3-input" name="nomC" type="text" placeholder="Nombre completo">
        <input class="w3-input" name="pass" type="password" placeholder="Contraseña">
        <input class="w3-input" name="reg" type="submit">
    </form>
</div>
<script src="../js/navbar.js"></script>
</body>
</html>
<?php cerrarConexion($conexion)?>