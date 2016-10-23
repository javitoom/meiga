<?php
/**
 * Created by PhpStorm.
 * User: Javi
 * Date: 31/08/2016
 * Time: 19:30
 */
function editarUsuario($conexion,$usuario,$nomC,$puntos,$admin) {
    try {
        $stmt=$conexion->prepare("UPDATE usuarios SET nombre_completo=:NOMC,puntos=:PUN,admin=:ADM WHERE usuario=:USUARIO");
        $stmt->bindParam(':USUARIO',$usuario);
        $stmt->bindParam(':NOMC',$nomC);
        $stmt->bindParam(':PUN',$puntos);
        $stmt->bindParam(':ADM',$admin);
        $stmt->execute();
        return "";
    } catch(PDOException $e) {
        $_SESSION["errores"] = $e->getMessage();
    }
}
function eliminarUsuario($conexion,$usuario) {
    try {
        $stmt=$conexion->prepare("DELETE FROM usuarios WHERE usuario=:USUARIO");
        $stmt->bindParam(':USUARIO',$usuario);
        $stmt->execute();
        return "";
    } catch(PDOException $e) {
        $_SESSION["errores"] = $e->getMessage();
    }
}