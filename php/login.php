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
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/cabecera.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
<?php
include_once("cabecera.php");
include_once("menu.php");
?>
<div>
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
            ?>
        </div>
        <form name="fLogin" method="get" action="TratamientoLogin.php" >
            <div class="textLogin">
                <table align="center" class="textLogin">
                    <tr>
                        <td>
                            <input id="ctUsuario" name="usuario" type="text" placeholder="Usuario"
                                   value="<?php echo $formulario["usuario"]; ?>"/>
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
</div>
</body>
</html>
