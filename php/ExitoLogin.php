<?php
session_start();
$datosReg = $_SESSION["formularioLog"];

if(!isset($datosReg)){
    header("Location:Login.php");
}

unset($_SESSION["formularioLog"]);
unset($_SESSION["errores"]);

require_once("GestionBD.php");

$conexion = crearConexion();
?>

    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

    <html>
    <head>
        <meta content="text/html; charset=UTF-8" />
        <title>Éxito</title>
    </head>

    <body>
    <div>
        <?php
        $usuario = "sseek";//$datosReg["usuario"];
        $pass = "penepequeño";//$datosReg["pass"];
        try {
            $sql = "SELECT * FROM usuarios WHERE ((usuario LIKE '$usuario') ) AND (contraseña LIKE '$pass'))";
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
        $filas = $conexion->query($sql);

        foreach ($filas as $fila) {
            $_SESSION["usuario"] = $fila[0];
            $_SESSION["nomUsuario"] = $fila[1];
            $_SESSION["tipoUs"] = $fila[2];
        }
        if(isset($_SESSION["usuario"])){
            ?><h1>Autenticado correctamente. Bienvenido: <?php echo $_SESSION["nomUsuario"];?></h1>

            <?php
        }else{
            ?><h1>Usuario y Contraseña Incorrectos</h1><?php
        }
        /*$resul = consultarLogin($datosReg["usuario"], $datosReg["pass"], $conexion);
        $res = $filas->fetchAll();

        print_r($res);*/
        ?>
        <div id="div_volver">
            <a href="Login.php">Volver</a> al Login<br>
            <a href="JoyeriaCoca.php">Inicio</a>
        </div>

    </div>
    </body>
    </html>

<?php
cerrarConexion($conexion);
?>