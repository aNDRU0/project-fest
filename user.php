<?php
   session_start();
   if(!$_SESSION['id_usuario']) header("Location: ./index.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="keywords">
   <meta content="" name="description">

   <!-- Icono -->
   <link href="favicon.ico" rel="shortcut icon">

   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
   <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

   <!-- Main CSS -->
   <link href="public/css/style.css" rel="stylesheet">
</head>
<body>

   <!-- NAVBAR -->
   <?php include (__DIR__ . '/public/views/header.php'); ?>

   <!-- MAIN -->
   <div class="boddy">
      <!-- Contenido -->
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <h6 class="titSmall">lo más popular</h6>

               <div class="col-md-4">
                  <div class="tarjeta">
                     <img src="http://via.placeholder.com/800x600" alt="" class="img-responsive img-rounded">

                     <a href=""><h4 class="centered" style="font-weight: 600;">EVENTO</h4></a><br>

                     <b><p>12/12/2017</p></b>

                     <p>Barezzito</p>

                     <button class="centered btn-get-started btn-md">Ver más</button>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="tarjeta">
                     <img src="http://via.placeholder.com/800x600" alt="" class="img-responsive img-rounded">

                     <a href=""><h4 class="centered" style="font-weight: 600;">EVENTO</h4></a><br>

                     <b><p>12/12/2017</p></b>

                     <p>Barezzito</p>

                     <button class="centered btn-get-started btn-md">Ver más</button>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="tarjeta">
                     <img src="http://via.placeholder.com/800x600" alt="" class="img-responsive img-rounded">

                     <a href=""><h4 class="centered" style="font-weight: 600;">EVENTO</h4></a><br>

                     <b><p>12/12/2017</p></b>

                     <p>Barezzito</p>

                     <button class="centered btn-get-started btn-md">Ver más</button>
                  </div>
               </div>

               <!-- LO MÁS NUEVO -->
               <h6 class="titSmall">LO MÁS NUEVO</h6>
               <div class="col-sm-12">
                  <div class="row">
                     <?php
                        require_once(__DIR__ . '/BASEDATOS/Conexion.php');
                        require_once(__DIR__ . '/BASEDATOS/Eventos.php');
                        $eventos = new Eventos();
                        $eventos->getEventos(0, 0);
                      ?>
                  </div>
               </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-3">
               <div class="col-md-12">
                  <div class="tarjeta">
                     <div class="input-group stylish-input-group">
                        <input type="text" class="form-control"  placeholder="Buscar..." >
                        <span class="input-group-addon">
                           <button type="submit">
                              <span class="glyphicon glyphicon-search"></span>
                           </button>
                        </span>
                     </div>
                  </div>
               </div>

               <div class="col-md-12">
                  <div class="tarjetaAct">
                     <h5 class="centered">ACTUALIZACIONES</h5>
                     <hr class="Tdivider">

                     <div class="comments-list">
                       <div class="media">
                           <p class="pull-right"><small>Hace 5 minutos</small></p>
                            <a class="media-left" href="#">
                            </a>
                            <div class="media-body">

                              <h4 class="media-heading user_name">Organizador #1</h4>
                              <p>sdf fecha de <a href="#">Project Fest</a> hasta: 12/12/2017</p>
                            </div>
                          </div>
                       <div class="media">
                           <p class="pull-right"><small>Hace 10 minutos</small></p>
                            <a class="media-left" href="#">
                            </a>
                            <div class="media-body">

                              <h4 class="media-heading user_name">Organizador #2</h4>
                              <p>Cambió lugar de <a href="">Evento</a> a Barezzito</p>
                            </div>
                          </div>
                       <div class="media">
                           <p class="pull-right"><small>Hace 2 días</small></p>
                            <a class="media-left" href="#">
                            </a>
                            <div class="media-body">

                              <h4 class="media-heading user_name">Organizador #3</h4>
                              <p>Modificó costo de cover a $100 del e
                              vento <a href="#">Evento</a></p>
                            </div>
                          </div>
                       <div class="media">
                           <p class="pull-right"><small>Hace 5 días</small></p>
                            <a class="media-left" href="#">
                            </a>
                            <div class="media-body">

                              <h4 class="media-heading user_name">Organizador #4</h4>
                              <p>No hizo nada...</p>
                            </div>
                          </div>
                          <div class="media">
                           <p class="pull-right"><small>Hace 5 días</small></p>
                            <a class="media-left" href="#">
                            </a>
                            <div class="media-body">

                              <h4 class="media-heading user_name">Organizador #4</h4>
                              <p>No hizo nada...</p>
                            </div>
                          </div>

                      </div>
                  </div>
               </div>

               <div class="col-md-12">
                  <div class="tarjeta">
                     <h5 class="centered">ORGANIZADORES</h5>
                     <hr class="Tdivider">

                     <div class="comments-list">
                        <div class="media">
                           <div class="media-body">
                              <h4 class="media-heading user_name">Organizador #1</h4>
                              <a href="#">Project Fest</a>
                           </div>
                        </div>
                        <div class="media">
                           <div class="media-body">
                              <h4 class="media-heading user_name">Organizador #2</h4>
                              <a href="#">Project Fest</a>
                           </div>
                        </div>
                        <div class="media">
                           <div class="media-body">
                              <h4 class="media-heading user_name">Organizador #3</h4>
                              <a href="#">Project Fest</a>
                           </div>
                        </div>
                        <div class="media">
                           <div class="media-body">
                              <h4 class="media-heading user_name">Organizador #4</h4>
                              <a href="#">Project Fest</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <!-- FOOTER -->
   <?php include(__DIR__ . '/public/views/footer.html') ?>

   <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
   </div>

   <!-- JS -->
   <script src="public/lib/jquery/jquery.min.js"></script>
   <script src="public/lib/bootstrap/js/bootstrap.min.js"></script>
   <script src="public/lib/superfish/hoverIntent.js"></script>
   <script src="public/lib/superfish/superfish.min.js"></script>
   <script src="public/lib/morphext/morphext.min.js"></script>
   <script src="public/lib/wow/wow.min.js"></script>
   <script src="public/lib/stickyjs/sticky.js"></script>
   <script src="public/lib/easing/easing.js"></script>
   <script src="public/js/custom.js"></script>
   <script src="public/js/jquery.js"></script>
   <script src="public/js/main.js"></script>
</body>
</html>
