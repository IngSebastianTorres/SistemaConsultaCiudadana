<?php
$conexion=mysqli_connect("localhost","root","snopdog","bd_usuarios_sistema") or die("No se puede entablar conexion con el servidor de la base de datos");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro</title>
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
    font-size: bolder;
  }
  .register-box-body{
    background: white;
    opacity: 0.8;
    margin-left: -20px;
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
  .register-box{
    margin-top: 140px;
  }
</style>
<body background="../../../../SistemaDeConsultaCiudadana/imagenes/fondo.png" class="">
<!--<img src="../../../../SistemaDeConsultaCiudadana/imagenes/fondo.jpg">-->
<div class="register-box">
  <div class="register-logo">
    <a><b> Registro realizado correctamente</b></a>
    <br>
    
  </div>
          <?php
          $identification=$_POST['id'];
          $nombre=$_POST['nom'];
          $lastname=$_POST['ape'];
          $correo=$_POST['corr'];
          $contraseña=$_POST['cont'];
          
       $sql = "INSERT INTO ADMINISTRADOR VALUES ('$identification','$nombre', '$lastname', '$correo', '$contraseña','1')";

          if (mysqli_query($conexion, $sql)) {
              echo "";
          } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
          }

          mysqli_close($conexion);          


          ?>
  <div class="register-box-body">
    
  <center><a href="iniciarsesion.php" class="letra">INICIAR SESIÓN </a></center>
   

   
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
