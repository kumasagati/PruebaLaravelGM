<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Registrar Nuevo Usuario</h3>
                    <small>En esta seccion se registran nuevos usuarios.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <?php echo Form::open(['route' => ['register'],'method' => 'POST','id' => 'form_register']); ?>

                            <div class="row">
                                <div class="col">
                                    <label for="usu_name"><b>Nombre</b></label>
                                    <input type="text" name="usu_name" id="usu_name" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="usu_email"><b>Correo Electronico</b></label>
                                    <input type="email" name="usu_email" id="usu_email" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="usu_document"><b>Numero de Documento</b></label>
                                    <input type="text" name="usu_document" id="usu_document" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="usu_password"><b>Contraseña</b></label>
                                    <input type="password" name="usu_password" id="usu_password" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="repetir_pass"><b>Repetir Contraseña</b></label>
                                    <input type="password" name="usu_password_confirmation" id="usu_password_confirmation" class="form-control">
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
                                <button type="submit" class="btn btn-primary-gradien">Registrar</button>
                            </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuma\MAMP\htdocs\PruebaLaravelGM\resources\views/auth/register.blade.php ENDPATH**/ ?>