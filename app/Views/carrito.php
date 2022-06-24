<body>
    

    <div class="contenedorCarrito2">
        <div class="containerCarrito">
            <div class="consultasdepersonas"><br>
                <h2 class=" verlasconsultas text-center ">CARRITO DE COMPRAS</h2>
            <div class="row">
                <div class="contenedor-tabla-carrito col-lg-12">
                    <div class="vaciarloscarros">

                        <a href="<?php echo base_url('productos') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square-fill icon-success" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                        </svg></a>
                    
                        <a class="btn btn-danger btn1 col-ml-2" href="<?php echo base_url('vaciarCarrito')?>"></i>Vaciar carrito</a>
                        <a class="btn btn-success btn1 col-ml-2" href="<?php echo base_url('misventas')?>"></i>Mis Compras</a>
                    </div>
                    
                    <table class="table table-bordered  "id="dataTable" cellspacing="0">
                        <thead class="cabezera text-center">
                            <th>#</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Operación</th>
                        </thead>
                        <tbody class="tablas">
                        

                            <?php 
                            $total = 0; //acumulador para mostrar el total
                            $i = 1;  //variable para contar los items del producto

                            foreach($cart->contents() as $carrito) { ?>
                            <tr>
                                <td class="text-center "><?php echo $i++; ?></td>
                                <td class="text-center"><?php echo $carrito['name'] ?></td>
                                <td class="text-center">$<?php echo $carrito['price'] ?></td>

                                <td class="text-center">
                                <a style="font-size: 20px;" class="btn btn-light pt-0" href="<?php echo base_url("restar_carrito?id=").$carrito["rowid"] ?>">-</a>
                                    <?php echo $carrito['qty']?>
                                <a style="font-size: 20px;" class="btn btn-light pt-0" href="<?php echo base_url("sumar_carrito?id=").$carrito["rowid"] ?>">+</a>   
                                </td>

                                <td class="text-center">$<?php echo $carrito['subtotal']; $total = $total + $carrito['subtotal']?></td>
                                

                                <td class="text-center"><a href="<?php  echo base_url('eliminarCarrito?rowid='.$carrito['rowid']); ?>" class="btn btn-danger pt-0">Eliminar</a></td>


                            <?php } ?> 
                            </tr>
                        

                        </tbody>
                    </table>
                </div>
            </div>                  
                <div class="totalcompra">
                <h4>Total de compra: $ <?php echo $total ?> </h4>
                <br>
            <h4 class="text-center"><a href=" <?php echo base_url('comprar')?>" class="btn btn-success">Confirmar compra</a> </h4>
                </div>
        </div>
    </div>

</body>