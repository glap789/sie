<?php  $this->load->view('_resources/_header')?>

<?php  $this->load->view('admin/_menu_header')?>


      <div class="content">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Buscar Egresados
                </h2>
                <div class="text-muted mt-1">Encontrados <?php echo count($studentlist); ?> resultados </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">

            <div class="card">
                <div class="card-header">
                  <!-- 

                  AGREGAR FILTROS

                  -->
                <div class= "col-1">
                  <h3 class="card-title">Filtros</h3>
                  </div>


                  <?php 

                  $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");

                  echo form_open("pagination/search", $attr);?>

                  <div class="row g-2 align-items-center mb-n3">
                    
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                    <input class="form-control" id="book_name" name="book_name" placeholder="Buscar Egresados..." type="text" value="<?php echo set_value('book_name'); ?>" />
                      
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                    <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Buscar" />
                              <a href="<?php echo base_url(). "index.php/pagination/index"; ?>" class="btn btn-primary">Mostrar todos</a>
                    </div>
                  
                  </div>
                  <?php echo form_close(); ?>
                </div>

                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                      <tr>
                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                        <th class="w-1">ID
                        </th>
                        <th>NOMBRE</th>
                        <th>CARRERA</th>
                        <th>ESCUELA</th>
                        <th>CORREO</th>
                        <th>AÑO FIN</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php for ($i = 0; $i < count($studentlist); ++$i) { ?>
                <tr>
                    <td class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></td>
                    <td><?php echo $studentlist[$i]->id; ?></td>
                    <td><?php echo $studentlist[$i]->nombre; ?></td>
                    <td><?php echo $studentlist[$i]->correo; ?></td>
                    <td><?php echo $studentlist[$i]->nombre_carrera; ?></td>
                    <td><?php echo $studentlist[$i]->nombre_escuela; ?></td>
                    <td><?php echo $studentlist[$i]->year; ?></td>

                </tr>
                <?php } ?>


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
        
          <!--INCUIR FOOTER -->

</div>

<?php  $this->load->view('_resources/_footer')?>  
  
  