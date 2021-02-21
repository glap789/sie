<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.24
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dashboard - SIE-UPAO - Sistema de Información de Alumnos UPAO</title>
  <!-- CSS files -->
  <link href="<?php echo base_url();?>assets/css/tabler.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/tabler-flags.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/tabler-payments.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/tabler-vendors.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/demo.min.css" rel="stylesheet" />
</head>

<body class="antialiased">
  <div class="page">
    <header class="navbar navbar-expand-md navbar-light d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href=".">
            <img src="<?php echo base_url();?>/assets/dashboard/brand/UPAOLogin.png" height="40" alt="Tabler"
              class="navbar-brand-image">
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item dropdown d-none d-md-flex me-3">
            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                <path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
              <span class="badge bg-red"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
              <div class="card">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem
                  fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime
                  necessitatibus ullam.
                </div>
              </div>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
              aria-label="Open user menu">
              <span class="avatar avatar-sm"
                style="background-image: url(<?php echo base_url();?>assets/static/avatars/000m.jpg)"></span>
              <div class="d-none d-xl-block ps-2">
                <div>Adhemir Carrillo</div>
                <div class="mt-1 small text-muted">Administrador</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="#" class="dropdown-item">Administrar</a>
              <a href="#" class="dropdown-item">Perfil</a>
              <a href="#" class="dropdown-item">Ayuda</a>
              <a href="#" class="dropdown-item">Cerrar Sesión</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
          <div class="container-xl">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("/DashboardAdmin/index");?>">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <polyline points="5 12 3 12 12 3 21 12 19 12" />
                      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Inicio
                  </span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url("/DashboardAdmin/encuestas");?>">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                      <rect x="9" y="3" width="6" height="4" rx="2" />
                      <line x1="9" y1="12" x2="9.01" y2="12" />
                      <line x1="13" y1="12" x2="15" y2="12" />
                      <line x1="9" y1="16" x2="9.01" y2="16" />
                      <line x1="13" y1="16" x2="15" y2="16" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Datos de Encuestas
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("/DashboardAdmin/notificaciones");?>">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                      <line x1="12" y1="12" x2="12" y2="12.01" />
                      <line x1="8" y1="12" x2="8" y2="12.01" />
                      <line x1="16" y1="12" x2="16" y2="12.01" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Notificaciones
                  </span>
                </a>
              </li>

            </ul>
            <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
              <form action="." method="get">
                <div class="input-icon">
                  <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <circle cx="10" cy="10" r="7" />
                      <line x1="21" y1="21" x2="15" y2="15" /></svg>
                  </span>
                  <input type="text" class="form-control" placeholder="Search…" aria-label="Search in website">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
          <div class="row align-items-center">
            <div class="col">
              <!-- Page pre-title -->
              <div class="page-pretitle">
                Datos de
              </div>
              <h2 class="page-title">
                Encuestas
              </h2>
            </div>


          </div>
        </div>
        <div class="row row-deck row-cards">



          <div class="col-12">
            <div class="card">
              <div class="card-body border-bottom py-3">
                <div class="d-flex">
                  <div class="text-muted">
                    Mostrar
                    <div class="mx-2 d-inline-block">
                      <input type="text" class="form-control form-control-sm" value="8" size="3"
                        aria-label="Invoices count">
                    </div>
                    Registros
                  </div>
                  <div class="ms-auto text-muted">
                   Buscar:
                    <div class="ms-2 d-inline-block">
                      <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                    </div>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                  <thead>
                    <tr>

                      <th class="w-1">No. <svg xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <polyline points="6 15 12 9 18 15" /></svg>
                      </th>
                      <th>Nombre Encuesta</th>
                      <th>Escuela</th>
                      <th>Registros totales</th>
                      <th>Estado</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php foreach($surveys as $key => $survey){?>
                    <tr>
                      <td><span class="text-muted"><?php echo $survey['id'] ;?></span></td>
                      <td><a class="text-inherit"><?php echo $survey['name'] ;?></a></td>
                      <td>
                      <?php echo $survey['school_name'] ;?>
                      </td>
                      <td>
                      <?php echo $survey['total_records'] ;?>
                      </td>
                      <td>
                      <span class="badge bg-warning me-1"></span>  <?php 
                        if($survey['status'] = 0){
                        echo 'inactivo';
                        }
                        else{
                        echo 'activo';
                        } ?>
                      </td>


                     
                      <td class="text-right">
                      <button class="btn align-text-top">Descargar</button>

                        <span class="dropdown">
                          <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                            data-bs-toggle="dropdown">Estado</button>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">
                              Activo
                            </a>
                            <a class="dropdown-item" href="#">
                             Inactivo
                            </a>
                          </div>
                        </span>
                      </td>
                    </tr>
                    <?php }?>


                  </tbody>
                </table>
              </div>
              <div class="card-footer d-flex align-items-center">
                <p class="m-0 text-muted">Mostrando <span>1</span> - <span>8</span> de <span>16</span> registros</p>
                <ul class="pagination m-0 ms-auto">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" /></svg>
                      anterior
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      siguiente <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" /></svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--INCUIR FOOTER -->
      <?php  $this->load->view('footer')?>

    <!-- Libs JS -->
    <script src="<?php echo base_url();?>assets//libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- Tabler Core -->
    <script src="<?php echo base_url();?>assets//js/tabler.min.js"></script>

  </body>
</html>