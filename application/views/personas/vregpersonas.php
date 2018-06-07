<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro de personas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body background="<?php base_url();?>assets/fondo.jpg">
  		<div class="login-logo">
    		<a href="../../index2.html"><b>Loign</b>Express</a>
 		 </div>
 	 <!-- /.login-logo -->
	<div class="col-md-offset-3 col-md-6">
	<div class="box box-info">
	    <div class="box-header with-border">
	    	<h3 class="box-title">Registrar persona</h3>
	    </div>
			<form class="form-horizontal" action="<?php echo base_url();?>cpersona/guardar" method="POST">
		        <div class="box-body">
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Numero de identificacion</label>
		                  <div class="col-sm-10">
		                    <input type="txt" class="form-control" placeholder="Numero de identificaión" name="txtDNI" maxlength="10" required="">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
		                  <div class="col-sm-10">
		                    <input type="txt" class="form-control" name="txtNombre" placeholder="Nombre">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Primer apellido</label>
		                  <div class="col-sm-10">
		                    <input type="txt" class="form-control" placeholder="Primer Apellido" name="txtApPaterno">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Segundo apellido</label>
		                  <div class="col-sm-10">
		                    <input type="txt" class="form-control" placeholder="Segundo Apellido" name="txtApMaterno">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha de nacimiento</label>
		                  <div class="col-sm-10">
		                    <input type="date" class="form-control"  placeholder="Fecha de naciemiento" name="datFecNac">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Ciudad Origen</label>
		                  <div class="col-sm-10">
		                    <select id="cboCiudad" class="form-control">
		                    	<option value="">-Elija-</option>
		                    </select>
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

		                  <div class="col-sm-10">
		                    <input type="email" class="form-control"  name="txtEmail" placeholder="Email">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail" class="col-sm-2 control-label">Datos Usuario</label>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
		                  <div class="col-sm-10">
		                    <input type="txt" class="form-control" placeholder="Usuario" name="txtUsuario">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Contraseña</label>
		                  <div class="col-sm-10">
		                    <input type="password" class="form-control" placeholder="Contraseña" name="txtClave">
		                  </div>
		                </div>
		        </div>
		              <!-- /.box-body -->
		              <div class="box-footer">
		                <input type="submit" class="btn btn-info pull-right" value="Guardar" >
		                <a href="<?php echo base_url();?>cpersona/eliminarPersona" class="btn btn-danger">Eliminar Usuarios Y personas</a>
						<a href="<?php echo base_url();?>" class="btn btn-warning">Ingresar</a>
		              </div>
		              <!-- /.box-footer -->
		    </form>
		</div>
	</div>
</body>


<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script type="text/javascript">
	var baseurl = "<?php echo base_url();?>"</script>
</body>
<script src="<?php echo base_url();?>js/persona.js" ></script>
</html>





