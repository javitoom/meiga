<?php
/**
 * Created by PhpStorm.
 * User: quiqu
 * Date: 07/08/2016
 * Time: 21:34
 */?>
<div class="menu">
    <ul>
        <li><a class="active" href="inicio.php">Inicio</a></li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Quenes somos?</a>
            <div class="dropdown-content">
                <a href="#">Coñécenos!</a>
                <a href="#">Consulta o Reglamento (ROI)</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Grupos de traballo</a>
            <div class="dropdown-content">
                <a href="#">Saúde Pública</a>
                <a href="#">Educación Médica</a>
                <a href="#">Dereitos humanos e paz</a>
                <a href="#">Salud reproductiva, sexualidade e sida</a>
                <a href="#">Presidencia e Vicepresidencia</a>
                <a href="#">Secretaría e Tesouraría</a>
                <a href="#">Webmáster</a>
            </div>
        </li>
        <li><a class="active" href="#home">Actividades</a></li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Intercambios</a>
            <div class="dropdown-content">
                <a href="#">Coñece o noso equipo</a>
                <a href="#">Intercambios do A ao Z</a>
                <a href="#">Queres ser Persoa de Contacto?</a>
                <a href="#">Acolle a un estudante de intercambio</a>
                <a href="#">Eles estiveron en Santiago!</a>
                <a href="#">Eles foron de intercambio!</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Socios</a>
            <div class="dropdown-content">
                <a href="#">Faite socio!</a>
                <a href="#">Queres gañar puntos?</a>
                <a href="#">FAQ</a>
                <a href="#">Participa nas reunións</a>
                <a href="#">"O oso dos ósos"</a>
            </div>
        </li>
        <li><a class="active" href="#home">Contacto</a></li>
        <?php if(!isset($_SESSION["nomUsuario"])){  ?>
        <li id="registrate"><a class="active" href="registrate.php">Registrate</a></li>
        <li id="registrate"><a class="active" href="login.php">Login</a></li>
        <?php }else{?>
            <li id="registrate"><a class="active" href="logout.php">Logout</a></li>
            <li id="registrate"><a class="active" href="login.php">Perfil</a></li>
        <?php } ?>
    </ul>
</div>
