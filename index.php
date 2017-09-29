<?php 
   session_start();
   if(isset($_SESSION['id_usuario'])) header('Location: ./user.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Project Fest</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="keywords">
   <meta content="" name="description">
  
   <!-- Icono -->
   <link href="favicon.ico" rel="shortcut icon">

   <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,700,700i" rel="stylesheet"> 
   <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
   <!-- Main CSS -->
   <link href="public/css/style.css" rel="stylesheet">
   
    <!-- Reproducción de audio -->
   <script type="text/javascript">
      function reproducir(){
         document.getElementById('audio').play();
         document.getElementById('pl').className="botonhide";
         document.getElementById('pa').className="botonesrp";
      }
      function pausar(){
          document.getElementById('audio').pause();
          document.getElementById('pa').className="botonhide";
          document.getElementById('pl').className="botonesrp";
      }
    </script>
</head>

<body>
   <div id="preloader"></div>
  
   <!-- LOGO -->
   <section id="hero">
      <div class="video-foreground">
         <video autoplay="true" loop="true" muted>
	 <source src="public/vid/bg.mp4">
	 <source src="public/vid/bg.m4v">
	 <source src="public/vid/bg.webm">
	 </video>
      </div>
      <div class="hero-container">
         <div class="wow fadeIn">
            <div class="hero-logo">
               <!-- logo -->
               <img class="logoH" src="public/img/logo.png" alt="ProjectFest">
            </div>
            
           <!--Audio-->
           <div class="audio">
               <audio hidden="true" src="public/vid/song.mp3" controls id="audio" autoplay></audio>
               <a href="#" onclick="reproducir()"><img id="pl" class="botonhide" src="public/img/play.png" alt="" ></a>
               <a href="#" Onclick="pausar()"><img id="pa" class="botonesrp" src="public/img/pause.png" alt=""></a>
           </div>
           
            <h1>Bienvenido a Project Fest</h1>
            <h2>Registrate y obtén acceso a todas las fiestas del momento</h2>
            <div class="actions">
               <a href="#login" class="btn-get-started">Iniciar Sesión</a>
            </div>
         </div>
      </div>
   </section>
  
   <!-- NAVBAR -->
   <?php include(__DIR__ . '/public/views/header.php') ?>
    
   <!-- LOGIN -->
   <!-- Titulo -->
   <section id="login">
      <div class="container wow fadeInUp">
         <div class="row">
            <div class="col-md-12">
               <h3 class="section-title">INGRESAR</h3>
               <div class="section-title-divider"></div>
            </div>
         </div>
      </div>

      <!-- Contenido -->
      <div class="container login-container wow fadeInUp">
         <div class="row">
            <!-- login -->
            <div class="col-sm-12 col-md-6">
               <h3 class="section-description">Iniciar Sesión</h3>
               <form role="login" name="login" action="" method="post" id="formlg">
                  <div class="alert alert-danger errordatos errorInicio" role="alert"><i class="fa fa-times-rectangle fa-lg"></i>  Usuario y/o contraseña incorrectos</div>
                  <div class="form-group">

                     <input type="text" name="dato" placeholder="Nombre de usuario o correo" class="form-control" required autofocus/>
                     <span class="glyphicon glyphicon-user"></span>
                  </div>
            
                  <div class="form-group">
                     <input type="password" name="password" placeholder="Contraseña" required class="form-control"/>
                     <span class="glyphicon glyphicon-lock"></span>
                  </div>
                  <div class="actions">
                     <input type="submit" name="iniciar" class="btn-get-started btn-lg botonlg" value="INGRESAR">
                  </div>
               </form>
            </div>

            <!-- registro -->
            <div class="col-sm-12 col-md-6">
               <h3 class="section-description">Registrar Nueva Cuenta</h3>
               <form role="registro" name="registro" action="" method="post" id="formReg">
                  <div class="alert alert-danger errordatos errorRegistro" role="alert"><i class="fa fa-times-rectangle fa-lg"></i>El correo y/o usuario ingresado ya existe</div>
                  <div class="alert alert-danger errordatos errorRegistroIncompleto" role="alert"><i class="fa fa-times-rectangle fa-lg"></i>Por favor ingresa todos los datos</div>
                  <div class="form-group">
                     <input type="text" name="usuario" placeholder="Nombre de usuario" class="form-control" required autofocus/>
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" placeholder="Contraseña" required class="form-control"/>
                  </div>
                  <div class="form-group">
                     <input type="text" name="nombre" placeholder="Nombre completo" class="form-control" required autofocus/>
                  </div>
                  <div class="form-group">
                     <input type="email" name="correo" placeholder="Correo electrónico" class="form-control" required autofocus/>
                  </div>
                  <div class="actions">
                     <button type="submit" name="registrar" class="btn-get-started btn-lg botonReg">REGISTRARSE</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
 
   <!-- FOOTER -->
   <?php include(__DIR__ . '/public/views/footer.html') ?>
  
   <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
 <!-- JS -->
   <script src="public/lib/jquery/jquery.min.js"></script>
   <script src="public/lib/bootstrap/js/bootstrap.min.js"></script>
   <!--<script src="public/lib/superfish/hoverIntent.js"></script>-->
   <script src="public/lib/superfish/superfish.min.js"></script>
   <script src="public/lib/morphext/morphext.min.js"></script>
   <script src="public/lib/wow/wow.min.js"></script>
   <script src="public/lib/stickyjs/sticky.js"></script>
   <script src="public/lib/easing/easing.js"></script>
   <script src="public/js/custom.js"></script>
   <script src="public/js/main.js"></script>
</body>
</html>