<?php
session_start();
if(!isset($_SESSION['id_usuario'])) {
    if($_SESSION['tipo_usuario']==4){
        header("Location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mis Pulseras</title>
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
    <?php include('public/views/header.php') ?>
    <div class="boddy">
        <div class="container wow">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="section-title">MIS PULSERAS</h4>
                    <div class="section-title-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="paneledit">
                        <div class="eventitle">
                            <button class="boton-titulo" type="button" data-toggle="collapse" data-target="#newpul" aria-expanded="false" aria-controls="numpul">Agregar Pulseras <span><i class="glyphicon glyphicon-plus"></i></span></button>
                        </div>
                        <div class="evenbody collapse" id="newpul">
                            <div class="well panelcollapse">
                                <form action="#" role="login" name="login" method="post" id="addpul">
                                    <div class="alert alert-danger errordatos errorInicio"><i class="fa fa-times-rectangle fa-lg"></i>Por favor revisa de nuevo tus datos</div>
                                    <div class="form-group">
                                        <select name="idevent" id="idevento">
                                           <option value="">SELECCIONA EL EVENTO PARA TUS PULSERAS</option>
                                            <option value="evento1">PROJECT FEST</option>
                                            <option value="evento2">WEEKEND</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Número de Pulseras" name="num" class="form-control" required autofocus>
                                        <span class="glyphicon glyphicon-tag"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Valor" name="precio" class="form-control" required autofocus>
                                        <span class="glyphicon glyphicon-usd"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Número de Teléfono" name="cel" class="form-control" required autofocus>
                                        <span class="glyphicon glyphicon-phone"></span>
                                    </div>
                                                                    
                                    <div class="submitinput">
                                        <input type="submit" value="AGREGAR PULSERAS">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="paneledit">
                        <div class="eventitle">
                            <button class="boton-titulo" type="button" data-toggle="collapse" data-target="#newrp" aria-expanded="false" aria-controls="newrp">Agregar Repartidor <span><i class="glyphicon glyphicon-plus"></i></span></button>
                        </div>
                        <div class="evenbody collapse" id="newrp">
                            <div class="well panelcollapse">
                                <form action="#" role="login" name="login" method="post" id="addpul">
                                    <div class="alert alert-danger errordatos errorInicio"><i class="fa fa-times-rectangle fa-lg"></i>Por favor revisa de nuevo tus datos</div>
                                        <div class="form-group">
                                        <select name="idevent" id="idevento">
                                           <option value="">SELECCIONA EL EVENTO PARA TUS PULSERAS</option>
                                            <option value="evento1">PROJECT FEST</option>
                                            <option value="evento2">WEEKEND</option>
                                        </select>
                                    </div> 
                                       
                                       <div class="form-group">
                                        <input type="text" placeholder="Nombre del Repartidor" name="num" class="form-control" required autofocus>
                                        <span class="glyphicon glyphicon-user"></span>
                                    </div>
                                   
                                                                   
                                    <div class="submitinput">
                                        <input type="submit" value="AGREGAR PULSERAS">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row segundafila">
                <div class="col-md-12 col-sm-12 contenidocollapse">
                    <div class="paneleditev">
                        <div class="eventitle">
                            <div class="textitle">
                                <a href="#">
                                    <h3 class="section-description-left">Editar Pulseras</h3>
                            </div>
                                <div class="icontitle">
                                    <span class="glyphicon glyphicon-edit"></span></a>
                                </div>
                        </div>
                        <div class="edicionevent">
                            <div class="eventsubtitle">
                                <button class="boton-titulo" type="button" data-toggle="collapse" data-target="#editpul" aria-expanded="false" aria-controls="editpul">100 PULSERAS -- $100 PESOS C/U -- 6692155017 <span><i class="glyphicon glyphicon-edit"></i></span></button>
                            </div>
                            <div class="evenbody collapse" id="editpul">
                                <div class="well panelcollapse">
                                    <form action="#" name="login" method="post" id="editpulseras">
                                        <div class="row bodyedit">
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" placeholder="Número de Pulseras" name="num" class="form-control" required autofocus>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <input type="text" placeholder="Precio" name="precio" class="form-control" required autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                 <input type="text" placeholder="Número de Teléfono" name="celular" class="form-control" required autofocus>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                  <div class="col-md-6">
                                      <div class="submitbutton">
                                          <button>CANCELAR EDICIÓN</button>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="submitinput">
                                          <input type="submit" value="FINALIZAR EDICION">
                                      </div>
                                  </div>
                              </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('public/views/footer.html') ?>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/custom.js"></script>
    <script src="public/js/main.js"></script>
    <script src="public/lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>