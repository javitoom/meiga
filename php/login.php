<?php
session_start();
require_once("GestionBD.php");
require_once("gestionUsuarios.php");
$conexion = crearConexion();
if (isset($_GET["update"])) {
    if($_GET['user']==""||$_GET['nombre']==""||$_GET['puntos']==""||$_GET["admin"]=="") {
        $errores[] = "No puede dejar campos vacios";
    } else {
        editarUsuario($conexion, htmlentities($_GET["user"]), htmlentities($_GET["nombre"]), htmlentities($_GET["puntos"]), htmlentities($_GET["admin"]));
    }
}
if (isset($_GET["delete"])) {
    eliminarUsuario($conexion, htmlentities($_GET["delete"]));
}

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
    <title>Meiga</title>
</head>
<body>
<?php
include_once("cabecera.php");
include_once("menu.php");
?>
<!--Sin estar logueado-->
<div>
    <?php if (!isset($_SESSION["nomUsuario"])){ ?>
        <div class="w3-display-container" style="height: 500px">
            <h1 class="w3-display-topmiddle">
                <br>
                Iniciar Sesion
            </h1>


            <div class="w3-display-bottommiddle" id="errores">
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
            <form class="w3-container w3-display-middle" name="fLogin" method="get" action="TratamientoLogin.php">

                <input class="w3-input" id="ctUsuario" name="usuario" type="text" placeholder="Usuario"
                       value="<?php if (isset($_SESSION["usuarioL"])) {
                           echo $_SESSION["usuarioL"];
                       } ?>"/>

                <input class="w3-input" id="ctPass" name="pass" type="password" placeholder="Contraseña"/>

                <input class="w3-input" id="enviar" value="Login" type="submit"/>

            </form>


        </div>
        <!--Estando logueado-->
    <?php }else{ ?>
    <div style="height: 700px">
        <div style="text-align: center">
            <h1><br>Datos</h1>
            <ul class="w3-ul">
                <li><b>Nombre: </b><?php echo $_SESSION["nomUsuario"] ?><br></li>
                <li><b>Usuario: </b><?php echo $_SESSION["usuario"] ?></li>
                <li><b>Puntos: </b><?php echo $_SESSION["puntos"] ?></li>
            </ul>
        </div>
        <?php }
        if (isset($_SESSION["adm"])){
        if ($_SESSION["adm"] == 1) {
        ?>
        <div class="">
            <h1>Editar usuarios</h1>
            <p><?php if (isset($errores)) {
                    foreach ($errores as $error) {
                        echo "Error: " . $error; ?><br><?php
                    }
                    unset($errores);
                } ?></p>
            <table class="w3-table-all">


                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Puntos</th>
                    <th>Admin</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>

                </tr>


                <?php
                /*Muestra las entradas de la bd*/
                $sql = "SELECT * FROM usuarios ORDER BY nombre_completo,usuario";
                $filas = $conexion->query($sql);
                foreach ($filas as $fila) {
                    ?>

                    <tr>
                        <td><?php echo $fila["nombre_completo"]; ?></td>
                        <td><?php echo $fila["usuario"]; ?></td>
                        <td><?php echo $fila["puntos"]; ?></td>
                        <td><?php if ($fila["admin"] == 1) {
                                echo "Activado";
                            } else {
                                echo "Descativado";
                            } ?></td>
                        <td>
                            <div id="desplegarEditar">
                                <button class="w3-btn" onclick="mostrarOcultar('<?php echo $fila["usuario"] ?>')">
                                    Actualizar
                                </button>
                                <form name="n<?php echo $fila["usuario"] ?>" action="" method="get"
                                      id="<?php echo $fila["usuario"] ?>" style="display: none"
                                      onsubmit="return validaCamposVacios('n<?php echo $fila["usuario"] ?>')">
                                    <input name="user" type="hidden" value="<?php echo $fila["usuario"] ?>">
                                    <input name="nombre" type="text" placeholder="Nombre"
                                           value="<?php echo $fila["nombre_completo"] ?>">
                                    <input name="puntos" type="text" placeholder="Puntos"
                                           value="<?php echo $fila["puntos"] ?>">
                                    <select name="admin">
                                        <option value="0" <?php if ($fila['admin'] == 0) {
                                            echo "selected";
                                        } ?>>Desactivado
                                        </option>
                                        <option value="1" <?php if ($fila['admin'] == 1) {
                                            echo "selected";
                                        } ?> >Activado
                                        </option>
                                    </select>
                                    <input class="w3-btn" type="submit" name="update" value="Enviar">
                                </form>
                            </div>
                        </td>
                        <td>
                            <form action="" method="get">
                                <button class="w3-btn" name="delete" value="<?php echo $fila["usuario"] ?>"
                                        type="submit">Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>


                <?php } ?>
            </table>
        </div>
    </div>
<?php
}
}
?>
</div>
<script src="../js/navbar.js"></script>
<?php cerrarConexion($conexion); ?>
</body>
</html>