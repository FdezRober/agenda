<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    {{-- <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{url('/public/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="{{url('/public/adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    {{-- <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css"> --}}
    <link rel="stylesheet" href="{{url('/public/adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    {{-- <link rel="stylesheet" href="dist/css/AdminLTE.min.css"> --}}
    <link rel="stylesheet" href="{{url('/public/adminlte/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {{-- <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css"> --}}
    <link rel="stylesheet" href="{{url('/public/adminlte/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    {{-- <link rel="stylesheet" href="bower_components/morris.js/morris.css"> --}}
    <link rel="stylesheet" href="{{url('/public/adminlte/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    {{-- <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css"> --}}
    <link rel="stylesheet" href="{{url('/public/adminlte/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    {{-- <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> --}}
    <link rel="stylesheet" href="{{url('/public/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/public/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('/public/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="{{url('/public/css/alertifyjs/alertify.min.css')}}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<input type="hidden" id="urlServidor"  value="{{url('/')}}">
  <header class="main-header">
    <!-- Logo -->
    <a href="{{url('/inicial')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AG</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Agenda</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      
      <!-- icono de amburguesa para mostrar/ocultar menu-->
      <!--
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> -->     

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li><a onclick="fullScreen()" class="fa fa-fw fa-youtube-play" role="button"></a></li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">      
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{url('/public/adminlte/dist/img/user2-160x160.png')}}" class="user-image" alt="User Image">
          <span class="hidden-xs">Roberto</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{url('/public/adminlte/dist/img/user2-160x160.png')}}" class="img-circle" alt="User Image">

              <p>
                  Roberto 
              </p>
            </li>
            <!-- Menu Body 
            <li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </div>
            </li> -->

            <!-- Menu Footer-->
            <li class="user-footer">
              {{-- <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div> --}}
              <div class="pull-right">
              <a href="#" class="btn btn-danger btn-flat">Cerrar session</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
      </div>
      </nav>
      </header>
