<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Detalles de Medicamento</h3>
                    <small>En esta seccion se muestra la informacion detallada de un medicamento.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php $__currentLoopData = $orm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="blog-single">
                        <div class="blog-box blog-details">
                            <div class="row justify-content-center">
                                <img src="<?php echo e(asset($m->med_image)); ?>" class="img-fluid" alt="blog-main">
                            </div>
                            <div class="blog-details">
                                <h4><?php echo e($m->med_name); ?></h4>
                                <small>Principios Activos: <?php echo e($m->med_actives_components); ?></small><br>
                                <small>Clasificacion: <a href="<?php echo e(route('categories.show', $m->cat_id)); ?>"><?php echo e($m->cat_name); ?></a></small>
                                <div class="single-blog-content-top">
                                <p><?php echo e($m->med_description); ?></p>
                                <br>
                                <h5>Indicaciones</h5>
                                <p><?php echo e($m->med_indications); ?></p>
                                <br>
                                <h5>Contraindicaciones</h5>
                                <p><?php echo e($m->med_contraindications); ?></p>
                                <br>
                                <h5>Reacciones Adversas</h5>
                                <p><?php echo e($m->med_adverse_reactions); ?></p>
                                <br>
                                <h5>Dosificacion</h5>
                                <p><?php echo e($m->med_dosage); ?></p>
                                <br>
                                <h5>Farmacocinetica</h5>
                                <p><?php echo e($m->med_pharmacokinetics); ?></p>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuma\MAMP\htdocs\PruebaLaravelGM\resources\views/Medicines/detail.blade.php ENDPATH**/ ?>