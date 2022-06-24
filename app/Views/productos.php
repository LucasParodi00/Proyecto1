

 <div class="conteiner-base">
   <div class="conteiner">

    <div class="contenedor-formas">
        <input type="checkbox" id="btn-modal">
        <label for="btn-modal" class="lbl-modal">Ten en cuenta que los pedidos tardan de 4 a 5 dias. </label>
    </div>

            <div id="accordion">

                <div class="card1">
                    <div class="card-header" >

                        <a class="btn" id="boton-combo" data-bs-toggle="collapse" href="#collapseOne">
                             C O M B O S
                        </a>

                    </div>

                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body" id="productos-pag">
                            <div id="container-descripcion">
                                <?php foreach ($productos as $producto) : ?> 
                                    <?php if($producto['seccion'] == 'Combos' && $producto['baja'] == null){?>
                                        <div id="venta">
                                            <b> - <?php echo $producto['nombreProducto']?> - </b>
                                            <i> <?php echo $producto['descripcion']?></i>

                                            <div class="precioProductoI">
                                                <i> -> $ <?php echo $producto['precio']?></i>                                        
                                                <?php if(session()->logueado == 'true' && session()->rango == 1){
                                                    helper('form');
                                                    echo form_open('Carrito_Controller/agregar_carrito', "id= 'jq'");
                                                    echo form_hidden('id', $producto['id']);
                                                    echo form_hidden('nombre', $producto['nombreProducto']);
                                                    echo form_hidden('precio', $producto['precio']);
                                                    echo form_submit('agregar_carrito', 'Agregar al carrito', 'onClick ="agregarProducto (event)" data-id="5"  class="btn ml-3 btn-success" id="btnCompra" ' );  
                                                    echo form_close();
                                                } ?>
                                            </div>
                                        </div> 
                                    <?php } ?>
                                <?php endforeach ?> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card1">
                    <div class="card-header">
                        <a class="collapsed btn" id="boton-combo" data-bs-toggle="collapse" href="#collapseTwo">
                            T A R T A S
                        </a>
                    </div>

                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body" id="productos-pag">

                            <?php foreach ($productos as $producto) : ?> 
                                <?php if($producto['seccion'] == 'Tartas' && $producto['baja'] == null){?>
                                    <div id="venta">
                                        <b> - <?php echo $producto['nombreProducto']?> - </b>
                                        <i> <?php echo $producto['descripcion']?></i>

                                        <div class="precioProductoI">
                                            <i> -> $ <?php echo $producto['precio']?></i>                                        
                                            <?php if(session()->logueado == 'true' && session()->rango == 1){
                                                helper('form');
                                                echo form_open('Carrito_Controller/agregar_carrito', "id= 'jq'");
                                                echo form_hidden('id', $producto['id']);
                                                echo form_hidden('nombre', $producto['nombreProducto']);
                                                echo form_hidden('precio', $producto['precio']);
                                                echo form_submit('agregar_carrito', 'Agregar al carrito', 'onClick ="agregarProducto (event)" data-id="5"  class="btn ml-3 btn-success" id="btnCompra" ' );  
                                                echo form_close();
                                            } ?>
                                        </div>
                                    </div> 
                                <?php } ?>
                            <?php endforeach ?> 
                        </div>
                    </div>
                </div>

                    <div class="card1">
                        <div class="card-header">
                            <a class="collapsed btn" id="boton-combo" data-bs-toggle="collapse" href="#collapseThree">
                            M E D A L L O N E S
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body" id="productos-pag">
                                <?php foreach ($productos as $producto ) : ?> 
                                <?php if($producto['seccion'] == 'Medallones'  && $producto['baja'] == null){?>
                                    <div id="venta">
                                        <b> - <?php echo $producto['nombreProducto']?> - </b>
                                        <i> <?php echo $producto['descripcion']?></i>

                                        <div class="precioProductoI">
                                            <i> -> $ <?php echo $producto['precio']?></i>                                        
                                            <?php if(session()->logueado == 'true' && session()->rango == 1){
                                                helper('form');
                                                echo form_open('Carrito_Controller/agregar_carrito', "id= 'jq'");
                                                echo form_hidden('id', $producto['id']);
                                                echo form_hidden('nombre', $producto['nombreProducto']);
                                                echo form_hidden('precio', $producto['precio']);
                                                echo form_submit('agregar_carrito', 'Agregar al carrito', 'onClick ="agregarProducto (event)" data-id="5"  class="btn ml-3 btn-success" id="btnCompra" ' );  
                                                echo form_close();
                                            } ?>
                                        </div>
                                    </div> 
                                <?php } ?>
                                <?php endforeach ?>
                            </div>        
                        </div>
                    </div>

                    <div class="card1">
                        <div class="card-header">
                            <a class="collapsed btn" id="boton-combo" data-bs-toggle="collapse" href="#collapseFour">
                            B O M B A S
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body" id="productos-pag">
                                <?php foreach ($productos as $producto) : ?> 
                                <?php if($producto['seccion'] == 'Bombas'  && $producto['baja'] == null){?>
                                    <div id="venta">
                                        <b> - <?php echo $producto['nombreProducto']?> - </b>
                                        <i> <?php echo $producto['descripcion']?></i>

                                        <div class="precioProductoI">
                                            <i> -> $ <?php echo $producto['precio']?></i>                                        
                                            <?php if(session()->logueado == 'true' && session()->rango == 1){
                                                helper('form');
                                                echo form_open('Carrito_Controller/agregar_carrito', "id= 'jq'");
                                                echo form_hidden('id', $producto['id']);
                                                echo form_hidden('nombre', $producto['nombreProducto']);
                                                echo form_hidden('precio', $producto['precio']);
                                                echo form_submit('agregar_carrito', 'Agregar al carrito', 'onClick ="agregarProducto (event)" data-id="5"  class="btn ml-3 btn-success" id="btnCompra" ' );  
                                                echo form_close();
                                            } ?>
                                        </div>
                                    </div> 
                                <?php } ?>
                                <?php endforeach ?>   
                            </div>
                        </div>
                    </div>



                    <div class="card1">
                        <div class="card-header">
                            <a class="collapsed btn" id="boton-combo" data-bs-toggle="collapse" href="#collapseFive">
                            M I L A N E S A
                            </a>
                        <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body" id="productos-pag">

                                <?php foreach ($productos as $producto ) : ?> 
                                <?php if($producto['seccion'] == 'Milanesa'  && $producto['baja'] == null){?>
                                    <div id="venta">
                                        <b> - <?php echo $producto['nombreProducto']?> - </b>
                                        <i> <?php echo $producto['descripcion']?></i>

                                        <div class="precioProductoI">
                                            <i> -> $ <?php echo $producto['precio']?></i>                                        
                                            <?php if(session()->logueado == 'true' && session()->rango == 1){
                                                helper('form');
                                                echo form_open('Carrito_Controller/agregar_carrito', "id= 'jq'");
                                                echo form_hidden('id', $producto['id']);
                                                echo form_hidden('nombre', $producto['nombreProducto']);
                                                echo form_hidden('precio', $producto['precio']);
                                                echo form_submit('agregar_carrito', 'Agregar al carrito', 'onClick ="agregarProducto (event)" data-id="5"  class="btn ml-3 btn-success" id="btnCompra" ' );  
                                                echo form_close();
                                            } ?>
                                        </div>
                                    </div> 
                                <?php } ?>
                                <?php endforeach ?>

                            </div>
                        </div>
                    </div>

                    <div class="card1">
                        <div class="card-header">
                            <a class="collapsed btn" id="boton-combo" data-bs-toggle="collapse" href="#collapseSix">
                            P I Z Z A S
                            </a>
                        </div>

                        <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body" id="productos-pag">
                                
                                <?php foreach ($productos as $producto ) : ?> 
                                <?php if($producto['seccion'] == 'Pizza' && $producto['baja'] == null){?>
                                    <div id="venta">
                                        <b> - <?php echo $producto['nombreProducto']?> - </b>
                                        <i> <?php echo $producto['descripcion']?></i>

                                        <div class="precioProductoI">
                                            <i> -> $ <?php echo $producto['precio']?></i>                                        
                                            <?php if(session()->logueado == 'true' && session()->rango == 1){
                                                helper('form');
                                                echo form_open('Carrito_Controller/agregar_carrito', "id= 'jq'");
                                                echo form_hidden('id', $producto['id']);
                                                echo form_hidden('nombre', $producto['nombreProducto']);
                                                echo form_hidden('precio', $producto['precio']);
                                                echo form_submit('agregar_carrito', 'Agregar al carrito', 'onClick ="agregarProducto (event)" data-id="5"  class="btn ml-3 btn-success" id="btnCompra" ' );  
                                                echo form_close();
                                            } ?>
                                        </div>
                                    </div> 
                                <?php } ?>
                                <?php endforeach ?>
                                
                            </div>
                        </div>
                    </div>


                    <div class="card1">
                        <div class="card-header">
                            <a class="collapsed btn" id="boton-combo" data-bs-toggle="collapse" href="#collapseSeven">
                            F A L A F E L
                            </a>
                        </div>

                        <div id="collapseSeven" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body" id="productos-pag">

                                <?php foreach ($productos as $producto ) : ?> 
                                <?php if($producto['seccion'] == 'Falafel'  && $producto['baja'] == null){?>
                                    <div id="venta">
                                        <b> - <?php echo $producto['nombreProducto']?> - </b>
                                        <i> <?php echo $producto['descripcion']?></i>

                                        <div class="precioProductoI">
                                            <i> -> $ <?php echo $producto['precio']?></i>                                        
                                            <?php if(session()->logueado == 'true' && session()->rango == 1){
                                                helper('form');
                                                echo form_open('Carrito_Controller/agregar_carrito', "id= 'jq'");
                                                echo form_hidden('id', $producto['id']);
                                                echo form_hidden('nombre', $producto['nombreProducto']);
                                                echo form_hidden('precio', $producto['precio']);
                                                echo form_submit('agregar_carrito', 'Agregar al carrito', 'onClick ="agregarProducto (event)" data-id="5"  class="btn ml-3 btn-success" id="btnCompra" ' );  
                                                echo form_close();
                                            } ?>
                                        </div>
                                    </div> 
                                <?php } ?>
                                <?php endforeach ?>

                            </div>
                        </div>
                    </div>

                    <div class="card1">
                        <div class="card-header">
                            <a class="collapsed btn" id="boton-combo" data-bs-toggle="collapse" href="#collapseHeigth">
                            O T R O S 
                            </a>
                        </div>

                        <div id="collapseHeigth" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body" id="productos-pag">

                                <?php foreach ($productos as $producto ) : ?> 
                                <?php if($producto['seccion'] == 'Otros'  && $producto['baja'] == null){?>
                                    <div id="venta">
                                        <b> - <?php echo $producto['nombreProducto']?> - </b>
                                        <i> <?php echo $producto['descripcion']?></i>

                                        <div class="precioProductoI">
                                            <i> -> $ <?php echo $producto['precio']?></i>                                        
                                            <?php if(session()->logueado == 'true' && session()->rango == 1){
                                                helper('form');
                                                echo form_open('Carrito_Controller/agregar_carrito', "id= 'jq'");
                                                echo form_hidden('id', $producto['id']);
                                                echo form_hidden('nombre', $producto['nombreProducto']);
                                                echo form_hidden('precio', $producto['precio']);
                                                echo form_submit('agregar_carrito', 'Agregar al carrito', 'onClick ="agregarProducto (event)" data-id="5"  class="btn ml-3 btn-success" id="btnCompra" ' );  
                                                echo form_close();
                                            } ?>
                                        </div>
                                    </div> 
                                <?php } ?>
                                <?php endforeach ?>

                            </div>
                        </div>
                    </div>

            </div>
        </div>




        




<!-- /*Cierre del conteiner*/ -->
        </div>
   </div>

<script src="assets/js/jquery.min.js"> </script>

<script>

function agregarProducto (e){
    e.preventDefault();
    const formulario = e.target.parentElement;
    const formData = new FormData (formulario);
    fetch (formulario.action, {method:"POST", body: formData})
}

</script>
