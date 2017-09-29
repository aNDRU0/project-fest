<?php
	require_once(__DIR__ . '/Conexion.php');
	class Eventos {
		public $conexion;
		function __construct() {
			$this->conexion = new Conexion();
			$this->conexion = $this->conexion->conexionBD;
		}
		function setUsuariosEventos($id_usuario, $id_evento) {
			$sql = "INSERT INTO usuarios_eventos (id_usuario, id_evento) VALUES (?, ?)";
			$resultado = $this->conexion->prepare($sql);
			$resultado->bind_param('ii', $id_usuario, $id_evento);
			$resultado->execute();
			$resultado->free_result();
		}
		function setEventos($id_usuario, $nombre, $calle, $colonia, $date, $descripcion, $cover, $url) {
			$sql = "INSERT INTO eventos (nombre, calle, colonia, date, descripcion, cover, urlimg) VALUES (?, ?, ?, ?, ?, ?, ?)";
			$resultado = $this->conexion->prepare($sql);
			$resultado->bind_param('sssssis', $nombre, $calle, $colonia, $date, $descripcion, $cover, $url);
			$resultado->execute();
			$resultado->free_result();
			$id_evento = $this->conexion->insert_id;
			$this->setUsuariosEventos($id_usuario, $id_evento);
		}
		function queryAll() {
			return $this->conexion->query("SELECT * FROM eventos");
		}
		function getEventos($id, $i) {
			$resultado = $this->queryAll();
			if($resultado != NULL) {
			    $resultado->data_seek($i);
			    $result = $resultado->fetch_array(MYSQLI_ASSOC);
		?>
		<div class="col-sm-12">
			<div class="tarjeta full">
				<div class="infoIzq">
					<div class="imgPreview">
						<img src="<?= $result['urlimg']; ?>" alt="" class="imgf img-responsive img-rounded centered">
					</div>
					<div class="infoPreview">
						<a href=""><h4 class="titulo-f"><?= $result['nombre'] ?></h4></a><br>

						<p><?= $result['colonia'] ?></p>
	               <p><?= $result['date'] ?></p><br>

						<button class="centered btn-get-started">Ver más</button>
					</div>
				</div>
				<div class="infoDe">
					<h4 class="title centered">Organizadores</h4>
					<p>- Organizador 1</p>
               <p>- Organizador 2</p>
              	<p>- Organizador 3</p>
              	<p>- Organizador 4</p>
              	<p>- Organizador 5</p>
				</div>
			</div>
		</div>
			<?php
			    if($resultado->data_seek($i + 1) != NULL) $this->getEventos($id + 1, $i + 1);
			}
			$resultado->free_result();
		}
	}
?>
