<?php  
    if($rango == 0){
?>
        <div id="logo" class="pull-left">
            <a href="#hero"><img src="public/img/logo.png" alt="" title="" /></img></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
               <li><a href="">Inicio</a></li>
               <li><a href="#login">Iniciar Sesion</a></li>
            </ul>
        </nav>
<?php }
    else if($rango == 1) {
?>
        <div id="logo" class="pull-left">
          <a href="#hero"><img src="public/img/logo.png" alt="" title="" /></img></a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
             <li><a href="index.php">Inicio</a></li>
             <li><a href=""><?= $nombre ?></a></li>
             <li><a href="">Configuración</a></li>
             <li><a href="REGISTROS/logout.php">Salir</a></li>
          </ul>
        </nav>
<?php }
    else if($rango == 2) {
?>
        <div id="logo" class="pull-left">
          <a href="#hero"><img src="public/img/logo.png" alt="" title="" /></img></a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
             <li><a href="index.php">Inicio</a></li>
             <li><a href="pulseras.php">Mis Pulseras</a></li>
             <li><a href=""><?= $nombre ?></a></li>
             <li><a href="">Configuración</a></li>
             <li><a href="REGISTROS/logout.php">Salir</a></li>
          </ul>
        </nav>
<?php } else if($rango == 3) {
?>
        <div id="logo" class="pull-left">
          <a href="#hero"><img src="public/img/logo.png" alt="" title="" /></img></a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
             <li><a href="index.php">Inicio</a></li>
             <li><a href="misEventos.php">Mis Eventos</a></li>
             <li><a href="">Usuarios</a></li>
             <li><a href=""><?= $nombre ?></a></li>
             <li><a href="">Configuración</a></li>
             <li><a href="REGISTROS/logout.php">Salir</a></li>
          </ul>
        </nav>
<?php } else if($rango == 4) {
?>
        <div id="logo" class="pull-left">
          <a href="#hero"><img src="public/img/logo.png" alt="" title="" /></img></a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
             <li><a href="index.php">Inicio</a></li>
             <li><a href="misEventos.php"> Mis Eventos</a></li>
             <li><a href="">Usuarios</a></li>
             <li><a href=""><?= $nombre ?></a></li>
             <li><a href="">Configuración</a></li>
             <li><a href="REGISTROS/logout.php">Salir</a></li>
          </ul>
        </nav>
<?php }?>