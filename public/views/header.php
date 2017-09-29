<?php
    require_once(__DIR__ . '/../../BASEDATOS/Usuarios.php');
    $conexion = new Usuarios();
    $rango = (isset($_SESSION['id_usuario'])) ? $conexion->getDato($_SESSION['id_usuario'], 'rango') :  0;
    $nombre = (isset($_SESSION['id_usuario'])) ? $conexion->getDato($_SESSION['id_usuario'], 'usuario') :  NULL;
?>
<header id="header">
    <div class="container">
		<?php
			include('public/views/subheaders.php');
		?>
    </div>
</header>