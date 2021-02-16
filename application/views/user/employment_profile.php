<?php  $this->load->view('_resources/_header')?>

<?php  $this->load->view('user/_menu_header')?>




<div class="content">

    <div class="container-xl">



        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Perfil Laboral
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-none d-lg-block col-lg-4">

                <div class="row row-cards">
                    <div class="card" style="background: rgba(32,107,196,.04);">
                        <div class="card-body">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-lg"
                                        style="background-image: url(https://media-exp1.licdn.com/dms/image/C4D0BAQE-HsHwX3e6Lg/company-logo_100_100/0/1519883021961?e=1621468800&v=beta&t=255IWcPjyRhjQVjM-vL0ZKbWliyDtawWafD1iBjrhmU)"></span>
                                </div>
                                <div class="col">
                                    <h4 class="card-title m-0">
                                        <a href="#">Universidad Privada Antenor Orrego</a>
                                    </h4>
                                    <div class="text-muted">
                                        Catedrático
                                    </div>
                                    <div class="small mt-1">
                                        <span class="badge bg-green"></span> Actual
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn">
                                        Editar
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-lg"
                                        style="background-image: url(https://media-exp1.licdn.com/dms/image/C4D0BAQFCHKbdnOaqKw/company-logo_100_100/0/1609627426928?e=1621468800&v=beta&t=x2XRTKmHLETN5lCboE0E-iY9rd6-BghXU7Kx9jYJByk)"></span>
                                </div>
                                <div class="col">
                                    <h4 class="card-title m-0">
                                        <a href="#">Universidad Santa Webadita</a>
                                    </h4>
                                    <div class="text-muted">
                                        Catedrático
                                    </div>

                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn">
                                        Editar
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>



                    <a href="#" class="btn btn-primary d-none d-sm-inline-block " data-bs-toggle="modal"
                        data-bs-target="#modal-add-employment">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Agregar Empleo
                    </a>





                </div>

            </div>

            <div class="col-lg-8">
                <div class="card card-lg">
                    <div class="card-body">
                        <div class="markdown">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nombres</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Apellidos</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>


                                <div class="col-lg-6">

                                    <div class="mb-3">
                                        <label class="form-label">Fecha de Nacimiento</label>

                                        <div class="input-icon">
                                            <span class="input-icon-addon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon" width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                                    <line x1="11" y1="15" x2="12" y2="15"></line>
                                                    <line x1="12" y1="15" x2="12" y2="18"></line>
                                                </svg>
                                            </span>
                                            <input class="form-control" placeholder="Select a date"
                                                id="datepicker-icon-prepend" value="2020-06-20">
                                        </div>

                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Sexo</label>
                                        <input class="form-control" list="datalistOptions" placeholder="Elegir..." />
                                        <datalist id="datalistOptions">
                                            <option value="Masculino" />
                                            <option value="Femenino" />
                                            <option value="Otro" />
                                        </datalist>
                                    </div>
                                </div>




                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Dni</label>
                                        <input type="text" name="input-mask" class="form-control" data-mask="000000000"
                                            data-mask-visible="true" placeholder="00000000" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Telefono</label>
                                        <input type="text" name="input-mask" class="form-control"
                                            data-mask="000-000-000" data-mask-visible="true" placeholder="000-000-000"
                                            autocomplete="off">
                                    </div>
                                </div>




                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email alterno</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Departamento</label>
                                        <input class="form-control" list="Departamento" placeholder="Elegir..." />
                                        <datalist id="Departamento">
                                            <option value="La Libertad" />
                                        </datalist>
                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Provincia</label>
                                        <input class="form-control" list="Provincia" placeholder="Elegir..." />
                                        <datalist id="Provincia">
                                            <option value="Trujillo" />
                                            <option value="Ascope" />
                                            <option value="Virú" />
                                        </datalist>
                                    </div>
                                </div>




                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Distrito</label>
                                        <input class="form-control" list="Distrito" placeholder="Elegir..." />
                                        <datalist id="Distrito">
                                            <option value="Trujillo" />
                                            <option value="La Esperanza" />
                                            <option value="Larco" />
                                        </datalist>
                                    </div>
                                </div>










                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Dirección</label>
                                        <input type="text" class="form-control">
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



































































<div class="modal modal-blur fade" id="modal-add-employment" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Datos Personales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>


                    <div class="col-lg-6">

                        <div class="mb-3">
                            <label class="form-label">Fecha de Nacimiento</label>

                            <div class="input-icon">
                                <span class="input-icon-addon"><svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                </span>
                                <input class="form-control" placeholder="Select a date" id="datepicker-icon-prepend"
                                    value="2020-06-20">
                            </div>

                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Sexo</label>
                            <input class="form-control" list="datalistOptions" placeholder="Elegir..." />
                            <datalist id="datalistOptions">
                                <option value="Masculino" />
                                <option value="Femenino" />
                                <option value="Otro" />
                            </datalist>
                        </div>
                    </div>




                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Dni</label>
                            <input type="text" name="input-mask" class="form-control" data-mask="000000000"
                                data-mask-visible="true" placeholder="00000000" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Telefono</label>
                            <input type="text" name="input-mask" class="form-control" data-mask="000-000-000"
                                data-mask-visible="true" placeholder="000-000-000" autocomplete="off">
                        </div>
                    </div>




                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Email alterno</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Departamento</label>
                            <input class="form-control" list="Departamento" placeholder="Elegir..." />
                            <datalist id="Departamento">
                                <option value="La Libertad" />
                            </datalist>
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Provincia</label>
                            <input class="form-control" list="Provincia" placeholder="Elegir..." />
                            <datalist id="Provincia">
                                <option value="Trujillo" />
                                <option value="Ascope" />
                                <option value="Virú" />
                            </datalist>
                        </div>
                    </div>




                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Distrito</label>
                            <input class="form-control" list="Distrito" placeholder="Elegir..." />
                            <datalist id="Distrito">
                                <option value="Trujillo" />
                                <option value="La Esperanza" />
                                <option value="Larco" />
                            </datalist>
                        </div>
                    </div>










                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Dirección</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>





                </div>




            </div>




            <div class="modal-footer">
                <a class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Cancel
                </a>
                <a href="#" class="btn btn-primary ms-auto" id="Update_data_graduate" data-bs-dismiss="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="12" r="9" />
                        <path d="M9 12l2 2l4 -4" />
                    </svg>
                    Agregar
                </a>
            </div>
        </div>
    </div>
</div>





<?php  $this->load->view('_resources/_footer')?>