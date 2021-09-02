<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <base href="<?php echo base_url()?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="./assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="./assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="./assets/admin/dist/css/skins/skin-blue.min.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="./assets/admin/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="./assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="./assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="./assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <!--a href="<?php echo base_url(); ?>" class="logo"-->
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!--span class="logo-mini"><b></b></span-->
        <!-- logo for regular state and mobile devices -->
        <!--span class="logo-lg"><b></b></span-->
      <!--/a-->

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>        
      </nav>
    </header>

    <?php $this->load->view('_sidebaradmin')?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        
      </section>
      <section class="content container-fluid">