

<?php ?>

<div class="containerProductos">
    <form class="formularioProductos" method="" action="">

        <textarea style="border-radius: 10px; max-width: 1140px" hidden cols="130" rows="5" name="pedido" id="pedido" readonly value=""><?php echo $wasap?></textarea>

        <div class="contenedorImput">
            <label for="Nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo session('nombreyapellido') ?>">
        </div>

        <div class="contenedorImput">
            <label for="Tel">Telefono</label>
            <input type="text" name="telefono" id="telefono" value="<?php echo session('telefono') ?>">
        </div>

        <div class="contenedorImput">
            <label for="Direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" value="<?php ?>">
        </div>

        <div class="contenedorImput">
            <label for="Interseccion">Entre Calles</label>
            <input type="text" name="calles" id="calles" value="">
        </div>        
        
        <div class="contenedorImput">
            <label for="Monto">Monto</label>
            <input type="text" name="monto" id="monto" readonly value=" $ <?php echo $monto ?>">
        </div>

        <div class="contenedorImput">
            <label for="Monto">Detalles</label>
            <input type="text" name="monto" id="detalles" placeholder="Por ejemplo: 'sin queso', 'sin cebolla', etc..." value="">
        </div>

    </form>

    <a id="send" href="<?php echo base_url('comprar')?>" class="btn btn-success">CONFIRMAR COMPRA</a>
</div>



<script>
    const evento = document.getElementById('send')
    const enviarFormulario =() => {
        let nombre = document.getElementById('nombre').value;
        let telefono = document.getElementById('telefono').value;
        let direccion = document.getElementById('direccion').value;
        let calles = document.getElementById('calles').value;
        let pedido = document.getElementById('pedido').value;
        let monto = document.getElementById('monto').value;
        let detalles = document.getElementById('detalles').value;
        let numero = 543794409720;

        var win = window.open(`https://wa.me/${numero}?text=Pedido%20de:%20*${nombre}*%0A%0A${pedido}%0AMonto:%20*${monto}*%0A%0ADetalles:%20_${detalles}_%0ADireccion:%20*${direccion}*%0AEntre%20calles:%20*${calles}*`,'_blank');

    }

    evento.addEventListener('click', enviarFormulario)
</script>