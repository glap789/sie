
    
    
<?php  $this->load->view('_resources/_header')?>

<?php  $this->load->view('admin/_menu_header')?>

    
    
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
                    <tr>
                      <td><span class="text-muted">001</span></td>
                      <td><a class="text-inherit">Empleos Egresados</a></td>
                      <td>
                        Ingenieria de Sistemas, Software y Redes
                      </td>
                      <td>
                        7102
                      </td>
                      <td>
                      <span class="badge bg-warning me-1"></span> Inactivo
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

                    <tr>
                      <td><span class="text-muted">002</span></td>
                      <td><a  class="text-inherit">Grado de satisfacción de Estudios</a></td>
                      <td>
                        Ingenieria de Sistemas, Software y Redes
                      </td>
                      <td>
                        5312
                      </td>
                      <td>
                        <span class="badge bg-secondary me-1"></span> Activo
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

                    <tr>
                      <td><span class="text-muted">003</span></td>
                      <td><a  class="text-inherit">Sugerencias de Mejora</a></td>
                      <td>
                        Ingenieria de Sistemas, Software y Redes
                      </td>
                      <td>
                        3145
                      </td>
                      <td>
                        <span class="badge bg-success me-1"></span> Activo
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

                    <tr>
                      <td><span class="text-muted">004</span></td>
                      <td><a  class="text-inherit">Encuestas sobre Maestros</a></td>
                      <td>
                        Ingenieria de Sistemas, Software y Redes
                      </td>
                      <td>
                        3321
                      </td>
                      <td>
                        <span class="badge bg-success me-1"></span> Inactivo
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
    </div>
    
    
    
    

<?php  $this->load->view('_resources/_footer')?>  
        