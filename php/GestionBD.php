<?php
function crearConexion()
{
    $host="mysql:host=eu-cdbr-azure-west-d.cloudapp.net;dbname=miegadb";
    $usuario="bd238858fed131";
    $pass="27d9f9c9";
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
function cerrarConexion($conexion)
{
    $conexion = null;
}
?>