<div class="container_panel"> 

    <div class="container_panel2"> 

        <div class="titulo_panel">
            <p>PANEL DE USUARIOS DADOS DE BAJA</p>
        </div>
        <span class="spanPanel"></span>
        <div class="cargarUsuario">
            <div class="volverInicio">
            <a href="<?php echo base_url('/panel') ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square-fill icon-success" viewBox="0 0 16 16">
            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg></a>
            </div>
            
            
        </div>
        <div class="panel mt-4">
            <table class="table ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>CUIT</th>
                    <th>Nombre y Apellido</th>
                    <th>Usuario</th> 
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Localidad</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($usuarios as $usuario) : 
                        if($usuario['baja']== 1){ ?>
                        <tr>
                            <td> <?= $usuario['id']?> </td>
                            <td> <?= $usuario['cuit'] ?> </td>
                            <td> <?= $usuario['nombreyapellido'] ?> </td>
                            <td> <?= $usuario['perfil_id'] ?> </td>
                            <td> <?= $usuario['email'] ?> </td>
                            <td> <?= $usuario['telefono'] ?> </td>
                            <td> <?= $usuario['localidad'] ?> </td> 
                            <td>

                              
                                <a class="btn btn-danger" id="botonEliminarP" href="<?=base_url('restaurar/'.$usuario['id']);?>" class="botonEliminar" type="button" onclick="return ConfirmDelete()">Restaurar </a>

                            </td>
                        </tr>
                    <?php } endforeach ?>    
                </tbody>
            </table>
        </div>

    </div>
</div> 

<script type="text/javascript">
    function ConfirmDelete(){
        var respuesta = confirm("¿Seguro que desea restaurar el Usuario?");

        if(respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>