<div class="containerProductos">
    <div class="tituloIngresoProducto">
        <h1>EDITAR PRODUCTO</h1> 
    </div> 

    <span class="spanProductos"></span>

    <form class="formularioProductos" method="POST" action="<?php echo base_url('/actualizarProducto') ?>" >

    <input type="hidden" name="id" value="<?=$productos['id']?>">

    <div class="contenedorImput">
        <label for="Productos">Producto</label>
        <input type="text" placeholder="Nombre del Producto" name="nombreProducto" value="<?=$productos['nombreProducto'] ?>" >
    </div>

    <div class="contenedorImput">
        <label for="Seccion">Seccion</label>
        <input type="text" placeholder="Seccion" name="seccion" value="<?=$productos['seccion'] ?>" >
    </div>

    <div class="contenedorImput">
        <label for="descripcion">Descipcion</label>
        <textarea style="border-radius: 10px" name="descripcion" placeholder="Descripcion del producto o combo"  cols="136" rows="2" value="<?= old('descripcion') ?>"></textarea>
        
    </div>

    <div class="contenedorImput">
        <label for="Precio">Precio</label>
        <input type="number" step="any" placeholder="Precio" name="precio" value="<?=$productos['precio'] ?>" >
    </div>

    <div class="contenedorImput">
        <label for="Precio">Stock</label>
        <input type="number"  placeholder="Stock" name="stock" value="<?=$productos['stock'] ?>" >
    </div>
    
    <div class="botonImputProducto"><input class="botonCargarProducto" type="submit"  value="Cargar" > </div>

    </form>
</div>