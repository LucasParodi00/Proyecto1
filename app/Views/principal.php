

 

    <section class="img-blur">
        <img src="assets/img/fondo.jpg" alt="">
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    
    <div class="img-inicio">
        <img src="assets/img/fondo-cel.jpg" alt="">
    </div>

<!-- contenido -->
        
  <div class="conteiner-base ">
   <div class="conteiner">
        

            <div class="otros-productos">
              <div class="box-productos">
                      <img src="assets/img/galeria/6.jpg">
                      <div class="capa">
                          <h2>Bombitas de verdura</h2>
                      </div>
              </div>

              <div class="box-productos">
                  
                      <img src="assets/img/galeria/7.jpg">
                      <div class="capa">
                          <h2>Canastitas de cebolla y queso </h2>
                      </div>
                  
              </div>

              <div class="box-productos">
                
                      <img src="assets/img/galeria/8.jpg">
                      <div class="capa">
                          <h2>Medallones sin TACC </h2>
                      </div>
                 
              </div>
              
              <div class="box-productos">
                 
                      <img src="assets/img/productos/falafel.jpg">
                      <div class="capa">
                          <h2>Simplemente, Falafel</h2>
                      </div>
                
              </div>
              
              <div class="box-productos">
                  
                      <img src="assets/img/productos/medallones de verdura.jpg">
                      <div class="capa">
                          <h2>Medallones de verduras</h2>
                      </div>
                 
              </div>
            </div>
       
            
          
            <div class="aboutme-general">
                <!-- About me -->
                <div class="about-me_conteiner" id="about-conteiner">
                    
                    <div class="contenedor-img" id="box-about"> 
                        <a href="nosotros"><img class="about-img" src="assets/img/About Me/chef-info.png" alt="VEGETARIAN"></a>
                    </div>
                    <div class="aboutme_descripcion">
                        <p>Somos un grupo de personas que esta dispuesta a ofrecerte una amplia seleccion de comidas saludables, para que puedas cuidar tu cuerpo como se lo merece.</p>
                    </div>

                    <!--<img class="img-about"  src="../public/assets/img/banner-about-me.jpg" alt="">-->
                </div>
                <!--Fin del About Me-->   
        
                <!-- CONTADOR -->
                <div class="contenedor-contador">

                    <div class="item">
                        <span class=" fa-solid fa-mortar-pestle"></span>
                        <span class="cantidad" id="cont1">0</span>
                        <span class="seguidores">Vendido</span>
                    </div>
                    <div class="item">
                        <span class="fa-solid fa-user"></span>
                        <span class="cantidad" id="cont2">0</span>
                        <span class="seguidores">Clientes</span>
                    </div>
                   
                    <div class="item">
                        <span class="fa fa-instagram"></span>
                        <span class="cantidad" id="cont3">0</span>
                        <span class="seguidores">Seguidores</span>
                    </div>

                    <script>
                        let cont1=document.getElementById('cont1'),
                            cont2=document.getElementById('cont2'),
                            cont3=document.getElementById('cont3')
                        let cant1=92, cant2=0, cant3=0,
                        time=25

                        let tiempo1 = setInterval (() => {
                            cont1.textContent=cant1+=10

                            if(cant1 === 13792){
                                clearInterval(tiempo1)
                            }
                        }, 5);

                        let tiempo2 = setInterval (() => {
                            cont2.textContent=cant2+=2

                            if(cant2 === 3136){
                                clearInterval(tiempo2)
                            }
                        }, 1);

                        let tiempo3 = setInterval (() => {
                            cont3.textContent=cant3+=3

                            if(cant3 === 5790){
                                clearInterval(tiempo3)
                            }
                        }, 1);


                    </script>


                </div>
            </div>                    

     
                <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                          
                           
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/carrusel/img-carrusel2.jpg"  object-fit: cover alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/carrusel/img-carrusel3.jpg" alt="" >
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/fondo.jpg" alt="" >
                            </div>
                         
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                </div>

                <div id="demo2" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo2" data-slide-to="0" class="active"></li>
                            <li data-target="#demo2" data-slide-to="1"></li>
                            <li data-target="#demo2" data-slide-to="2"></li>
                            
                           
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/carrusel/img-carrusel1-cel.jpg"  object-fit: cover alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/carrusel/img-carrusel2-cel.jpg" alt="" >
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/carrusel/img-carrusel3-cel.jpg" alt="" >
                            </div>
                           
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo2" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                </div>
                
             


         <!-- /*Cierre de conteiner*/-->
  </div>
</div>
           

