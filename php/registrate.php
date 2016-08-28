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
    <link rel="stylesheet" href="../css/cabecera.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
<?php
include_once("cabecera.php");
include_once("menu.php");
?>
<div class="login">
    <h1>Registro</h1>
    <p>
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
    <form name="freg" method="get" action="">
        <input name="usuario" type="text" placeholder="Usuario">
        <input name="nomC" type="text" placeholder="Nombre completo">
        <input name="pass" type="password" placeholder="Contraseña">
        <input name="reg" type="submit">
    </form>
</div>
</body>
</html>
<?php cerrarConexion($conexion)?>