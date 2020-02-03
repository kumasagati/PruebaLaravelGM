<?php $__env->startSection('contenido'); ?>
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Dashboard
                        <small>Inicio del panel de administrador</small>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->

    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-sm-6">
                <div class="card default-widget-count">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3 left b-primary">
                                <div class="bg bg-primary"></div>
                                <i class="icofont icofont-prescription"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <h4 class="mt-0 counter font-primary"><?php echo e($cantidad_clasificaciones); ?></h4>
                                <span>Cantidad de Clasificaciones</span>
                                <i class="icofont icofont-prescription icon-bg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6">
                <div class="card default-widget-count">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3 left b-secondary">
                                <div class="bg bg-secondary"></div>
                                <i class="icofont icofont-capsule"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <h4 class="mt-0 counter font-secondary"><?php echo e($cantidad_medicamentos); ?></h4>
                                <span>Cantidad de Medicamentos</span>
                                <i class="icofont icofont-capsule icon-bg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6">
                <div class="card default-widget-count">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3 left b-success">
                                <div class="bg bg-success"></div>
                                <i class="icofont icofont-ui-user"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <h4 class="mt-0 counter font-success"><?php echo e($cantidad_usuarios); ?></h4>
                                <span>Cantidad de Usuarios</span>
                                <i class="icofont icofont-ui-user icon-bg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuma\MAMP\htdocs\PruebaLaravelGM\resources\views/Dashboard/dashboard.blade.php ENDPATH**/ ?>