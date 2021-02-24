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
            Centro de
          </div>
          <h2 class="page-title">
            Notificaciones
          </h2>
        </div>


      </div>
    </div>
    <div class="row row-deck row-cards">



      <div class="col-12">
        <div class="card">
          <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
              <li class="nav-item">
                <a href="#tabs-main-9" class="nav-link active" data-bs-toggle="tab"><svg
                    xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                  </svg>
                  Recibidos</a>
              </li>
              <li class="nav-item">
                <a href="#tabs-sended-9" class="nav-link" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                  </svg>
                  Enviados</a>
              </li>

              <li class="nav-item">
                <a href="#tabs-sendnew-9" class="nav-link" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                  </svg>
                  Enviar Notificación</a>
              </li>
            </ul>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-main-9">

                  <div class="col-12">

                    <!--****************************************** RECIBIDOS **************************** -->
                    <div class="card">
                      <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                          <thead>
                            <tr>
                              <th>Emisor</th>
                              <th>Mensaje</th>
                              <th>Accion</th>
                              <th class="w-1"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="d-flex py-1 align-items-center">
                                  <span class="avatar me-2"
                                    style="background-image: url(./static/avatars/006m.jpg)"></span>
                                  <div class="flex-fill">
                                    <div class="font-weight-medium">Marco Carrillo</div>
                                    <div class="text-muted"><a href="#" class="text-reset">mcarrilloz@upao.edu.pe</a>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div>Revisar Ultima Encuesta</div>

                              </td>
                              <td>
                                <a href="#">Ver</a>
                              </td>
                              <td>
                                <a href="#">Eliminar</a>
                              </td>
                            </tr>


                            <tr>
                              <td>
                                <div class="d-flex py-1 align-items-center">
                                  <span class="avatar me-2"
                                    style="background-image: url(./static/avatars/006m.jpg)"></span>
                                  <div class="flex-fill">
                                    <div class="font-weight-medium">Heber Abraham</div>
                                    <div class="text-muted"><a href="#" class="text-reset">hpomaf@upao.edu.pe</a></div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div>Solicitud de aprobación</div>

                              </td>
                              <td>
                                <a href="#">Ver</a>
                              </td>
                              <td>
                                <a href="#">Eliminar</a>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <div class="d-flex py-1 align-items-center">
                                  <span class="avatar me-2"
                                    style="background-image: url(./static/avatars/006m.jpg)"></span>
                                  <div class="flex-fill">
                                    <div class="font-weight-medium">Freddy Infante</div>
                                    <div class="text-muted"><a href="#" class="text-reset">finfante@upao.edu.pe</a>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div>Solicitud de eliminación de encuesta</div>

                              </td>
                              <td>
                                <a href="#">Ver</a>
                              </td>
                              <td>
                                <a href="#">Eliminar</a>
                              </td>
                            </tr>


                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!--****************************************** FIN RECIBIDOS **************************** -->
                </div>
                <div class="tab-pane" id="tabs-sended-9">

                  <!--****************************************** ENVIADOS **************************** -->
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table table-vcenter card-table">
                        <thead>
                          <tr>
                            <th>Receptor</th>
                            <th>Mensaje</th>
                            <th>Accion</th>
                            <th class="w-1"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex py-1 align-items-center">
                                <span class="avatar me-2"
                                  style="background-image: url(./static/avatars/006m.jpg)"></span>
                                <div class="flex-fill">
                                  <div class="font-weight-medium">Marco Carrillo</div>
                                  <div class="text-muted"><a href="#" class="text-reset">mcarrilloz@upao.edu.pe</a>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div>Llena la encuesta por favor</div>

                            </td>
                            <td>
                              <a href="#">Ver</a>
                            </td>
                            <td>
                              <a href="#">Eliminar para mi</a>
                            </td>
                          </tr>


                          <tr>
                            <td>
                              <div class="d-flex py-1 align-items-center">
                                <span class="avatar me-2"
                                  style="background-image: url(./static/avatars/006m.jpg)"></span>
                                <div class="flex-fill">
                                  <div class="font-weight-medium">Varios...</div>
                                  <div class="text-muted"><a href="#" class="text-reset">ver receptores</a></div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div>Solicitud de llenado de datos</div>

                            </td>
                            <td>
                              <a href="#">Ver</a>
                            </td>
                            <td>
                              <a href="#">Eliminar para mi</a>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <div class="d-flex py-1 align-items-center">
                                <span class="avatar me-2"
                                  style="background-image: url(./static/avatars/006m.jpg)"></span>
                                <div class="flex-fill">
                                  <div class="font-weight-medium">Freddy Infante</div>
                                  <div class="text-muted"><a href="#" class="text-reset">finfante@upao.edu.pe</a></div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div>Solicitud de cambio de datos</div>

                            </td>
                            <td>
                              <a href="#">Ver</a>
                            </td>
                            <td>
                              <a href="#">Eliminar para mi</a>
                            </td>
                          </tr>


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!--****************************************** FIN ENVIADOS **************************** -->

                <div class="tab-pane" id="tabs-sendnew-9">


                 <!--****************************************** ENVIAR **************************** -->
                 <div class="form-group mb-1 row">
                    <label class="form-label col-1 col-form-label">Usuarios</label>
                    <div class="col">
                      <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Escribe los destinatarios separando por coma">
                      <small class="form-hint">Puedes escribir la palabra 'todos' o '*nombre de una escuela' sin comillas para enviar notificaciones por grupos</small>
                    </div>
                  </div>

                  <div class="form-group mb-1 row">
                    <label class="form-label col-1 col-form-label">Asunto</label>
                    <div class="col">
                      <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Escribe el asunto">
                      <small class="form-hint">Usa menos de 100 caracteres.</small>
                    </div>
                  </div>

                  <div class="mb-3">
                            <label class="form-label">Mensaje <span class="form-label-description">máx. 150</span></label>
                            <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Content..">...</textarea>
                          </div>

                          <button type="submit" class="btn btn-primary">Enviar</button>
                  <!--****************************************** FIN ENVIAR **************************** -->
               
              </div>

              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>










<?php  $this->load->view('_resources/_footer')?>