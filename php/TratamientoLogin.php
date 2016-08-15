<?php
  
    session_start(); 
    $formulario = $_SESSION["formularioLog"]; 
      
    if(isset($formulario)){ 
        $formulario["usuario"] = $_REQUEST["usuario"]; 
        $formulario["pass"] = $_REQUEST["pass"]; 
          
        $_SESSION["formularioLog"] = $formulario; 
    }else{ 
        header("Location:Login.php"); 
    } 
      
    $errores = validarLogin($formulario); 
      
    if(count($errores) > 0){
        $_SESSION["errores"] = $errores;
        header("Location:login.php"); 
    }else{
        header("Location:ExitoLogin.php");
    } 
      
    function validarLogin($formulario){ 
        if(!(isset($formulario["usuario"]) && strlen($formulario["usuario"]) > 0)){ 
            $errores[] = "Debe introducir un nombre de <b>Usuario</b>"; 
        }
          
        if(!(isset($formulario["pass"]) && strlen($formulario["pass"]) > 0)){ 
            $errores[] = "Debe introducir una <b>Contraseña</b>"; 
        }
          
        return $errores; 
    }
?>