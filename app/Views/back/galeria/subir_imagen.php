
<body>
    
    <div class="container py-4">
    <?php $validation =  \Config\Services::validation(); ?>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <form method="POST" action="<?= base_url('cargarImagen') ?>" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    
                    <?php
                        if(session()->getFlashdata('success')):?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                                <?php echo session()->getFlashdata('success') ?>
                            </div>
                        <?php elseif(session()->getFlashdata('failed')):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                                <?php echo session()->getFlashdata('failed') ?>
                            </div>
                    <?php endif; ?>

                    <div class="contenedorImput">
                        <label for="Productos">Producto</label>
                        <input type="text" placeholder="Nombre del Producto" name="nombreImg" value="<?= old('nombreProducto') ?>" >
                    </div>
                    
                    <div class="card shadow">
                        <div class="card-header">
                            <h5 class="card-title">Subir Imagen</h5>
                        </div>

                        <div class="card-body p-4">
                        
                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">Imagen</label>
                                <input type="file" class="form-control <?php if($validation->getError('image')): ?>is-invalid<?php endif ?>" name="image"/>
                                <?php if ($validation->getError('image')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('image') ?>
                                    </div>                                
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Subir</button>
                        </div>
                    </div>
                </form>

                <?php
                    if(session()->getFlashdata('previewImage')):?>
                        <div class="form-group py-4">
                        <h5 class="py-2">Image Preview</h5>
                            <img src="<?php echo base_url('cargarImagen/'.session()->getFlashdata('previewImage'));?>" class="img-fluid" height="200px"/>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>