<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bienvenido</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="{{ asset('imagenes/empresa/molinstec.png') }}">
  <!-- Bootstrap 3.3.7 -->
  {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}
  <!-- Font Awesome -->
  {!!Html::style('bower_components/font-awesome/css/font-awesome.min.css')!!}
  <!-- Ionicons -->
  {!!Html::style('bower_components/Ionicons/css/ionicons.min.css')!!}
  {!!Html::style('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
  <!-- Theme style -->
  {!!Html::style('dist/css/AdminLTE.min.css')!!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {!!Html::style('dist/css/skins/_all-skins.min.css')!!}
  <!-- Morris chart -->
  {!!Html::style('bower_components/morris.js/morris.css')!!}
  <!-- jvectormap -->
  {!!Html::style('bower_components/jvectormap/jquery-jvectormap.css')!!}
  <!-- Date Picker -->
  {!!Html::style('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')!!}
  <!-- Daterange picker -->
  {!!Html::style('bower_components/bootstrap-daterangepicker/daterangepicker.css')!!}
  <!-- bootstrap wysihtml5 - text editor -->
  {!!Html::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}
  {!!Html::style('css/select.css')!!}
  {!!Html::style('css/input.css')!!}
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{!!URL::to('/home') !!}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MOLINSTEC</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">{{Auth::user()->name .' '. Auth::user()->apellido_paterno}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  {{Auth::user()->tipo_usuario}}
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{!!URL::to('/logout')!!}" class="btn btn-primary btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>

          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">

        </div>
        <div class="pull-left info">

        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{!!URL::to('/usuario') !!}"><i class="fa fa-users"></i> Lista Usuarios</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i>
            <span>Clientes</span>
            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!URL::to('/cliente') !!}"><i class="fa fa-users"></i>Lista Clientes</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-circle-o"></i> <span>Mantenedores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!URL::to('/condicion') !!}"><i class="fa fa-list"></i>Condiciones equipos pesaje</a></li>
            <li><a href="{!!URL::to('/marca') !!}"><i class="fa fa-list"></i>Marcas equipos pesaje</a></li>
            <li><a href="{!!URL::to('/material') !!}"><i class="fa fa-list"></i>Materiales masas pesaje</a></li>
            <li><a href="{!!URL::to('/modelo') !!}"><i class="fa fa-list"></i>Modelos equipos pesaje</a></li>
            <li><a href="{!!URL::to('/unidad') !!}"><i class="fa fa-list"></i>Unidades equipos pesaje</a></li>
            <li><a href="{!!URL::to('/tipo') !!}"><i class="fa fa-list"></i>Tipos equipos pesaje</a></li>
            <li class="active"><a href="{!!URL::to('/tipo_equipo') !!}"><i class="fa fa-list"></i>Lista tipos equipos pesaje </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-word-o"></i>
            <span>Equipos de la empresa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!URL::to('/f4') !!}"><i class="fa fa-list"></i>Lista de equipos</a></li>
            <li><a href="{!!URL::to('/f5') !!}"><i class="fa fa-list"></i>Listado de equipos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-excel-o"></i>
            <span>Solicitud de cotización</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!URL::to('/f37') !!}"><i class="fa fa-list"></i>Solicitudes Solicitadas</a></li>
            <li><a href="{!!URL::to('/valorizado') !!}"><i class="fa fa-list"></i>Solicitudes Valorizadas</a></li>
            <li><a href="{!!URL::to('/cotizado') !!}"><i class="fa fa-list"></i>Solicitudes Cotizadas</a></li>
            <li><a href="{!!URL::to('/perdida') !!}"><i class="fa fa-list"></i>Solicitudes Perdidas</a></li>
            <li><a href="{!!URL::to('/finalizado') !!}"><i class="fa fa-list"></i>Solicitudes Finalizadas </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Informes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!!URL::to('/basculas') !!}"><i class="fa fa-circle-o"></i>Cant. básculas mensuales</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Cant. balanzas mensuales</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Cant. masas mensuales</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Cant. pesómetros mensuales</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
        @yield('contenido')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versión</b> 1.0
    </div>
    <strong><a href="https://www.molinstec.cl">MOLINSTEC</a></strong> <b>Contacto</b> admin@molinstec.cl
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
{!!Html::script('bower_components/jquery/dist/jquery.min.js')!!}
<!-- jQuery UI 1.11.4 -->
{!!Html::script('bower_components/jquery-ui/jquery-ui.min.js')!!}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
{!!Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
{!!Html::script('bower_components/datatables.net/js/jquery.dataTables.min.js')!!}
{!!Html::script('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}
<!-- Morris.js charts -->
{!!Html::script('bower_components/raphael/raphael.min.js')!!}
{!!Html::script('bower_components/morris.js/morris.min.js')!!}
<!-- Sparkline -->
{!!Html::script('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')!!}
<!-- jvectormap -->
{!!Html::script('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
{!!Html::script('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
<!-- jQuery Knob Chart -->
{!!Html::script('bower_components/jquery-knob/dist/jquery.knob.min.js')!!}
<!-- daterangepicker -->
{!!Html::script('bower_components/moment/min/moment.min.js')!!}
{!!Html::script('bower_components/bootstrap-daterangepicker/daterangepicker.js')!!}
<!-- datepicker -->
{!!Html::script('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')!!}
<!-- Bootstrap WYSIHTML5 -->
{!!Html::script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}
<!-- Slimscroll -->
{!!Html::script('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')!!}
<!-- FastClick -->
{!!Html::script('bower_components/fastclick/lib/fastclick.js')!!}
<!-- AdminLTE App -->
{!!Html::script('dist/js/adminlte.min.js')!!}
{!!Html::script('js/rut_vista.js')!!}
{!!Html::script('js/highcharts.js')!!}
{!!Html::script('js/graficas.js')!!}
@yield('scripts')
</body>
</html>
