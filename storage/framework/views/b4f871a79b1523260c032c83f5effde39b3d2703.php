<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Agregar Clasificacion</h3>
                    <small>En esta seccion se agregan nuevas categorias de medicamentos.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" id="form_add_cat">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col">
                                    <label for="cat_name"><b>Nombre de Clasificación</b></label>
                                    <input type="text" name="cat_name" id="cat_name" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div id="validation_results"></div>
                                </div>
                            </div>
                            <br>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary-gradien">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuma\MAMP\htdocs\PruebaLaravelGM\resources\views/Categories/insert.blade.php ENDPATH**/ ?>