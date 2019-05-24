<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Projeto ECHO</title>
  <!-- Bootstrap core CSS-->
  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
</head>



<body class="fixed-nav sticky-footer bg-light" id="page-top">
  <!-- Navigation-->
 <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"  style="background-color: #f2fde3;" id="mainNav"> -->
  <nav class="navbar  navbar-expand-lg navbar-light bg-light fixed-top "  style="background-color:  #abe1c4"   id="mainNav"  >
    <a class="navbar-brand" href="<?= base_url(); ?>painel">
    <img src="<?php echo base_url('echo.jpg'); ?>"  width="30" height="30" alt="" />Echo
    </a>
    <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="background-color: #abe1c4;">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Painel">
          <a class="nav-link" href="<?= base_url(); ?>painel">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>




        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Perfil">
          <a class="nav-link" href="<?= base_url(); ?>perfil">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Perfil</span>
          </a>
        </li>

        <?php if ($user->permit != '0' ) : ?>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Crimes">
          <a class="nav-link" href="<?= base_url(); ?>painel/crimes">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Infrações</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Denuncias">
          <a class="nav-link" href="<?= base_url(); ?>painel/denuncias">
            <i class="fa fa-fw fa-eye"></i>
            <span class="nav-link-text">Denuncias</span>
          </a>
        </li>
         <?php endif; ?>
      </ul>

     

      <ul class="navbar-nav sidenav-toggler" style="background-color: #abe1c4;" >
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
        </li>
      </ul>

    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">