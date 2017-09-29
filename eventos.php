<?php
	session_start();
	require_once(__DIR__ . '/../BASEDATOS/Eventos.php');
	$eventos = new Eventos();
	$nombre = $_POST['nombre'];
	$calle = $_POST['calle'];
	$colonia = $_POST['colonia'];
	$date = date_format(date_create($_POST['date']), 'Y-m-d H:i:s');;
	$cover = $_POST['cover'];
	$urlImg = '';
	$descripcion = $_POST['descripcion'];
	if($_FILES['img']['type'] == 'image/jpg' || $_FILES['img']['type'] == 'image/png' || $_FILES['img']['type'] == 'image/jpeg') {
		$destinoImg = $_SERVER['DOCUMENT_ROOT'] . '/ProjectFest/img_eventos/';
		move_uploaded_file($_FILES['img']['tmp_name'], $destinoImg . $_FILES['img']['name']);
		$urlImg = "img_eventos/" . $_FILES['img']['name'];
	}

	if($nombre != NULL && $calle != NULL && $colonia != NULL && $date != NULL){
    
    $eventos->setEventos($_SESSION['id_usuario'], $nombre, $calle, $colonia, $date, $descripcion, $cover, $urlImg);
	echo json_encode(array('error' => false));
    }
    else {
        echo json_encode(array('error' => true));
    }
?>