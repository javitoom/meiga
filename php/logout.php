<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Javi
 * Date: 26/08/2016
 * Time: 22:01
 */
$_SESSION["usuario"] = null;
$_SESSION["passw"] = null;
$_SESSION["nomUsuario"] = null;
$_SESSION["puntos"] = null;
$_SESSION["adm"] = null;
header("Location:Login.php");