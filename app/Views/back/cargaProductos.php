
<div class="containerProductos">
    <div class="tituloIngresoProducto"> 
        <h1>INGRESO DE PRODUCTOS A LA BASE DE DATOS</h1>
    </div>

    <span class="spanProductos"></span>

    <form class="formularioProductos" method="POST" action="<?php echo base_url('/cargaProductos') ?>" >

    <div class="contenedorImput">
        <label for="Productos">Producto</label>
        <input type="text" placeholder="Nombre del Producto" name="nombreProducto" value="<?= old('nombreProducto') ?>" >
    </div>

    <div class="contenedorImput"> 
        <label for="Seccion">Seccion</label>
        <select class="select" name="seccion" id="">
            <option selectd disabled="">Selecciona una Seccion</option>
            <option value="Tartas">Tartas</option>
            <option value="Falafel">Falafel</option>
            <option value="Medallones">Medallones</option>
            <option value="Bombas">Bombas</option>
            <option value="Milanesa">Milanesas</option>
            <option value="Pizza">Pizzas</option>
            <option value="Otros">Otros</option>
            <option value="Combos">Combos</option>
        </select>


        <!-- <input type="text" placeholder="Seccion" name="seccion" value="<?= old('seccion') ?>" > -->
    </div>

    <div class="contenedorImput">
        <label for="descripcion">Descipcion</label>
        <textarea style="border-radius: 10px" name="descripcion" placeholder="Descripcion del producto o combo"  cols="136" rows="2" value="<?= old('descripcion') ?>"></textarea>
        
    </div>

    <div class="contenedorImput">
        <label for="Precio">Precio</label>
        <input type="number" step="any" placeholder="Precio" name="precio" value="<?= old('precio') ?>" >
    </div>

    <div class="contenedorImput">
        <label for="Precio">Stock</label>
        <input type="number"  placeholder="Stock" name="stock" value="<?= old('stock') ?>" >
    </div>

    <div class="botonImputProducto"><input class="botonCargarProducto" type="submit"  value="Cargar" > </div>


                         <?php 
                            if($validation){
                                echo $validation ->listErrors();
                            }
                         ?>
    </form>
</div>