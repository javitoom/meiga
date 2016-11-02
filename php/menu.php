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
            <a class="w3-padding-large" href="javascript:void(0)" onclick="navPho('navDemo')" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        </li>
        <li><a class="w3-hover-none w3-hover-text-grey w3-padding-large" href="/php/inicio.php">Inicio</a></li>
        <li class="w3-hide-small w3-dropdown-hover">
            <a href="/php/Quenessomos/Quenessomos.php" class="w3-hover-none w3-padding-large">Quenes somos?</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="/php/Quenessomos/Coñecenos.php">Coñécenos!</a>
                <a href="/php/Quenessomos/consultaoroi.php">Consulta o Reglamento (ROI)</a>
            </div>
        </li>
        <li class="w3-hide-small w3-dropdown-hover">
            <!--En href es donde hay que poner los enlaces TODO-->
            <a href="/php/gruposdetraballo/gruposdetraballo.php" class="w3-hover-none w3-padding-large">Grupos de traballo</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="/php/gruposdetraballo/saudepublica.php">Saúde Pública</a>
                <a href="/php/gruposdetraballo/educacionmedica.php">Educación Médica</a>
                <a href="/php/gruposdetraballo/dereitoshumanosepaz.php">Dereitos humanos e paz</a>
                <a href="/php/gruposdetraballo/saludreproductiva.php">Salud reproductiva, sexualidade e sida</a>
                <a href="/php/gruposdetraballo/Presidenciaevicepresidencia.php">Presidencia e Vicepresidencia</a>
                <a href="/php/gruposdetraballo/Secretariaetesoureria.php">Secretaría e Tesouraría</a>
                <a href="/php/gruposdetraballo/Webmaster.php">Webmáster</a>
            </div>
        </li>
        <li class="w3-hide-small"><a class="w3-padding-large" href="/php/Actividades/Actividades.php">Actividades</a></li>
        <li class="w3-hide-small w3-dropdown-hover">
            <a href="/php/Intercambios/Intercambios.php" class="w3-hover-none w3-padding-large">Intercambios</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="/php/Intercambios/Coñeceonosoequipo.php">Coñece o noso equipo</a>
                <a href="/php/Intercambios/IntercambiosdoAaoZ.php">Intercambios do A ao Z</a>
                <a href="/php/Intercambios/Queresserpessoadecontacto.php">Queres ser Persoa de Contacto?</a>
                <a href="/php/Intercambios/acolleaunestudante.php">Acolle a un estudante de intercambio</a>
                <a href="/php/Intercambios/ElesestiveronenSantiago.php">Eles estiveron en Santiago!</a>
                <a href="/php/Intercambios/Elesforondeintercambio.php">Eles foron de intercambio!</a>
            </div>
        </li>
        <li class="w3-hide-small w3-dropdown-hover">
            <a href="/php/Socios/Socios.php" class="w3-hover-none w3-padding-large">Socios</a>
            <div class="w3-dropdown-content w3-white w3-card-4">
                <a href="/php/Socios/Faitesocio.php">Faite socio!</a>
                <a href="/php/Socios/queresgañarpuntos.php">Queres gañar puntos?</a>
                <a href="/php/Socios/FAQ.php">FAQ</a>
                <a href="/php/Socios/participanasreunions.php">Participa nas reunións</a>
                <a href="/php/Socios/osodososos.php">"O oso dos ósos"</a>
            </div>
        </li>
        <li class="w3-hide-small"><a class="w3-padding-large" href="/php/Contacto/Contacto.php">Contacto</a></li>
        <?php if(!isset($_SESSION["nomUsuario"])){  ?>
        <li id="registrate" class="w3-hide-small"><a class="w3-padding-large" href="/php/registrate.php">Registrate</a></li>
        <li id="registrate" class="w3-hide-small"><a class="w3-padding-large"  href="/php/login.php">Login</a></li>
        <?php }else{?>
            <li id="registrate" class="w3-hide-small"><a class="w3-padding-large" href="/php/logout.php">Logout</a></li>
            <li id="registrate" class="w3-hide-small"><a class="w3-padding-large" href="/php/login.php">Perfil</a></li>
        <?php } ?>
    </ul>
</div>
<!-- navbar phone-->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium" >
    <ul class="w3-navbar w3-left-align w3-black">
        <li class="w3-opennav w3-right">
            <a class="w3-padding-large" href="javascript:void(0)" onclick="navPho('qs')" title="Toggle Navigation Menu"><i class="fa fa-sort-desc"></i></a>
        </li>
        <li style="background-color: #000; color: rgb(204, 204, 204)">
            <a href="/php/Quenessomos/Quenessomos.php" class="w3-padding-large">Quenes somos?</a>
            <div id="qs" class="w3-hide w3-white w3-card-4">
                <a href="/php/Quenessomos/Coñecenos.php">Coñécenos!</a>
                <a href="/php/Quenessomos/consultaoroi.php">Consulta o Reglamento (ROI)</a>
            </div>
        </li>
        <li class="w3-opennav w3-right">
            <a class="w3-padding-large" href="javascript:void(0)" onclick="navPho('gt')" title="Toggle Navigation Menu"><i class="fa fa-sort-desc"></i></a>
        </li>
        <li>
            <a href="/php/gruposdetraballo/gruposdetraballo.php" class="w3-padding-large">Grupos de traballo</a>
            <div id="gt" class="w3-hide w3-white w3-card-4">
                <a href="/php/gruposdetraballo/saudepublica.php">Saúde Pública</a>
                <a href="/php/gruposdetraballo/educacionmedica.php">Educación Médica</a>
                <a href="/php/gruposdetraballo/dereitoshumanosepaz.php">Dereitos humanos e paz</a>
                <a href="/php/gruposdetraballo/saludreproductiva.php">Salud reproductiva, sexualidade e sida</a>
                <a href="/php/gruposdetraballo/Presidenciaevicepresidencia.php">Presidencia e Vicepresidencia</a>
                <a href="/php/gruposdetraballo/Secretariaetesoureria.php">Secretaría e Tesouraría</a>
                <a href="/php/gruposdetraballo/Webmaster.php">Webmáster</a>
            </div>
        </li>
        <li class=""><a class="w3-padding-large" href="/php/Actividades/Actividades.php">Actividades</a></li>
        <li class="w3-opennav w3-right">
            <a class="w3-padding-large" href="javascript:void(0)" onclick="navPho('in')" title="Toggle Navigation Menu"><i class="fa fa-sort-desc"></i></a>
        </li>
        <li>
            <a href="/php/Intercambios/Intercambios.php" class="w3-padding-large">Intercambios</a>
            <div id="in" class="w3-hide w3-white w3-card-4">
                <a href="/php/Quenessomos/Coñecenos.php">Coñece o noso equipo</a>
                <a href="/php/Intercambios/IntercambiosdoAaoZ.php">Intercambios do A ao Z</a>
                <a href="/php/Intercambios/Queresserpessoadecontacto.php">Queres ser Persoa de Contacto?</a>
                <a href="/php/Intercambios/acolleaunestudante.php">Acolle a un estudante de intercambio</a>
                <a href="/php/Intercambios/ElesestiveronenSantiago.php">Eles estiveron en Santiago!</a>
                <a href="/php/Intercambios/Elesforondeintercambio.php">Eles foron de intercambio!</a>
            </div>
        </li>
        <li class="w3-opennav w3-right">
            <a class="w3-padding-large" href="javascript:void(0)" onclick="navPho('so')" title="Toggle Navigation Menu"><i class="fa fa-sort-desc"></i></a>
        </li>
        <li>
            <a href="/php/Socios/Socios.php" class="w3-padding-large">Socios</a>
            <div id="so" class="w3-hide w3-white w3-card-4">
                <a href="/php/Socios/Faitesocio.php">Faite socio!</a>
                <a href="/php/Socios/queresgañarpuntos.php">Queres gañar puntos?</a>
                <a href="/php/Socios/FAQ.php">FAQ</a>
                <a href="/php/Socios/participanasreunions.php">Participa nas reunións</a>
                <a href="/php/Socios/osodososos.php">"O oso dos ósos"</a>
            </div>
        </li>
        <li class=""><a class="w3-padding-large" href="/php/Contacto/Contacto.php">Contacto</a></li>
        <?php if(!isset($_SESSION["nomUsuario"])){  ?>
            <li class=""><a class="w3-padding-large" href="/php/registrate.php">Registrate</a></li>
            <li class=""><a class="w3-padding-large"  href="/php/login.php">Login</a></li>
        <?php }else{?>
            <li class=""><a class="w3-padding-large" href="/php/logout.php">Logout</a></li>
            <li class=""><a class="w3-padding-large" href="/php/login.php">Perfil</a></li>
        <?php } ?>
    </ul>
</div>