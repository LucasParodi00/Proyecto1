
    
 


 

<div class="containerProductos">
    <div class="tituloIngresoProducto">
        <h1>REGISTRAR UN NUEVO USUARIO</h1>
    </div>

    <span class="spanProductos"></span>
    
    <form class="formularioProductos" method="POST" action="<?php echo base_url('/actualizar') ?>" >

        <input type="hidden" name="id" value="<?=$usuario['id']?>">

        <div class="contenedorImput">
            <label for="Productos">CUIT</label>
            <input type="number"placeholder="CUIT"  readonly name="cuit" value="<?=$usuario['cuit'] ?>"> 
        </div>

        <div class="contenedorImput">
            <label for="Seccion">Usuario</label>
            <input type="text" placeholder="Nombre de Usuario" readonly name="usuario" value="<?=$usuario['perfil_id'] ?>">  
        </div>

        <div class="contenedorImput">
            <label for="descripcion">Nombre y Apellido</label>
            <input type="text" placeholder="Nombre y Apellido" readonly name="nomyape" value="<?=$usuario['nombreyapellido'] ?>" > 
        </div>

        <div class="contenedorImput">
            <label for="Precio">Correo Electronico</label>
            <input type="text" placeholder="Correo Electronico" readonly name="email" value="<?=$usuario['email'] ?>">  
        </div>

        <div class="contenedorImput">
            <label for="Precio">Telefono</label>
            <input type="text" placeholder="Telefono" readonly name="tel" value="<?=$usuario['telefono'] ?>" > 
        </div>

        <div class="contenedorImput">
            <label for="Precio">Localidad</label>
            <input type="text" placeholder="Localidad" readonly name="localidad" value="<?=$usuario['localidad'] ?>"> 
        </div>

        <div class="contenedorImput">
        <label for="Seccion">Seccion</label>
        <select class="select" name="rango" id="">
            <option selectd disabled="">Selecciona una Seccion</option>
            <option value="1">Usuario</option>
            <option value="2">Administrador</option>
        </select>


        <!-- <input type="text" placeholder="Seccion" name="seccion" value="<?= old('seccion') ?>" > -->
    </div>
        <div class="botonImputProducto"><input class="botonCargarProducto" type="submit"  value="Guardar" > </div>

    </form>
</div>
















 
