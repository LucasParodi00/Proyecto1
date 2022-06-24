
<div class="conteiner-base">
    <div class="conteiner">
        <div class="caja-formulario">
            <?php 
                if($validation){
                    echo $validation ->listErrors();
                }
                ?>
            <div class="formulario">
                <div class="formulario-contacto">
                    <h3>Contactanos</h3>
                    <form action=" <?php echo base_url('/cargarConsulta')?>" method="POST">
                        <p>
                            <label>Nombre Completo</label>
                            <input type="text" name="nombrecompleto">
                        </p>
                        <p>
                            <label>Correo Electronico</label>
                            <input type="text" name="email">
                        </p>
                        <p>
                            <label>Telefono</label>
                            <input type="text" name="telefono">
                        </p>
                        <p>
                            <label>Asunto</label>
                            <input type="text" name="asunto">
                        </p>
                        <p class="block">
                        <label>Mensaje</label> 
                            <textarea name="mensaje" rows="3"></textarea>
                        </p>
                        <p class="block">
                            <button>
                                ENVIAR
                            </button>
                            <input type="reset" value="Borrar información">
                        </p>
                    </form>
                </div>

                <div class="info-adicional">
                    <h4>Mas Informacion</h4>
                    <span class="division"></span>
                    <ul class="ul">
                        <li><i class="fas fa-map-marker-alt"></i> Teniente Ibañez 1638</li>
                        <li><i class="fas fa-phone"></i> 3794 - 409720</li>
                        <li><i class="fas fa-envelope-open-text"></i> lucasparodi09@outllok.com</li>
                    </ul>

                    <div class="horarios-atencion" >
                    <p>HORARIOS DE ATENCION</p>
                                <span class="division"></span>
                    <p>Lunes - Viernes:  <br> 08.00hs a 13.30hs</p>
                    <p>             18.00hs a 21.00hs</p>
                                <br>
                    <p>Sabado: <br> 08.00hs a 13.30hs</p>
                    </div>

                    <div class="horarios-atencion" >
                    <p>LUCAS IVAN PARODI</p>
                                <span class="division"></span>
                    <p>lucasparodi09@outlook.com</p>
                    <a href="https://www.instagram.com/lucasparodi07/" >@lucasparodi07</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>