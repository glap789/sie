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
                  <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modal-report">
                        Agregar Nueva Encuesta
                      </a>
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


  </div>

<?php  $this->load->view('_resources/_footer')?>




<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nueva Encuesta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">



        <div class="container">

          <div style="width:100%; max-width: 600px; margin:0 auto;">
            <div class="panel panel-default">
              <div class="panel-heading">Ingrese El nombre de su encuesta</div>
              <div class="panel-body">
                <span id="success_result"></span>
                <form method="post" id="repeater_form">
                  <div class="form-group">

                    <input type="text" name="name" id="name" class="form-control" required />
                  </div>
                  <div id="repeater">
                    <div class="repeater-heading" align="right">
                      <button type="button" class="btn btn-primary repeater-add-btn">Agregar mas preguntas</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="items" data-group="programming_languages">
                      <div class="item-content">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-9">
                              <label>Selecciona Tipo de Pregunta</label>
                              <select class="form-control" data-skip-name="true" data-name="skill[]" required>
                                <option value="">Respuesta simple</option>
                                <option value="PHP">Combo box</option>
                                <option value="Mysql">Radio Button</option>


                              </select>
                            </div>
                            <div class="col-md-3" style="margin-top:24px;" align="center">
                              <button id="remove-btn" class="btn btn-danger"
                                onclick="$(this).parents('.items').remove()">Eliminar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>



      </div>

      <div class="modal-footer">
        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
          Cancelar
        </a>
        <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" /></svg>
          Crear Encuesta
        </a>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {

    $("#repeater").createRepeater();

    $('#repeater_form').on('submit', function (event) {
      event.preventDefault();
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: $(this).serialize(),
        success: function (data) {
          $('#repeater_form')[0].reset();
          $("#repeater").createRepeater();
          $('#success_result').html(data);
          /*setInterval(function(){
              location.reload();
          }, 3000);*/
        }
      });
    });

  });
</script>