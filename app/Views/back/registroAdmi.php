<div class="containerProductos">
    <div class="tituloIngresoProducto">
        <h1>REGISTRAR UN USUARIO</h1>
    </div>

    <span class="spanProductos"></span>

    <form class="formularioProductos" method="POST" action="<?php echo base_url('/registro2') ?>" >

    <div class="contenedorImput">
        <label for="Productos">CUIT</label>
        <input type="number"placeholder="CUIT"  name="cuit" value="<?= old('cuit') ?>"> 
    </div>

    <div class="contenedorImput">
        <label for="Seccion">Usuario</label>
        <input type="text" placeholder="Nombre de Usuario" name="usuario" value="<?= old('usuario') ?>">  
    </div>

    <div class="contenedorImput">
        <label for="descripcion">Nombre y Apellido</label>
        <input type="text" placeholder="Nombre y Apellido" name="nomyape" value="<?= old('nomyape') ?>" > 
    </div>

    <div class="contenedorImput">
        <label for="Precio">Correo Electronico</label>
        <input type="text" placeholder="Correo Electronico" name="email" value="<?= old('email') ?>">  
    </div>

    <div class="contenedorImput">
        <label for="Precio">Contraseña</label>
        <input type="password" placeholder="Contraseña" name="password" > 
    </div>

    <div class="contenedorImput">
        <label for="Precio">Telefono</label>
        <input type="text" placeholder="Telefono" name="tel" value="<?= old('tel') ?>" > 
    </div>

    <div class="contenedorImput">
        <label for="Precio">Localidad</label>
        <input type="text" placeholder="Localidad" name="localidad" value="<?= old('localidad') ?>"> 
    </div>
    
    <div class="botonImputProducto"><input class="botonCargarProducto" type="submit"  value="Registrar" > </div>


                         <?php 
                            if($validation){
                                echo $validation ->listErrors();
                            }
                         ?>
    </form>
</div> 

