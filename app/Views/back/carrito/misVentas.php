



<?php  ?>

<div class="contenedorVenta">
    <div class="cabezeraVentas">
        <h3>¡Gracias por su compra!</h3>
        <p> + Les recordamos que el tiempo de preparacion de su pedido llevara entre 4 o 5 dias. <br> + Si queres conocer nuestros meidos de pago y formas de envio, lo podes hacer en la seccion <b>Comercializacion</b> o mandando tu consulta el la seccion <b>Contacto</b>.  </p>
    </div>
    <?php foreach ($ventas as $v):  ?>

        <?php if (session('perfil_id') == $v['usuario']){?>

            
                <div class="unaVenta">
                    <div class="cabezeraMisProductos">
                        <div class="tituloVenta">
                            <p>Nombre y Apellido: <?php echo session('nombreyapellido') ?></p>
                        </div>
                        <div class="fechaCompra">
                            <p>Fecha: <?php echo $v ['fecha_venta']?> </p>
                        </div>
                    </div>
                    
                    <span id="spanVentas"></span>

                    <div class="cuerpoDescripcionCompra">
                        <table>
                                <thead>
                                    <tr>
                                        <th>Productos</th>
                                        <th><div id="subTotal">Precio</div></th>
                                        <th><div id="subTotal">Cant</div></th>
                                        <th><div id="subTotal">Sub Total</div></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <td> <div id="celdaProducto"> <i><?php echo $v ['descripcion_venta']?></i></div></td>
                                    <td> <i>  <?php echo $v ['precio']?></i> </td>
                                    <td> <i>  <?php echo $v ['cantidad']?></i> </td>
                                    <td> <div ><i><?php echo $v ['sub_total']?></i></div> </td>
                                </tbody>
                        </table>
                    </div>

                    <div class="totalCompra">
                        <p>TOTAL: $ <?php echo $v ['precio_total']?></p>
                    </div>
                </div>

        <?php  } ?>
    <?php endforeach  ?>
</div>