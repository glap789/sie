<?php  $this->load->view('_resources/_header'); ?>

<?php  $this->load->view('user/_menu_header'); ?>


<div class="content">



    <div class="container-xl">




        <form action="#">

            <div class="row">
                <div class="col-lg-8">



                    <div class="input-file-container ">
                        <input class="input-file " id="my-file" type="file">
                        <label tabindex="0" for="my-file" class="input-file-trigger">



                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 489.4 489.4"
                                style="enable-background:new 0 0 489.4 489.4;width: 14rem;fill: currentColor !important;"
                                xml:space="preserve">


                                <path
                                    d="M382.4,422.75h-79.1H282h-4.6v-106.1h34.7c8.8,0,14-10,8.8-17.2l-67.5-93.4c-4.3-6-13.2-6-17.5,0l-67.5,93.4    c-5.2,7.2-0.1,17.2,8.8,17.2h34.7v106.1h-4.6H186H94.3c-52.5-2.9-94.3-52-94.3-105.2c0-36.7,19.9-68.7,49.4-86    c-2.7-7.3-4.1-15.1-4.1-23.3c0-37.5,30.3-67.8,67.8-67.8c8.1,0,15.9,1.4,23.2,4.1c21.7-46,68.5-77.9,122.9-77.9    c70.4,0.1,128.4,54,135,122.7c54.1,9.3,95.2,59.4,95.2,116.1C489.4,366.05,442.2,418.55,382.4,422.75z" />


                            </svg>
                            <br>
                            <h1>Seleccione su Certificado</h1>
                            <p class="file-return"></p>
                            <h4>(Asegúrese que su documento sea pdf y no exceda los 10mb)

                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                        </label>


                    </div>




                </div>


                <div class="col-lg-4">



                    <div class="">
                        <div class="card-header">
                            <h1 class="">Agregar estudio de Postgrado</h1>
                        </div>
                        <div class="card-body">


                            <div class="form-group mb-3 ">

                                <label class="form-label">Tipo de Postgrado*</label>

                                <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">

                                    <label class="form-selectgroup-item flex-fill">
                                        <input type="radio" name="form-payment" value="especializacion"
                                            class="form-selectgroup-input">
                                        <div class="form-selectgroup-label d-flex align-items-center p-3">
                                            <div class="me-3">
                                                <span class="form-selectgroup-check"></span>
                                            </div>
                                            <div>
                                                <strong>Especialización</strong>
                                            </div>
                                        </div>
                                    </label>


                                    <label class="form-selectgroup-item flex-fill">
                                        <input type="radio" name="form-payment" value="maestria"
                                            class="form-selectgroup-input">
                                        <div class="form-selectgroup-label d-flex align-items-center p-3">
                                            <div class="me-3">
                                                <span class="form-selectgroup-check"></span>
                                            </div>
                                            <div>
                                                <strong>Maestría</strong>
                                            </div>
                                        </div>
                                    </label>


                                    <label class="form-selectgroup-item flex-fill">
                                        <input type="radio" name="form-payment" value="doctorado"
                                            class="form-selectgroup-input">
                                        <div class="form-selectgroup-label d-flex align-items-center p-3">
                                            <div class="me-3">
                                                <span class="form-selectgroup-check"></span>
                                            </div>
                                            <div>
                                                <strong>Doctorado</strong>
                                            </div>
                                        </div>
                                    </label>

                                </div>

                            </div>



                            <div class="form-group mb-3 ">
                                <label class="form-label">Institución*</label>
                                <div>
                                    <input type="test" class="form-control" placeholder="donde lo realizó?">

                                </div>
                            </div>



                            <div class="form-group mb-3 ">

                                <div class="row">

                                    <div class="col-lg-6">
                                        <label class="form-label">Fecha inicio*</label>


                                        <input class="form-control wizard-required" id="datepicker-icon"
                                            value="Fecha de inicio" placeholder="2021-02-18">


                                    </div>





                                    <div class="col-lg-6">
                                        <label class="form-label">Fecha fin*</label>


                                        <input class="form-control wizard-required" id="datepicker-default"
                                            value="Fecha de inicio" placeholder="2021-02-18">


                                    </div>












                                </div>
                            </div>

                            <div class="form-group mb-3 ">
                                <label class="form-label">Tema*</label>
                                <div>
                                    <input type="test" class="form-control" placeholder="nombre del tema?">

                                </div>
                            </div>


                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary" style="width: 100%;"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>Agregar</button>
                            </div>



                        </div>
                    </div>











                </div>

            </div>

        </form>




        <div class="card mt-3">
            <div class="card-header">
                <h2 class="">Estudios de Postgrado</h2>
            </div>





            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                    aria-label="Select all invoices"></th>
                            <th class="w-1">No.</th>
                            <th>Tipo</th>
                            <th>Tema</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Finalización</th>
                            <th>Institución</th>
                            <th></th>
                        </tr>




                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                    aria-label="Select invoice"></td>
                            <td><span class="text-muted">001401</span></td>
                            <td>Especialización</td>
                            <td>
                                Gestión de bases de datos
                            </td>
                            <td>
                                2020/05/01
                            </td>
                            <td>
                                2020/05/01
                            </td>
                            <td>
                                Universidad Privada Antenor Orrego
                            </td>

                            <td>
                                <div class="btn-list flex-nowrap">
                                    <a href="#" class="btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#modal-add-professional">
                                        Edit
                                    </a>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                    aria-label="Select invoice"></td>
                            <td><span class="text-muted">001598</span></td>
                            <td>Maestría</td>
                            <td>
                                Arquitectura de Software e infraestructura de Microservicios
                            </td>
                            <td>
                                2020/05/01
                            </td>
                            <td>
                                2020/05/01
                            </td>
                            <td>
                                Universidad Nacional Mayor de San Marcos
                            </td>

                            <td>
                                <div class="btn-list flex-nowrap">
                                    <a href="#" class="btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#modal-add-professional">
                                        Edit
                                    </a>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                    aria-label="Select invoice"></td>
                            <td><span class="text-muted">001589</span></td>
                            <td>Especialización</td>
                            <td>
                                Analisis Services en plataforma r2 2019
                            </td>
                            <td>
                                2020/05/01
                            </td>
                            <td>
                                2020/05/01
                            </td>
                            <td>
                                Universidad Privada Antenor Orrego
                            </td>

                            <td>
                                <div class="btn-list flex-nowrap">
                                    <a href="#" class="btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#modal-add-professional">
                                        Edit
                                    </a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>











            </div>
            <div class="card-footer d-flex align-items-center">
                <p class="m-0 text-muted">Mostrando <span>1</span> a <span>3</span> de <span>12</span> filas</p>
                <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="15 6 9 12 15 18"></polyline>
                            </svg>
                            Anterior
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            Siguiente <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="9 6 15 12 9 18"></polyline>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>






    </div>



</div>














<?php  $this->load->view('_resources/_footer')?>



<script>
document.querySelector("html").classList.add('js');

var fileInput = document.querySelector(".input-file"),
    button = document.querySelector(".input-file-trigger"),
    the_return = document.querySelector(".file-return");

button.addEventListener("keydown", function(event) {
    if (event.keyCode == 13 || event.keyCode == 32) {
        fileInput.focus();
    }
});
button.addEventListener("click", function(event) {
    fileInput.focus();
    return false;
});
fileInput.addEventListener("change", function(event) {
    the_return.innerHTML = this.value;
});
</script>

</div>








<div class="modal modal-blur fade" id="modal-add-professional" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar estudio de postgrado </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <section>
                    <div class="row no-gutters">

                        <div class="col-lg-12 col-md-12">
                            <div class="card-body">


                                <div class="form-group mb-3 ">

                                    <label class="form-label">Tipo de Postgrado*</label>

                                    <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">

                                        <label class="form-selectgroup-item flex-fill">
                                            <input type="radio" name="form-payment" value="especializacion"
                                                class="form-selectgroup-input" checked>
                                            <div class="form-selectgroup-label d-flex align-items-center p-3">
                                                <div class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </div>
                                                <div>
                                                    <strong>Especialización</strong>
                                                </div>
                                            </div>
                                        </label>



                                    </div>

                                </div>



                                <div class="form-group mb-3 ">
                                    <label class="form-label">Institución*</label>
                                    <div>
                                        <input type="test" class="form-control"
                                            value="Universidad Privada Antenor Orrego" placeholder="donde lo realizó?">

                                    </div>
                                </div>



                                <div class="form-group mb-3 ">

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <label class="form-label">Fecha inicio*</label>


                                            <input class="form-control wizard-required" id="" value="2021-02-18"
                                                placeholder="2021-02-18">


                                        </div>





                                        <div class="col-lg-6">
                                            <label class="form-label">Fecha fin*</label>


                                            <input class="form-control wizard-required" id="" value="2021-02-18"
                                                placeholder="2021-02-18">


                                        </div>












                                    </div>
                                </div>

                                <div class="form-group mb-3 ">
                                    <label class="form-label">Tema*</label>
                                    <div>
                                        <input type="test" class="form-control" value="Gestión de bases de datos"
                                            placeholder="nombre del tema?">

                                    </div>
                                </div>


                                <div class="form-footer">
                                    <div class="dropdown-divider mb-4"></div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-danger " style=""><svg
                                                    xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <line x1="18" y1="6" x2="6" y2="18" />
                                                    <line x1="6" y1="6" x2="18" y2="18" />
                                                </svg>Eliminar</button>

                                        </div>


                                        <div class="col-lg-6" style="text-align: right;">
                                            <button type="submit" class="btn btn-primary" style=""><svg
                                                    xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="12" cy="12" r="9" />
                                                    <path d="M9 12l2 2l4 -4" />
                                                </svg>Actualizar</button>


                                        </div>




                                    </div>



                                </div>
                            </div>
                </section>

































            </div>





        </div>
    </div>
</div>