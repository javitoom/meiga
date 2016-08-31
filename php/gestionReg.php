<?php
/**
 * Created by PhpStorm.
 * User: Javi
 * Date: 27/08/2016
 * Time: 13:45
 */
function anyadirUsuario($conexion,$usuario,$nomC ,$pass) {
    try {
        $stmt=$conexion->prepare("INSERT INTO usuarios(usuario, contrasenya, nombre_completo) VALUES (:USUARIO,:CONTRASENYA,:NOMC)");
        $stmt->bindParam(':USUARIO',$usuario);
        $stmt->bindParam(':CONTRASENYA',$pass);
        $stmt->bindParam(':NOMC',$nomC);
        $stmt->execute();
        return "";
    } catch(PDOException $e) {
        $_SESSION["errores"] = $e->getMessage();
    }
}