<div class="containerProductos">
    <div class="tituloIngresoProducto">
        <h1>CONSULTA</h1> 
    </div> 

    <?php if ($consultas['contestado'] == '1') { ?>
        <div class="volverInicio">
            <a href="<?php echo base_url('contestados') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square-fill icon-success" viewBox="0 0 16 16">
            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg></a>
        </div>
    <?php }?>

    <?php if ($consultas['contestado'] == '0') { ?>
        <div class="volverInicio">
            <a href="<?php echo base_url('consultas') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square-fill icon-success" viewBox="0 0 16 16">
            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg></a>
        </div>
    <?php }?>

    <span class="spanProductos"></span>
    <form class="formularioProductos" method="POST" action="<?php echo base_url('/actualizarConsulta') ?>" >

        <input type="hidden" name="id" value="<?=$consultas['id']?>">

        <div class="contenedorImput">
            <label for="Productos">Nombre</label>
            <input type="text" readonly value="<?=$consultas['nombreCompleto'] ?>" >
        </div>

        <div class="contenedorImput">
            <label for="Seccion">Email</label>
            <input type="text" readonly  value="<?=$consultas['email'] ?>" >
        </div>

        <div class="contenedorImput">
            <label for="Precio">Telefono</label>
            <input type="text" readonly step="any" value="<?=$consultas['telefono'] ?>" >
        </div>

        <div class="contenedorImput">
            <label for="Precio">Asunto</label>
            <input type="text" readonly value="<?=$consultas['asunto'] ?>" >
        </div>

        <div class="contenedorImput">
            <label for="mensaje">Mensaje</label>
            
            <textarea  style="border-radius: 10px" readonly  cols="136" rows="7" ><?=$consultas['mensaje'] ?></textarea>
        </div>
        <?php if ($consultas['contestado'] == '0') { ?>
        <div class="contenedorImput">
            <label for="descripcion">Respuesta</label>
            <textarea style="border-radius: 10px" name ="respuesta" cols="136" rows="10" value="Respuesta"></textarea>
        </div>

        <div class="botonImputProducto"><input class="botonCargarProducto" type="submit"  value="Cargar" > </div>
        <?php }?>

        <?php if ($consultas['contestado'] == '1') { ?>
        <div class="contenedorImput">
            <label for="descripcion">Respuesta</label>
            <textarea style="border-radius: 10px" readonly name ="respuesta" cols="136" rows="10" value="Respuesta"><?=$consultas['respuesta'] ?></textarea>
        </div>
        <?php }?>
        

    </form>
</div>