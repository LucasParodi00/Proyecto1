
<body class="body">
    

    <div class="conteiner-base-inicio">
        <div class="conteiner-inicio">

            <form class="formulario-inicio-sesion" action="<?php echo base_url('/login')?>" method="POST"  >
                <h1>Bienvenido</h1>
                <span></span>
                    <div class="input-contenedor-sesion">
                    <i class="fa-solid fa-envelope icon"></i> 
                    <input name="usuario"type="text" placeholder="Usuario">  
                    </div>
                    <div class="input-contenedor-sesion">
                    <i class="fa-solid fa-key icon"></i>
                    <input name="password" type="password" placeholder="Contraseña">  
                    </div>
                    <input type="submit" value="Iniciar" class="button">
                    <?php if(isset ($validation)){ 
                        echo $validation -> listErrors(); 
                    }?>
                    <?php if(isset ($error)){ ?>
                        <div class="errors2">
                        <?php echo $error; ?> 
                        </div>
                    <?php }?>
                    <p>Al registrarte, aceptas nuestras Condiciones de uso y Politica de privacidad</p>
                    <p>¿No tenes una cuenta? <a class="link" href="<?php echo base_url('registro')?>">Registrate</a></p>
                </div>

            </form>

        </div>
    </div>
</body>