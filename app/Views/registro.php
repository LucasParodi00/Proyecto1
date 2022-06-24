

<body class="body">
    


    <div class="conteiner-base-inicio">
        <div class="conteiner-inicio">      

                     
                    

                <form class="formulario-inicio-sesion"  method="POST" action="<?php echo base_url('/registro') ?>"> 
                
                    <h1>Registrate</h1>
                        <?php 
                            if($validation){
                                echo $validation ->listErrors();
                            }
                         ?>
                        <div class="input-contenedor-sesion">
                        <i class="fa-solid fa-address-card icon"></i> 
                        <input type="number"placeholder="CUIT"  name="cuit" value="<?= old('cuit') ?>">  
                        </div>
                        <!-- php-->
                       


                        <div class="input-contenedor-sesion">
                        <i class="fa-solid fa-user icon"></i> 
                        <input type="text" placeholder="Nombre de Usuario" name="usuario" value="<?= old('usuario') ?>">  
                        </div>
                        <!-- php-->
                       

                        <div class="input-contenedor-sesion">
                        <i class="fa-solid fa-user icon"></i> 
                        <input type="text" placeholder="Nombre y Apellido" name="nomyape" value="<?= old('nomyape') ?>" >  
                        </div>
                        <!-- php-->
                        

                        <div class="input-contenedor-sesion">
                        <i class="fa-solid fa-envelope icon"></i> 
                        <input type="text" placeholder="Correo Electronico" name="email" value="<?= old('email') ?>">  
                        </div>
                        <!-- php-->
                        

                        <div class="input-contenedor-sesion">
                        <i class="fa-solid fa-key icon"></i>
                        <input type="password" placeholder="Contraseña" name="password" >  
                        </div>
                        <!-- php-->
                       

                        <div class="input-contenedor-sesion">
                        <i class="fa-solid fa-phone icon"></i>
                        <input type="number"  placeholder="Telefono" name="tel" value="<?= old('tel') ?>" >  
                        </div>
                        <!-- php-->
                       

                        <div class="input-contenedor-sesion">
                        <i class="fa-solid fa-map-location-dot icon"></i> 
                        <input type="text" placeholder="Localidad" name="localidad" value="<?= old('localidad') ?>">  
                        </div>
                      

                        <input type="submit" value="Registrate" class="button">
                        <p>Al registrarte, aceptas nuestras Condiciones de uso y Politica de privacidad</p>
                        <p>¿Ya tienes una cuenta?<a class="link"></a></p>
                    
                </form>

        </div>
    </div>

</body> 