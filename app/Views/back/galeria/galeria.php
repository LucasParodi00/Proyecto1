<div class="conteiner-base">
        <div class="conteiner">   
            <h4 class="titulo-galeria"> NUESTROS PRODUCTOS </h4>
            <span class="linea"></span>

                <div class="galeriaProductos" style="flex-wrap: wrap;">
                    <?php foreach ($galeria as $img) : ?>
                    <div class="box-productos">
                        <img  src="<?php echo base_url('assets/uploads/'.$img['nombre'])?>">
                            <div class="capa">
                                <h2> <?php echo $img['nameImg'] ?></h2>
                            </div>
                    </div>
                    <?php endforeach ?>  
                </div>  
            

            <span class="linea2"></span>



        </div>
    </div>