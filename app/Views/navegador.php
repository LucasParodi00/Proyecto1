  <!-- HEADER -->
    <?php
    $session = session();
    ?>




          
          <header class="header__">
            <!-- Si es administrador -->
            <?php if(session()->logueado == 'true' && session()->rango == '2'): ?>

            <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
              <div class="container-fluid">
                <a href="index"><img class="logo" src="assets/img/logo-vegetarian1.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  
                <div class="collapse navbar-collapse" id="mynavbar">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index') ?>">Inicio</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos') ?>">Productos</a>
                    </li>
                    
                    <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url('panel') ?>">PanelUsuarios</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('panelProductos') ?>">PanelProductos</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('consultas') ?>">PanelConsultas</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('detallesVentas') ?>">Compras</a>
                    </li>

                   

                  </ul>
                </div>

                <form class="d-flex" id="formulario-navegador">
                 
                    
                    <div class="iniciar-sesion">
                      
                      <li class="iconoSesion dropdown">
                      
                        <a class="flechaSesion dropdown-toggle" data-bs-toggle="dropdown" href="#">
                          <div class="nombreSesion" style="color: #ffffff"><?php echo $session -> nombreyapellido;?></div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Administrador</a></li>
                          <li><a class="dropdown-item" href="<?php echo base_url('')?>/Usuario_controller/logout">Cerrar Sesion</a></li>
                      
                        </ul>
                      </li>

                      <a href="<?php echo base_url('sesion') ?>" target="_blank"></a>
                    </div>
                </form>
              </div>
            </nav>
     
            <?php elseif(session()->logueado == 'true' && session()->rango == '1'): ?>
          
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
              <div class="container-fluid">
                <a href="index"><img class="logo" src="assets/img/logo-vegetarian1.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  
                <div class="collapse navbar-collapse" id="mynavbar">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index') ?>">Inicio</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos') ?>">Productos</a>
                    </li>

                
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('nosotros') ?>">Nosotros</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('contacto') ?>">Contacto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('comercializacion') ?>">Comercializacion</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('carrito') ?>">Carrito</a>
                    </li>

                    <!-- condicion php -->
                    
                  </ul>

                  
                  
                  <form class="d-flex" id="formulario-navegador">
                   
                    
                    <div class="iniciar-sesion">
                      <li class="iconoSesion dropdown">
                      
                        <a class="flechaSesion " data-bs-toggle="dropdown" href="#">
                          <div class="nombreSesion" style="color: #ffffff"><?php echo $session -> perfil_id;?></div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                        </a>
                        <ul class="dropdown-menu">
                        
                          <li><a class="dropdown-item" href="<?php echo base_url('')?>/Usuario_controller/logout">Cerrar Sesion</a></li>
                      
                        </ul>
                      </li>

                      <a href="<?php echo base_url('sesion') ?>" target="_blank"></a>
                    </div>

                    <input class="form-control me-2" type="text" placeholder="¿Que estas Buscando?">
                    <button id="boton-buscar" class="btn btn-primary" type="button">Buscar</button>

                  </form>
                </div>
              </div>
            </nav>
                  
          
            <?php else: ?>
          
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
              <div class="container-fluid">
                <a href="index"><img class="logo" src="assets/img/logo-vegetarian1.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  
                <div class="collapse navbar-collapse" id="mynavbar">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index') ?>">Inicio</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos') ?>">Productos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('nosotros') ?>">Nosotros</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('contacto') ?>">Contacto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('comercializacion') ?>">Comercializacion</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login') ?>">Iniciar Sesion</a>
                    </li>
                    <!-- condicion php -->
                    <div class="iniciar-sesion">
                      
                    </div>
                  </ul>
                  
                  <form class="d-flex" id="formulario-navegador">
                   
                    <input class="form-control me-2" type="text" placeholder="¿Que estas Buscando?">
                    <button id="boton-buscar" class="btn btn-primary" type="button">Buscar</button>
                  </form>
                </div>
              </div>
            </nav>
            <?php endif; ?>
          </header>