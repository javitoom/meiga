<?php
/**
 * Created by PhpStorm.
 * User: quiqu
 * Date: 07/08/2016
 * Time: 21:34
 */?>
<div>
    <!-- navbar -->
    <ul class="w3-navbar w3-black w3-card-2 w3-left-align">
        <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
            <a class="w3-padding-large" href="javascript:void(0)" onclick="navPho()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        </li>
        <li><a class="w3-hover-none w3-hover-text-grey w3-padding-large" href="inicio.php">Inicio</a></li>
        <li class="w3-hide-small w3-dropdown-hover">
            <a href="#" class="w3-hover-none w3-padding-large">Quenes somos?</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="#">Coñécenos!</a>
                <a href="#">Consulta o Reglamento (ROI)</a>
            </div>
        </li>
        <li class="w3-hide-small w3-dropdown-hover">
            <a href="#" class="w3-hover-none w3-padding-large">Grupos de traballo</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="#">Saúde Pública</a>
                <a href="#">Educación Médica</a>
                <a href="#">Dereitos humanos e paz</a>
                <a href="#">Salud reproductiva, sexualidade e sida</a>
                <a href="#">Presidencia e Vicepresidencia</a>
                <a href="#">Secretaría e Tesouraría</a>
                <a href="#">Webmáster</a>
            </div>
        </li>
        <li class="w3-hide-small"><a class="w3-padding-large" href="#home">Actividades</a></li>
        <li class="w3-hide-small w3-dropdown-hover">
            <a href="#" class="w3-hover-none w3-padding-large">Intercambios</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="#">Coñece o noso equipo</a>
                <a href="#">Intercambios do A ao Z</a>
                <a href="#">Queres ser Persoa de Contacto?</a>
                <a href="#">Acolle a un estudante de intercambio</a>
                <a href="#">Eles estiveron en Santiago!</a>
                <a href="#">Eles foron de intercambio!</a>
            </div>
        </li>
        <li class="w3-hide-small w3-dropdown-hover">
            <a href="#" class="w3-hover-none w3-padding-large">Socios</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="#">Faite socio!</a>
                <a href="#">Queres gañar puntos?</a>
                <a href="#">FAQ</a>
                <a href="#">Participa nas reunións</a>
                <a href="#">"O oso dos ósos"</a>
            </div>
        </li>
        <li class="w3-hide-small"><a class="w3-padding-large" href="#home">Contacto</a></li>
        <?php if(!isset($_SESSION["nomUsuario"])){  ?>
        <li id="registrate" class="w3-hide-small"><a class="w3-padding-large" href="registrate.php">Registrate</a></li>
        <li id="registrate" class="w3-hide-small"><a class="w3-padding-large"  href="login.php">Login</a></li>
        <?php }else{?>
            <li id="registrate" class="w3-hide-small"><a class="w3-padding-large" href="logout.php">Logout</a></li>
            <li id="registrate" class="w3-hide-small"><a class="w3-padding-large" href="login.php">Perfil</a></li>
        <?php } ?>
    </ul>
</div>
<!-- navbar phone-->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium" >
    <ul class="w3-navbar w3-left-align w3-black">
        <li class=" w3-dropdown-hover" style="background-color: #000; color: rgb(204, 204, 204)">
            <a href="#" class="w3-hover-none w3-padding-large">Quenes somos?</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="#">Coñécenos!</a>
                <a href="#">Consulta o Reglamento (ROI)</a>
            </div>
        </li>
        <li class=" w3-dropdown-hover">
            <a href="#" class="w3-hover-none w3-padding-large">Grupos de traballo</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="#">Saúde Pública</a>
                <a href="#">Educación Médica</a>
                <a href="#">Dereitos humanos e paz</a>
                <a href="#">Salud reproductiva, sexualidade e sida</a>
                <a href="#">Presidencia e Vicepresidencia</a>
                <a href="#">Secretaría e Tesouraría</a>
                <a href="#">Webmáster</a>
            </div>
        </li>
        <li class=""><a class="w3-padding-large" href="#home">Actividades</a></li>
        <li class=" w3-dropdown-hover">
            <a href="#" class="w3-hover-none w3-padding-large">Intercambios</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="#">Coñece o noso equipo</a>
                <a href="#">Intercambios do A ao Z</a>
                <a href="#">Queres ser Persoa de Contacto?</a>
                <a href="#">Acolle a un estudante de intercambio</a>
                <a href="#">Eles estiveron en Santiago!</a>
                <a href="#">Eles foron de intercambio!</a>
            </div>
        </li>
        <li class=" w3-dropdown-hover">
            <a href="#" class="w3-hover-none w3-padding-large">Socios</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="#">Faite socio!</a>
                <a href="#">Queres gañar puntos?</a>
                <a href="#">FAQ</a>
                <a href="#">Participa nas reunións</a>
                <a href="#">"O oso dos ósos"</a>
            </div>
        </li>
        <li class=""><a class="w3-padding-large" href="#home">Contacto</a></li>
        <?php if(!isset($_SESSION["nomUsuario"])){  ?>
            <li class=""><a class="w3-padding-large" href="registrate.php">Registrate</a></li>
            <li class=""><a class="w3-padding-large"  href="login.php">Login</a></li>
        <?php }else{?>
            <li class=""><a class="w3-padding-large" href="logout.php">Logout</a></li>
            <li class=""><a class="w3-padding-large" href="login.php">Perfil</a></li>
        <?php } ?>
    </ul>
</div>