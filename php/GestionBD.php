<?php
function crearConexion()
{
    $host="mysql:host=localhost;dbname=meiga";
    $usuario="root";
    $pass="";
    try {
        $conexion = new PDO($host, $usuario, $pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        error_log($e->getMessage());
        $_SESSION["errores"] = array('No se pudo conectar con la base de datos. Datos incorrectos');
        header("Location:Login.php");
    }
    return $conexion;
}
function cerrarConexionBD($conexion)
{
    $conexion = null;
}
?>