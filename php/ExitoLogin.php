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

        $usuario = $datosReg["usuario"];
        $pass = $datosReg["pass"];
        try {
            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'  AND contrasenya = '$pass'";
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
        try {
            $filas = $conexion->query($sql);
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        foreach ($filas as $fila) {
            $_SESSION["usuario"] = $fila[0];
            $_SESSION["passw"] = $fila[1];
            $_SESSION["nomUsuario"] = $fila[2];
            $_SESSION["puntos"] = $fila[3];
            $_SESSION["adm"] = $fila[4];
        }
        if(!isset($_SESSION["usuario"])){
            $errores[] = "Usuario y Contraseña Incorrectos";
            $_SESSION["errores"] = $errores;
        }


header("Location:Login.php");
cerrarConexion($conexion);
?>