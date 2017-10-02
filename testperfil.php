<?php
session_start();

if(!isset($_SESSION['id_usuario'])) header("Location:index.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="keywords">
   <meta content="" name="description">
  
   <!-- Icono -->
   <link href="favicon.ico" rel="shortcut icon">

   <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,700,700i" rel="stylesheet"> 
   <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
   <!-- Main CSS -->
   <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    
   <!-- NAVBAR -->
   <?php include 'public/views/header.php'; ?>
  
   <!-- MAIN -->
   <div class="boddy">
      <!-- Contenido -->
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <!-- PERFIL INFO -->
               <div class="tarjeta row"> 
                  <div class="col-md-4" style="text-align:center;">
                     <img src="http://via.placeholder.com/200x200" class="img-circle" style="border:2px solid #f1f1f1;" width="200px">
                  </div>
                  <div class="col-md-8">
                     <h3>Nombre Apellido</h3> <br><br>

                     <h4 style="color: #BABABA;">Rol - Organizador y RP</h4>
                     <h4 style="color: #BABABA;">Teléfono - 6691656565</h4>
                     <h4 style="color: #BABABA;">Redes Sociales - <i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="fa fa-instagram"></i></h4>
                  </div>
               </div>

               <div class="col-md-12">
                  <div class="tarjeta">
                     <h3>Organizador de</h3>

                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ea tempore quo dolorum enim. Cum velit eveniet facere, inventore omnis. Dolor harum tenetur autem ducimus minima possimus a vitae. Fuga.</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque in eaque enim aperiam voluptatibus dicta mollitia, doloribus magnam quas asperiores eos, nostrum fugit labore perspiciatis omnis, optio eligendi ipsum cum.</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit consequuntur rerum, ipsa odit vel! Vero quasi earum, reprehenderit deleniti quaerat, facere ullam ratione cum, nam numquam illo hic! Molestiae, perspiciatis.</p>
                  </div>
               </div>
            </div> 

            <!-- SIDEBAR -->
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
   
 
   <!-- FOOTER -->
   <footer id="footer">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="copyright">
                  &copy; Copyright <strong>Project Fest</strong>. <br> Todos los derechos reservados.
               </div>
            </div>
         </div>
      </div>
   </footer>
  
   <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>
   <!-- JS -->
   <script src="lib/jquery/jquery.min.js"></script>
   <script src="lib/bootstrap/js/bootstrap.min.js"></script>
   <script src="lib/superfish/hoverIntent.js"></script>
   <script src="lib/superfish/superfish.min.js"></script>
   <script src="lib/morphext/morphext.min.js"></script>
   <script src="lib/wow/wow.min.js"></script>
   <script src="lib/stickyjs/sticky.js"></script>
   <script src="lib/easing/easing.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/jquery.js"></script>
   <script src="js/main.js"></script>
</body>
</html>