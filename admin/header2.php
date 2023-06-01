<?php 

  error_reporting(0);
  include("class/require.php");
  include("class/cnn.php");
  include("class/funciones.php");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador de contenidos | mcardin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="dist/css/animate.css">

  <!-- estilos de mcardin -->
  <link rel="stylesheet" href="dist/css/style-admin-mcardin.css">
  <link rel="stylesheet" href="dist/css/style-reorder.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<style>
    #preloader {position:fixed;top:0;left:0;right:0;bottom:0;background-color:#fff;z-index:999999;}
    #status {width:207px;height:207px;position:absolute;left:50%;top:50%;background-image:url(dist/img/loading.gif);background-repeat:no-repeat;background-position:center top;margin:-105px 0 0 -105px;}
    </style>
    <div id="preloader"><div id="status"></div></div>
<div class="wrapper">



<header class="main-header">
    <!-- Logo -->
    <a href="http://www.mcardin.com.ar" class="logo" target="_blank"> 
      Desarrollado por <img class="logo-header" src="dist/img/logo-mcardin-blanco.png">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="hidden-xs"><a href="http://www.piedraspatagonia.com.ar" target="_blank">www.piedraspatagonia.com.ar</a></li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span><i class="fa fa-user"></i> Piedras Patagonia</span>
            </a>
            <ul class="dropdown-menu">
              <!-- <li><a href="#" class="btn">Perfil</a></li> -->
              <li><a href="cerrar-session.php" class="btn">Cerrar sesión</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>