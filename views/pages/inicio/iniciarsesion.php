<?php 
$conexion=mysqli_connect("localhost","root","snopdog","bd_usuarios_sistema") or die("No se puede entablar conexion con el servidor de la base de datos");


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Iniciar sesión</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
  .letra{
    font-size: smaller;
  }
  .register-box-body{
    background: #d2d6de;
    opacity: 0.9;
  }
  body{
     background-position: center center;    
    background-repeat: no-repeat;
    background-attachment: fixed;
     background-size: cover;
  }
  .scroll{
 overflow:hidden;
     
  }
  ::-webkit-scrollbar {
    display: none;
}
</style>
<body background="../../../../SistemaDeConsultaCiudadana/imagenes/fondo.png" class="">
<!--<img src="../../../../SistemaDeConsultaCiudadana/imagenes/fondo.jpg">-->
<div class="register-box">
  <div class="register-logo">
    <a><b> Gestion Ciudadana</b></a>
    <br>
    <a class="letra">Administrador</a>
  </div>

  <div class="register-box-body">
    <b><p class="login-box-msg">INICIAR SESIÓN</p></b>

    <form action="validador.php" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="corr" class="form-control" placeholder="Correo electronico">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="con" class="form-control" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
          <a href="registro.php">Registrar un nuevo usuario</a>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="boton">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
