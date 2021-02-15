  <!--   
      <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <img src="<?php echo base_url();?>/assets/dashboard/brand/UPAOLogin.png"  height="40" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                  </div>
                </div>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(<?php echo base_url();?>assets/static/avatars/000m.jpg)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Adhemir Carrillo</div>
                  <div class="mt-1 small text-muted">Administrador</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Administrar</a>
                <a href="#" class="dropdown-item">Perfil</a>
                <a href="#" class="dropdown-item">Ayuda</a>
                <a href="/Auth/logout" class="dropdown-item">Cerrar Sesión</a>
              </div>
            </div>
          </div>
        </div>
      </header>


  
      <div class="navbar-expand-md sticky-top">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar navbar-light">
            <div class="container-xl">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url("/DashboardUser");?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Inicio
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url("/DashboardUser/survey");?>" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><rect x="9" y="3" width="6" height="4" rx="2" /><line x1="9" y1="12" x2="9.01" y2="12" /><line x1="13" y1="12" x2="15" y2="12" /><line x1="9" y1="16" x2="9.01" y2="16" /><line x1="13" y1="16" x2="15" y2="16" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Mis Encuestas
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url("/DashboardUser/notification");?>" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" /><line x1="12" y1="12" x2="12" y2="12.01" /><line x1="8" y1="12" x2="8" y2="12.01" /><line x1="16" y1="12" x2="16" y2="12.01" /></svg>
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
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search…" aria-label="Search in website">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
        
        

-->



<header class="navbar navbar-expand-md navbar-light sticky-top d-print-none ">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <img src="<?php echo base_url();?>/assets/dashboard/brand/UPAOLogin.png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path></svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-body">
                    <div class="divide-y-4">
                    <div>
                      <div class="row">
                        <div class="col-auto">
                          <span class="avatar">
                            
                            <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQE-HsHwX3e6Lg/company-logo_100_100/0/1519883021961?e=1621468800&amp;v=beta&amp;t=255IWcPjyRhjQVjM-vL0ZKbWliyDtawWafD1iBjrhmU">
                            
                            
                            
                            </span>
                        </div>
                        <div class="col">
                          <div class="text-truncate">
                            <strong>La universidad</strong> Publicó una encuesta para tí.
                          </div>
                          <div class="text-muted">yesterday</div>
                        </div>
                        <div class="col-auto align-self-center">
                          <div class="badge bg-primary"></div>
                        </div>
                      </div>
                    </div>
                        
                        
                    <div>
                      <div class="row">
                        <div class="col-auto">
                          <span class="avatar" style="background-image: url(https://media-exp1.licdn.com/dms/image/C4E03AQF1W1bb6ry-4w/profile-displayphoto-shrink_200_200/0/1583642648019?e=1619049600&v=beta&t=cqGB2-s4sZp3Vc6ayx0366iiA5Mgt3nlcM-exOkN71A)"></span>
                        </div>
                        <div class="col">
                          <div class="text-truncate">
                            Tu <strong>Perfil</strong> necesita actualizar!
                          </div>
                          <div class="text-muted">2 days ago</div>
                        </div>
                        <div class="col-auto align-self-center">
                          <div class="badge bg-primary"></div>
                        </div>
                      </div>
                    </div>
                        
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(https://media-exp1.licdn.com/dms/image/C4E03AQF1W1bb6ry-4w/profile-displayphoto-shrink_200_200/0/1583642648019?e=1619049600&v=beta&t=cqGB2-s4sZp3Vc6ayx0366iiA5Mgt3nlcM-exOkN71A)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Marco Adhemir Carrillo</div>
                  
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Set status</a>
                <a href="#" class="dropdown-item">Profile &amp; account</a>
                <a href="#" class="dropdown-item">Feedback</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="/Auth/logout" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
            
            
            
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url("/DashboardUser");?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="5 12 3 12 12 3 21 12 19 12"></polyline><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path></svg>
                    </span>
                    <span class="nav-link-title">
                      Inicio
                    </span>
                  </a>
                </li>
                  
                  
                   <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url("/DashboardUser/survey");?>">
                   <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 11 12 14 20 6" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Mis Encuestas
                    </span>
                  </a>
                </li>
                  
                  
                  
                   <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url("/DashboardUser/notification");?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 6h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><circle cx="17" cy="7" r="3" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Notificaciones
                    </span>
                  </a>
                </li>
             
              </ul>
              <div class="ms-md-auto ps-md-4 py-2 py-md-0 me-md-4 order-first order-md-last flex-grow-1 flex-md-grow-0">
                <form action="." method="get">
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="10" cy="10" r="7"></circle><line x1="21" y1="21" x2="15" y2="15"></line></svg>
                    </span>
                    <input type="text" class="form-control form-control-dark" placeholder="Search…" aria-label="Search in website">
                  </div>
                </form>
              </div>
            </div>
          </div>
            
            
        </div>
      </header>





