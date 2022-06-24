<div class="container_panel"> 

    <div class="container_panel2"> 

        <div class="titulo_panel">
            <p>PANEL DE CONSULTAS</p>
        </div>
        <span class="spanPanel"></span>
        <div class="cargarUsuario">
            <div class="volverInicio">
            <a href="<?php echo base_url('index') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square-fill icon-success" viewBox="0 0 16 16">
            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg></a>
            </div>
            
            <a class="btn btn-info" href="<?=base_url("contestados");?>">Mensajes Contestados</a>
        </div>
        <div class="panel mt-4">
            <table class="table ">
                <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Nombre y Apellido</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Asunto</th>
                    <th>Mensaje</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($consultas as $c) : 
                        if($c['contestado']== 0){ ?>
                        <tr>
                            <td> <?= $c['fecha']?> </td>
                            <td> <?= $c['nombreCompleto'] ?> </td>
                            <td> <?= $c['email'] ?> </td>
                            <td> <?= $c['telefono'] ?> </td>
                            <td> <div style="width: 200px; overflow: hidden;"> <?= $c['asunto'] ?> </div> </td>
                            <td> <div style="width: 450px; overflow: hidden;"><?= $c['mensaje'] ?></div> </td>
                            <td> 

                                <script type="text/javascript">
                                    function ConfirmDelete(){
                                        var respuesta = confirm("¿Seguro que desea eliminar el Usuario?");

                                        if(respuesta == true){
                                            return true;
                                        }else{
                                            return false;
                                        }
                                    }
                                </script>
                                
                                <a class="btn btn-danger pt-0 text-center" id="botonEliminarP" href="<?=base_url('mostrarConsulta/'.$c['id']);?>" class="botonEliminar" type="button" >Ver Consulta</a>

                            </td>
                        </tr>
                    <?php } endforeach ?>    
                </tbody>
            </table>
        </div>

    </div>
</div> 