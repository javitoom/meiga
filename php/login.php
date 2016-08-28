<?php
session_start();
if (!isset($_SESSION["formularioLog"])) {
    $formulario["usuario"] = "";
    $formulario["pass"] = "";
    $_SESSION["formularioLog"] = $formulario;
} else {
    $formulario = $_SESSION["formularioLog"];
}
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
    <link rel="" href="">
    <title>Document</title>
</head>
<body>
<?php
include_once("cabecera.php");
include_once("menu.php");
?>
<div><?php if(!isset($_SESSION["nomUsuario"])){  ?>
    <div class="login">
        <h1 class="headerLogin">
            <br>
            Iniciar Sesion
        </h1>


        <div id="errores">
            <?php
            if (isset($_SESSION["errores"])) {
                foreach ($_SESSION["errores"] as $error) {
                    echo "Error: " . $error; ?><br><?php
                }
                unset($_SESSION["errores"]);
            }
            if (isset($_SESSION["infos"])) {
                foreach ($_SESSION["infos"] as $info) {
                    echo "Info: " . $info; ?><br><?php
                }
                unset($_SESSION["info"]);
            }
            ?>
        </div>
        <form name="fLogin" method="get" action="TratamientoLogin.php" >
            <div class="textLogin">
                <table align="center" class="textLogin">
                    <tr>
                        <td>
                            <input id="ctUsuario" name="usuario" type="text" placeholder="Usuario"
                                   value="<?php echo $_SESSION["nomUsuario"]; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="ctPass" name="pass" type="password" placeholder="Contraseña"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="enviar" value="Login" type="submit"/>
                        </td>
                    </tr>

                </table>
            </div>

        </form>


    </div>
    <?php }else{ ?>
        <div class="login">
            <h1>Datos</h1>
            <ul>
                <li><b>Nombre: </b><?php echo $_SESSION["nomUsuario"]?><br></li>
                <li><b>Usuario: </b><?php echo $_SESSION["usuario"]?></li>
                <li><b>Puntos: </b><?php echo $_SESSION["puntos"]?></li>
            </ul>
        </div>
    <?php }
    if(isset($_SESSION["adm"])){
    if ($_SESSION["adm"]==1) {
        ?>
        <div class="login">

        </div>
        <?php
    }}
    ?>
</div>
<script src="../js/navbar.js"></script>
</body>
</html>
