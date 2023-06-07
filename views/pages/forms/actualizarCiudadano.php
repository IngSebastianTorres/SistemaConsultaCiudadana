<?php
$conexion=mysqli_connect("localhost","root","snopdog","bd_registraduria") or die("No se puede entablar conexion con el servidor de la base de datos");

//VALIDADOR INTEGRIDAD SESION INI
$conexion2=mysqli_connect("localhost","root","snopdog","bd_usuarios_sistema") or die("No se puede entablar conexion con el servidor de la base de datos");
session_start();
if(isset($_SESSION["CORREO_ELECTRONICO"])){
  echo"";
}
else{
  echo '<script>window.location="../../pages/inicio/iniciarsesion.php";</script>';
}
$perfil=$_SESSION["CORREO_ELECTRONICO"]; 
//VALIDADOR INTEGRIDAD SESION FIN
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/SistemaDeConsultaCiudadana" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Registration</b> Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
         
          <!-- Tasks Menu -->
          
              
          <!-- User Account Menu -->
          
          <!-- Control Sidebar Toggle Button -->
           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-gears"></i>
              
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               

                <p>
                  Administrador                 
                </p>
                <div>
                  <img src="../../../../SistemaDeConsultaCiudadana/imagenes/admin.png" WIDTH =90 HEIGHT=110>
                </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <center>  Gestor Registraduria Nacional </center>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
         
        </div>
        
      </div>

      <!-- search form (Optional) -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>-->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <!-- Optionally, you can add icons to the links -->
        
        <li class="active"><a href="/SistemaDeConsultaCiudadana/views/pages/report/generarReporte.php"><i class="fa fa-edit"></i><span>GENERAR REPORTE</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>REGISTRO</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/SistemaDeConsultaCiudadana/views/pages/forms/registrarUsuario.php"><i class="fa fa-circle-o"></i>Registrar Ciudadano </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Actualizar Ciudadano</a></li>
            <li><a href="/SistemaDeConsultaCiudadana/views/pages/tables/data.php"><i class="fa fa-circle-o"></i>Consultar Ciudadano</a></li>
            <li><a href="/SistemaDeConsultaCiudadana/views/pages/forms/borrarCiudadano.php"><i class="fa fa-circle-o"></i>Borrar Ciudadano</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar ciudadano</h3>
            </div>
            <?php 
              $sql = "select identificacion from ciudadano order by identificacion asc";
              $result = $conexion->query($sql);
            ?>

            <form method="post" action="/../SistemaDeConsultaCiudadana/views/pages/results/actualizacionOK.php">
                        <div class="box-body">
              <strong class="identificación">Identificación</strong><select name="id" class="form-control" required="true"> 
                  <option value="">Seleccionar</option>
              <?php 
                  while($row = $result->fetch_assoc()) {  
              ?>
                <option value ="<?php echo $row[identificacion]; ?>">  <?php echo $row[identificacion]; ?>  </option>     <?php
              }
              ?>      
              </select>
              <br>
              <strong class="no">Nombres</strong><input title="Este campo solo puede contener letras" pattern="[A-Za-z ]{1,40}" maxlength="40" name="name" class="form-control" type="text" placeholder="Nombres" required="true">
              <br>
              <strong class="ap">Apellidos</strong><input title="Este campo solo puede contener letras" pattern="[A-Za-z ]{1,40}" maxlength="40" name="ape" class="form-control" type="text" placeholder="Apellidos" required="true">
              <br>
              <strong class="fen">Fecha de nacimiento</strong><input name="fecn" class="form-control" type="date" placeholder="F. Nacimiento" required="true">
              <br>
              <strong class="lun">Lugar de nacimiento</strong><input title="Este campo solo puede contener letras" pattern="[A-Za-z ]{1,40}" maxlength="40" name="lun" class="form-control" type="text" placeholder="L. Nacimiento" required="true">
              <br>
              <strong class="fee">Fecha de expedición</strong><input name="fede" class="form-control" type="date" placeholder="F. Expedición" required="true">
              <br>
              <strong class="nombres">Lugar de expedición</strong><input title="Este campo solo puede contener letras" pattern="[A-Za-z ]{1,40}" maxlength="40" name="luge" class="form-control" type="text" placeholder="Lugar de expedición" required="true">
              <br>
              <strong class="nombres">Estatura (cm)</strong><select name="est" class="form-control" required="true"> 
                  <option value="">Seleccionar</option>
                  <option value="120">120cm</option>
                  <option value="121">121cm</option>
                  <option value="122">122cm</option>
                  <option value="123">123cm</option>
                  <option value="124">124cm</option>
                  <option value="125">125cm</option>
                  <option value="126">126cm</option>
                  <option value="127">127cm</option>
                  <option value="128">128cm</option>
                  <option value="129">129cm</option>
                  <option value="130">130cm</option>
                  <option value="131">131cm</option>
                  <option value="132">132cm</option>
                  <option value="133">133cm</option>
                  <option value="134">134cm</option>
                  <option value="135">135cm</option>
                  <option value="136">136cm</option>
                  <option value="137">137cm</option>
                  <option value="138">138cm</option>
                  <option value="139">139cm</option>
                  <option value="140">140cm</option>
                  <option value="141">141cm</option>
                  <option value="142">142cm</option>
                  <option value="143">143cm</option>
                  <option value="144">144cm</option>
                  <option value="145">145cm</option>
                  <option value="146">146cm</option>
                  <option value="147">147cm</option>
                  <option value="148">148cm</option>
                  <option value="149">149cm</option>
                  <option value="150">150cm</option>
                  <option value="151">151cm</option>
                  <option value="152">152cm</option>
                  <option value="153">153cm</option>
                  <option value="154">154cm</option>
                  <option value="155">155cm</option>
                  <option value="156">156cm</option>
                  <option value="157">157cm</option>
                  <option value="158">158cm</option>
                  <option value="159">159cm</option>
                  <option value="160">160cm</option>
                  <option value="161">161cm</option>
                  <option value="162">162cm</option>
                  <option value="163">163cm</option>
                  <option value="164">164cm</option>
                  <option value="165">165cm</option>
                  <option value="166">166cm</option>
                  <option value="167">167cm</option>
                  <option value="168">168cm</option>
                  <option value="169">169cm</option>
                  <option value="170">170cm</option>
                  <option value="171">171cm</option>
                  <option value="172">172cm</option>
                  <option value="173">173cm</option>
                  <option value="174">174cm</option>
                  <option value="175">175cm</option>
                  <option value="176">176cm</option>
                  <option value="177">177cm</option>
                  <option value="178">178cm</option>
                  <option value="179">179cm</option>
                  <option value="180">180cm</option>
                  <option value="181">181cm</option>
                  <option value="182">182cm</option>
                  <option value="183">183cm</option>
                  <option value="184">184cm</option>
                  <option value="185">185cm</option>
                  <option value="186">186cm</option>
                  <option value="187">187cm</option>
                  <option value="188">188cm</option>
                  <option value="189">189cm</option>
                  <option value="190">190cm</option>
                  <option value="191">191cm</option>
                  <option value="192">192cm</option>
                  <option value="193">193cm</option>
                  <option value="194">194cm</option>
                  <option value="195">195cm</option>
                  <option value="196">196cm</option>
                  <option value="197">197cm</option>
                  <option value="198">198cm</option>
                  <option value="199">199cm</option>
                  <option value="200">200cm</option>
                  <option value="201">201cm</option>
                  <option value="202">202cm</option>
                  <option value="203">203cm</option>
              </select>
              <br>
              <strong class="nombres">RH</strong>
              <select name="rh" class="form-control" required="true"> 
                  <option value="">Seleccionar</option>
                  <option value="+">+</option>
                  <option value="-">-</option>
                  
              </select>
              <br>
              <strong class="nombres">Grupo sanguineo</strong><input title="Este campo solo puede contener letras" pattern="[A-Za-z ]{1,40}" maxlength="2" name="gs" class="form-control" type="text" placeholder="G. Sanguineo" required="true">
              <br>
              <strong class="nombres">Estado judicial</strong>
              <select name="code" class="form-control" required="true"> 
                  <option value="">Seleccionar</option>
                  <option value="1">Requerido</option>
                  <option value="2">No requerido</option>
                  
              </select>
              
              <br>
              <button type="submit" class="btn btn-warning" >Actualizar</button>
              <button type="reset" class="btn btn-warning">Cancelar</button>

            </div>

            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Dynamic Systems</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>