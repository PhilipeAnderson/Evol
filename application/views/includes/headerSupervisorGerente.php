<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!--
 * Criada em:08/02/2020
 *
 * Descricao:
 * 
 *
 * @author Philipe Anderson De Campos | http://www.phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    EvoL
  </title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/black-dashboard" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, black dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, black design, black dashboard bootstrap 4 dashboard">
  <meta name="description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Black Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Black Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Black Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://demos.creative-tim.com/black-dashboard-pro/examples/dashboard.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/93/opt_bd_thumbnail.jpg" />
  <meta property="og:description" content="Black Dashboard PRO is a beautiful Bootstrap 4 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <!--<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">-->
  <!-- Nucleo Icons -->
  <link href="<?= base_url()?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="<?= base_url() ?>assets/faw/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?= base_url()?>assets/css/black-dashboard.min.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url()?>assets/css/demo.css" rel="stylesheet" />
</head>

<body class="sidebar-mini">
  <div class="wrapper">
    <div class="navbar-minimize-fixed">
      <button class="minimize-sidebar btn btn-link btn-just-icon">
        <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
        <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
      </button>
    </div>
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="#" class="simple-text logo-mini">
		  <i style="color:#808080" class="fab fa-cuttlefish"></i>
            <!--i class="fa fa-angle-double-left"></i>
            <i class="fas fa-angle-double-right"></i-->
          </a>
          <a href="#" class="simple-text logo-normal">
            <img src="<?= base_url() ?>assets/img/compasseGalagas.png">
          </a>
        </div>
        <ul class="nav">
        <!--Dashboard Menu-->
        <li>
          <a href="<?= base_url('Dashboard')?>">
            <i class="fas fa-tachometer-alt"></i>
            <p>Painel</p>
          </a>
        </li>
        <!--/Dashboard Menu--> 
        
        <!--Clientes Menu-->
        <li>
          <a href="<?= base_url('Clientes')?>">
            <i class="fa fa-gem"></i>
            <p>Clientes</p>
          </a>
        </li>
<!--          <li>
            <a data-toggle="collapse" href="#pagesExamples">
              <i class="fa fa-gem"></i>
              <p>
                Clientes    
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li>
                  <a href="<!?= base_url('Clientes')?>">
                    <span class="sidebar-mini-icon">L</span>
                    <span class="sidebar-normal"> Listar </span>
                  </a>
                </li>
               <li>
                  <a href="<!?= base_url('Clientes/cadastrar') ?>">
                    <span class="sidebar-mini-icon">C</span>
                    <span class="sidebar-normal"> Cadastrar </span>
                  </a>
                </li>
                <li>
                  <a href="<!?= base_url('Clientes') ?>">
                    <span class="sidebar-mini-icon">E</span>
                    <span class="sidebar-normal"> Editar </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>-->
        <!--/Clientes Menu-->
          
        <!--Serviços Menu-->
        <li>
        <a href="<?= base_url('Servicos')?>">
          <i class="fab fa-servicestack"></i>
          <p>Serviços</p>
        </a>
        </li>
        
<!--          <li>
            <a data-toggle="collapse" href="#componentsExamples">
              <i class="fab fa-servicestack"></i>
              <p>
                Serviços
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
               <li>
                <a href="<!?= base_url('Servicos') ?>">
                    <span class="sidebar-mini-icon">L</span>
                    <span class="sidebar-normal"> Listar </span>
                  </a>
                </li>
                <li>
                 <a href="<!?= base_url('Servicos/cadastrar') ?>">
                    <span class="sidebar-mini-icon">C</span>
                    <span class="sidebar-normal"> Cadastrar </span>
                  </a>
                </li>
                <li>
                 <a href="<!?= base_url('Servicos') ?>">
                    <span class="sidebar-mini-icon">E</span>
                    <span class="sidebar-normal"> Editar </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>-->
        <!--/Serviços Menu-->  
          
        <!--Processos Menu--> 
        <li>
          <a href="<?= base_url('Processos')?>">
            <i class="fa fa-chalkboard-teacher"></i>
            <p>Processos</p>
          </a>
        </li>
<!--        <li>
            <a data-toggle="collapse" href="#formsExamples">
              <i class="fa fa-chalkboard-teacher"></i>
              <p>
                Processos
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="formsExamples">
            <ul class="nav">
                <li>
                  <a href="../examples/forms/regular.html">
                    <span class="sidebar-mini-icon">RF</span>
                    <span class="sidebar-normal"> Regular Forms </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/forms/extended.html">
                    <span class="sidebar-mini-icon">EF</span>
                    <span class="sidebar-normal"> Extended Forms </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/forms/validation.html">
                    <span class="sidebar-mini-icon">V</span>
                    <span class="sidebar-normal"> Validation Forms </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/forms/wizard.html">
                    <span class="sidebar-mini-icon">W</span>
                    <span class="sidebar-normal"> Wizard </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>-->
        <!--/Processos Menu-->
        
        <!--Relatórios Menu--> 
        <li>
          <a href="<?= base_url('Relatorios')?>">
            <i class="fa fa-tasks"></i>
            <p>Relatórios</p>
          </a>
        </li>
<!--          <li>
            <a data-toggle="collapse" href="#tablesExamples">
              <i class="fa fa-tasks"></i>
              <p>
                Relatórios
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples">
            <ul class="nav">
                <li>
                  <a href="../examples/tables/regular.html">
                    <span class="sidebar-mini-icon">RT</span>
                    <span class="sidebar-normal"> Regular Tables </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/tables/extended.html">
                    <span class="sidebar-mini-icon">ET</span>
                    <span class="sidebar-normal"> Extended Tables </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/tables/datatables.net.html">
                    <span class="sidebar-mini-icon">DT</span>
                    <span class="sidebar-normal"> DataTables.net </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>-->
        <!--/Relatórios Menu-->  
        
        
        
        
        <!--Exemplos-->  
<!--      <li>
            <a href="../examples/widgets.html">
              <i class="tim-icons icon-settings"></i>
              <p>Widgets</p>
            </a>
          </li>
          <li>
            <a href="../examples/charts.html">
              <i class="tim-icons icon-chart-bar-32"></i>
              <p>Charts</p>
            </a>
          </li>
          <li>
            <a href="../examples/calendar.html">
              <i class="tim-icons icon-time-alarm"></i>
              <p>Calendar</p>
            </a>
          </li>-->
        <!--/Exemplos-->

        </ul>
      </div>
    </div>
   <div class="main-panel">
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
  <div class="container-fluid">
   <div class="navbar-wrapper">
    <div class="navbar-minimize d-inline">
     <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
      <i class="fa fa-angle-double-left"></i>
      <i class="fas fa-angle-double-right"></i>
     </button>
    </div>
    <div class="navbar-toggle d-inline">
     <button type="button" class="navbar-toggler">
      <span class="navbar-toggler-bar bar1"></span>
      <span class="navbar-toggler-bar bar2"></span>
      <span class="navbar-toggler-bar bar3"></span>
     </button>
    </div>
    <p class="navbar-brand">
     Bem vindo: <br>
     <?php
        echo $this->session->userdata('nome');
     ?>
    </p>
   </div>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
   </button>
   <div class="collapse navbar-collapse" id="navigation">
    <ul class="navbar-nav ml-auto">
     <li class="search-bar input-group">
      <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search"></i>
       <span class="d-lg-none d-md-block">Buscar</span>
      </button>
     </li>
     <li class="dropdown nav-item">
      <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
       <div class="notification d-none d-lg-block d-xl-block"></div>
       <i class="fa fa-exclamation-circle"></i>
       <p class="d-lg-none">
        Notificações
       </p>
      </a>
      <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
       <li class="nav-link">
        <a href="#" class="nav-item dropdown-item">Tem email novo em sua cx de entrada</a>
       </li>
       <li class="nav-link">
        <a href="javascript:void(0)" class="nav-item dropdown-item">Confira as novas atualizações de venda</a>
       </li>
       <li class="nav-link">
        <a href="javascript:void(0)" class="nav-item dropdown-item">Você possui 5 novas tarefas</a>
       </li>
       <li class="nav-link">
        <a href="javascript:void(0)" class="nav-item dropdown-item">Outras notificações</a>
       </li>
       
      </ul>
     </li>
     <li class="dropdown nav-item">
      <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
       <div class="photo">
        <img src="<?= base_url() ?>assets/img/fotodeperfil.jpg" alt="Profile Photo">
       </div>
       <b class="caret d-none d-lg-block d-xl-block"></b>
       <p class="d-lg-none">
        Log out
       </p>
      </a>
      <ul class="dropdown-menu dropdown-navbar">
       <li class="nav-link">
        <a href="<?= base_url('Usuarios/perfil') ?>" class="nav-item dropdown-item">Seu Perfil</a>
       </li>
       <li class="nav-link">
        <a href="javascript:void(0)" class="nav-item dropdown-item">Configurações</a>
       </li>
       <li class="dropdown-divider"></li>
       <li class="nav-link">
        <a href="<?= base_url('Dashboard/logout') ?>" class="nav-item dropdown-item">Sair</a>
       </li>
      </ul>
     </li>
     <li class="separator d-lg-none"></li>
    </ul>
   </div>
  </div>
 </nav>
 <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
    <div class="modal-header">
     <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Pesquisar...">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <i class="fa fa-times"></i>
     </button>
    </div>
   </div>
  </div>
 </div>
 <!-- End Navbar -->