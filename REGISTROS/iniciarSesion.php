<?php
    //require(__DIR__ . '../BASEDATOS/config.php');
    require(__DIR__ . '/../BASEDATOS/Usuarios.php');

    $conexion = new Usuarios();
    $dato = $_POST['dato'];
    $password = $_POST['password'];
    $tipo = (stristr($dato, '@')) ? 'correo' : 'usuario';
    $pass = $conexion->getRegistros($dato, $tipo)['password'];
    if(password_verify($password, $pass)) {
        session_start();
        $_SESSION['id_usuario'] = $conexion->getID($dato, $tipo);
        echo json_encode(array('error' => false));   
    }
    else { echo json_encode(array('error' => true)); }
?>
