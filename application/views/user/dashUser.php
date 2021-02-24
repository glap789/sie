<?php  $this->load->view('_resources/_header')?>

<script>
const API_URL = 'https://api.coinmarketcap.com/v1/ticker/?limit=1';

function displayData() {
    fetch(API_URL)
        .then(res => res.json())
        .then(json => {
            const topCoin = json[0];
            document.getElementById('price').innerHTML = `$${topCoin.price_usd}`;
        });
}
setInterval(displayData, 5000);
</script>

<?php   $this->load->view('user/_menu_header')?>


<div class="content">
    <div class="container-xl">


        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="row row-0">
                        <div class="col-3">
                            <img src="https://media-exp1.licdn.com/dms/image/C4E03AQF1W1bb6ry-4w/profile-displayphoto-shrink_200_200/0/1583642648019?e=1619049600&v=beta&t=cqGB2-s4sZp3Vc6ayx0366iiA5Mgt3nlcM-exOkN71A"
                                class="w-100 h-100 object-cover" alt="Card side image">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h3 class="card-title">Adhemir</h3>
                                <p>Ingeniero de Computación y Sistemas, con Maestría en Ingeniería de Sistemas con
                                    mención en Administración y Dirección de Tecnologias de Información. Cuento con una
                                    sólida experiencia profesional de de 14 años en el sector de educación. Actualmente,
                                    como Profesor a Tiempo Completo de la Facultad de Ingeniería en Campus San Miguel de
                                    la Universidad Peruana de Ciencias Aplicadas.</p>
                                <p>Un profesional centrado en el constante aprendizaje y formación continua, según la
                                    necesidad y evolución del mercado, sobre nuevas tecnologías de desarrollo de
                                    software, con la finalidad de compartir mi experiencia con colegas y futuros colegas
                                    en diferentes universidades del Perú.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>











        <br>








        <div class="page-header ">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Cursos y Especialidades
                    </h2>
                </div>
            </div>
        </div>





        <div class="row row-cards">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="https://cdn.dribbble.com/users/844826/screenshots/14553706/media/2be9a4847b939e02702648d058cf2df8.png"
                                    alt="Food Deliver UI dashboards" class="rounded">
                            </div>
                            <div class="col">
                                <h3 class="card-title mb-1">
                                    <a href="project-overview.html" class="text-reset">Food Deliver UI dashboards</a>
                                </h3>
                                <div class="text-muted">
                                    Updated 2 hours ago
                                </div>
                                <div class="mt-3">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            25%
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" style="width: 25%" role="progressbar"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="visually-hidden">25% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="card-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="12" cy="19" r="1" />
                                            <circle cx="12" cy="5" r="1" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Import</a>
                                        <a href="#" class="dropdown-item">Export</a>
                                        <a href="#" class="dropdown-item">Download</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="https://cdn.dribbble.com/users/844826/screenshots/14547977/media/e7749bd1b09d9415b8dc265a7dbe81f6.png"
                                    alt="Projects Dashboards" class="rounded">
                            </div>
                            <div class="col">
                                <h3 class="card-title mb-1">
                                    <a href="project-overview.html" class="text-reset">Projects Dashboards</a>
                                </h3>
                                <div class="text-muted">
                                    Updated 2 hours ago
                                </div>
                                <div class="mt-3">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            76%
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" style="width: 76%" role="progressbar"
                                                    aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="visually-hidden">76% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="card-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="12" cy="19" r="1" />
                                            <circle cx="12" cy="5" r="1" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Import</a>
                                        <a href="#" class="dropdown-item">Export</a>
                                        <a href="#" class="dropdown-item">Download</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>









        <div class="row">



            <div class="col-lg-6">

                <br>
                <div class="page-header ">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                Idiomas
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row row-cards">

                    <div class="col-md-6 col-xl-6">

                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="flag flag-xs flag-country-de">
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            Alemán
                                        </div>
                                        <div class="text-muted">
                                            Intermedio
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="flag flag-xs flag-country-es">
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            Español
                                        </div>
                                        <div class="text-muted">
                                            Avanzado
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="page-header ">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                Proyectos Personales
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row row-cards">

                    <div class="col-12">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="bg-blue text-white avatar"><svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                                </path>
                                                <path d="M12 3v3m0 12v3"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            Web-Ecommerse
                                        </div>
                                        <div class="text-muted">
                                            Duración: 12 Semanas
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">

                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="bg-green text-white avatar"><svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="6" cy="19" r="2"></circle>
                                                <circle cx="17" cy="19" r="2"></circle>
                                                <path d="M17 17h-11v-14h-2"></path>
                                                <path d="M6 5l14 1l-1 7h-13"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            Paginas Web
                                        </div>
                                        <div class="text-muted">
                                            Duración: 5 dias
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="bg-red text-white avatar"><svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            Desarrollo de API-RestFull
                                        </div>
                                        <div class="text-muted">
                                            Duracióm: 20 semanas
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">



                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="bg-yellow text-white avatar"><svg
                                                xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4">
                                                </path>
                                                <line x1="8" y1="9" x2="16" y2="9"></line>
                                                <line x1="8" y1="13" x2="14" y2="13"></line>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <div class="font-weight-medium">
                                            App Mobile (ToroMatch)
                                        </div>
                                        <div class="text-muted">
                                            Duración: 5 meses
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>













            </div>



            <div class="col-lg-6">

                <br>
                <div class="page-header ">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                Record Laboral
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="container">


                            <div class="item">
                                <div id="timeline">
                                    <div>


                                        <section class="year">
                                            <h3>2019</h3>

                                            <div class="record-lab-logo"><img
                                                    src="https://media-exp1.licdn.com/dms/image/C4D0BAQFCHKbdnOaqKw/company-logo_100_100/0/1609627426928?e=1621468800&amp;v=beta&amp;t=x2XRTKmHLETN5lCboE0E-iY9rd6-BghXU7Kx9jYJByk">

                                                <h3>Universisad Santa Webadita</h3>
                                            </div>
                                            <br>

                                            <section>

                                                <h4>Diciembre – actualidad Duración del empleo1 año y 3 meses </h4>


                                                <ul>
                                                    <li>El Equipo Académico de Campus tiene como objetivo brindar una
                                                        solución rápida y especializada a dudas y problemas de índole
                                                        académica. Asesorar en los siguientes temas:</li>
                                                    <li>Consulta sobre cursos</li>
                                                    <li>Consulta sobre horarios</li>
                                                    <li>Convalidaciones internas</li>
                                                    <li>Consultas sobre malla curricular</li>
                                                </ul>





                                            </section>


                                            <section>
                                                <h4>Mayo</h4>
                                                <ul>
                                                    <li>me rasque el ortelano</li>
                                                </ul>
                                            </section>
                                            <section>
                                                <h4>Octubre</h4>
                                                <ul>
                                                    <li>aca hice algoo</li>
                                                </ul>
                                            </section>
                                            <section>
                                                <h4>Noviembre</h4>
                                                <ul>
                                                    <li>Algooo</li>
                                                </ul>
                                            </section>
                                        </section>

                                        <br> <br> <br>



                                        <section class="year">
                                            <h3>2019</h3>

                                            <div class="record-lab-logo"><img
                                                    src="https://media-exp1.licdn.com/dms/image/C4D0BAQE-HsHwX3e6Lg/company-logo_100_100/0/1519883021961?e=1621468800&v=beta&t=255IWcPjyRhjQVjM-vL0ZKbWliyDtawWafD1iBjrhmU">

                                                <h3>Universisad Santa Webadita II</h3>
                                            </div>
                                            <br>

                                            <section>

                                                <h4>Diciembre – actualidad Duración del empleo1 año y 3 meses </h4>


                                                <ul>
                                                    <li>El Equipo Académico de Campus tiene como objetivo brindar una
                                                        solución rápida y especializada a dudas y problemas de índole
                                                        académica. Asesorar en los siguientes temas:</li>
                                                    <li>Consulta sobre cursos</li>
                                                    <li>Consulta sobre horarios</li>
                                                    <li>Convalidaciones internas</li>
                                                    <li>Consultas sobre malla curricular</li>
                                                </ul>





                                            </section>


                                            <section>
                                                <h4>Mayo</h4>
                                                <ul>
                                                    <li>me rasque el ortelano</li>
                                                </ul>
                                            </section>
                                            <section>
                                                <h4>Octubre</h4>
                                                <ul>
                                                    <li>aca hice algoo</li>
                                                </ul>
                                            </section>
                                            <section>
                                                <h4>Noviembre</h4>
                                                <ul>
                                                    <li>Algooo</li>
                                                </ul>
                                            </section>
                                        </section>



                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>







        </div>
        <br>




    </div>


</div>

















<?php  $this->load->view('_resources/_footer')?>