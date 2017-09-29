<?php
    require_once('config.php');
    class Conexion {
        public $conexionBD;
        function __construct() {
            $this->conexionBD = new mysqli(SERVER, USUARIO, PASSWORD, BASEDATOS);
            if($this->conexionBD->connect_errno) {
                die('ERROR AL CREAR LA CONEXIÓN CON LA BASE DE DATOS: ' . $this->conexionBD->connect_errno());
            }
            $this->conexionBD->set_charset(CHARSET);
        }
    }
?>