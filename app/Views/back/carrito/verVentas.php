



<div class="contenedorVenta">

<?php foreach ($ventas as $v): ?>
            <div class="unaVenta">
                <div class="cabezeraMisProductos">
                    <div class="tituloVenta">
                        <p>Usuario:  <?php echo $v ['usuario'] ?></p>
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

        <?php  endforeach ?>
    
</div>








