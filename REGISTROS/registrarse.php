<?php
    //require(__DIR__ . '../BASEDATOS/config.php');
    require(__DIR__ . '/../BASEDATOS/Usuarios.php');

    $conexion = new Usuarios();
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
        
    if($nombre != NULL && $usuario != NULL && $correo != NULL && $password != NULL) {
        if($conexion->getRegistros($correo, 'correo')['tipo'] == $correo || $conexion->getRegistros($usuario, 'usuario')['tipo'] == $usuario) echo json_encode(array('error' => true));
        else {
            $conexion->setRegistros($nombre, $usuario, $correo, $password);
            $id = $conexion->getID($correo, 'correo');
            session_start();
            $_SESSION['id_usuario'] = $id;
            echo json_encode(array('error' => false));
        }
    }
    else {
        echo json_encode(array('error' => true, 'incompleto' => true));
    }
?>