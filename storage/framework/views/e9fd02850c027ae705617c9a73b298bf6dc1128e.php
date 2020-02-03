<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Listado de Clasificaciones de Medicamentos</h3>
                    <small>En esta seccion se muestra un listado de las clasificaciones de medicamentos.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-info" id="alert"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cantidad de Medicamentos</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $orc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($c->cat_name); ?></td>
                                            <td>2</td>
                                            <td>
                                                <?php echo Form::open(['route' => ['categories.destroy',$c->id],'method' => 'DELETE']); ?>

                                                <a href="#" class="btn-delete-cat" title="Borrar"><i class="icofont icofont-ui-close"></i></a>
                                                <a href="<?php echo e(route('categories.edit', $c->id)); ?>"><i class="icofont icofont-loop" title="Actualizar Informacion"></i></a>
                                                <a href="<?php echo e(route('categories.show', $c->id)); ?>"><i class="icofont icofont-open-eye" title="Ver Detalles"></i></a>
                                                <?php echo Form::close(); ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuma\MAMP\htdocs\PruebaLaravelGM\resources\views/Categories/view.blade.php ENDPATH**/ ?>