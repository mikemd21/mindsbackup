<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mind's Backup</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/lightbox2/css/lightbox.css">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontastic.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.sea.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
 </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="./" class="navbar-brand"><img src="<?php echo base_url();?>assets/img/logo.png" alt="" class="img-fluid"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menú<i class="fa fa-bars ml-2"></i></button>
        </div>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <!-- Link-->
              <li class="nav-item"> <a href="<?php echo base_url();?>" class="nav-link active">Inicio</a></li>
              <!-- Link-->

              <li class="nav-item"> <a href="#register" data-toggle="modal" data-target="#register"class="nav-link">Registrarse</a></li>



            </ul><a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Iniciar Sesión </a>
          </div>
        </div>
      </nav>
    </header>
    <!-- Login Modal-->
    <div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body p-4 p-lg-5">
            <form action="<?php echo base_url();?>clogin/ingresar" method="POST" class="login-form text-left" id="lform">

              <div class="form-group mb-4">
                <label>Correo Electrónico</label>
                <input type="email" name="txtEmail" placeholder="ejemplo@ejemplo.com" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Contraseña</label>
                <input type="password" name="txtPassword" placeholder="Min 8 caracteres" class="form-control">
              </div>
              <div class="form-group">
                <!--<input type="submit" value="Iniciar Sesión" class="btn btn-primary">-->
                <button type="submit" class="btn btn-primary">Inicia Sesión</button>
              </div>
              <span id="alert_action"></span>
            </form>
            <?php echo $mensaje;?>
          </div>
        </div>
      </div>
    </div>


    <!--Register Modal-->
    <div id="register" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
      <div class="modal-header border-bottom-0">
      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body p-4 p-lg-5">
        <form action="<?php echo base_url();?>cpersona/guardar" method="POST" class="contact-form text-left">
              <div class="form-group mb-4">
                <label>Nombre.<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="txtNombre" placeholder="Nombre" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Primer Apellido.<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="txtApPaterno" placeholder="Primer Apellido" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Segundo Apellido.<sup class="text-primary">&#10033;</sup></label>
                <input type="text" name="txtApMaterno" placeholder="Segundo Apellido" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Email.<sup class="text-primary">&#10033;</sup></label>
                <input type="email" name="txtEmail" placeholder="name@email..com" class="form-control">
              </div>
              <div class="form-group mb-4">
                <label>Contraseña.<sup class="text-primary">&#10033;</sup></label>
                <input type="password" name="txtClave" placeholder="Máximo 8 caracteres" class="form-control">
              </div>
              <div class="form-group">
                <button type="submit"class="btn btn-primary">Registrarse</button>
              </div>
            </form>
      </div>
    </div>
  </div>
  </div>
