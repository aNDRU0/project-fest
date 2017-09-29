<?php
	require_once(__DIR__ . '/Conexion.php');
	class Usuarios {
		public $conexion;
		function __construct() {
			$this->conexion = new Conexion();
            $this->conexion = $this->conexion->conexionBD;
		}
		 function getRegistros($dato, $tipo) {
            $sql = "SELECT password, " . $tipo . " FROM usuarios WHERE " . $tipo .  " = ?";
            $resultado = $this->conexion->prepare($sql);
            $resultado->bind_param('s', $dato);
            $resultado->execute();
            $resultado->bind_result($fila['password'], $fila['tipo']);
            $resultado->fetch();
            $resultado->free_result();
            return $fila;
        }
        function setRegistros($nombre, $usuario, $correo, $password) {
            $hsPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (nombre, usuario, correo, password, rango) VALUES (?, ?, ?, ?, 1)";
            $resultado = $this->conexion->prepare($sql);
            $resultado->bind_param('ssss', $nombre, $usuario, $correo, $hsPassword);
            $resultado->execute();
            $resultado->free_result();
        }
        function getID($dato, $tipo) {
            $sql = "SELECT id FROM usuarios WHERE " . $tipo . " = ?";
            $resultado = $this->conexion->prepare($sql);
            $resultado->bind_param('s', $dato);
            $resultado->execute();
            $resultado->bind_result($id);
            $resultado->fetch();
            $resultado->free_result();
            return $id;
        }
        function getDato($id, $dato) {
            $sql = "SELECT ". $dato ." FROM usuarios WHERE id = ?";
            $resultado = $this->conexion->prepare($sql);
            $resultado->bind_param('s', $id);
            $resultado->execute();
            $resultado->bind_result($result);
            $resultado->fetch();
            $resultado->free_result();
            return $result;
        } 
	}
?>