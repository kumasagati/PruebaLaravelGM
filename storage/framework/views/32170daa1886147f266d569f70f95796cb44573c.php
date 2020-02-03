<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/images/favicon.png')); ?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/images/favicon.png')); ?>" type="image/x-icon" />
    <title>Universal - Premium Admin Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/fontawesome.css')); ?>">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/themify.css')); ?>">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/bootstrap.css')); ?>">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/style.css')); ?>">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/responsive.css')); ?>">

</head>

<body>

<!-- Loader starts -->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- Loader ends -->

<!--page-wrapper Start-->
<div class="page-wrapper">
    <div class="container-fluid">
        <!--login page start-->
        <div class="authentication-main">
            <div class="row">
                <div class="col-md-4 p-0">
                    <div class="auth-innerleft">
                        <div class="text-center">
                            <img src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/images/logo-login.png')); ?>" class="logo-login" alt="">
                            <hr>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-facebook txt-fb" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-google-plus txt-google-plus" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-twitter txt-twitter" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-linkedin txt-linkedin" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 p-0">
                    <div class="auth-innerright">
                        <div class="authentication-box">
                            <h4>LOGIN</h4>
                            <h6>Ingresa tu numero de documento y tu contraseña para continuar.</h6>
                            <div class="card mt-4 p-4 mb-0">
                                <?php echo Form::open(['route' => ['login'],'method' => 'POST','id' => 'form_login', 'class' => 'theme-form']); ?>

                                    <div class="form-group">
                                        <label class="col-form-label pt-0"><b>Documento</b></label>
                                        <input type="text" name="usu_document" class="form-control form-control-lg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><b>Contraseña</b></label>
                                        <input type="password" name="usu_password" class="form-control form-control-lg" required>
                                    </div>
                                    <div class="checkbox p-0">
                                        <input id="remember" name="remember" type="checkbox">
                                        <label for="remember">Recuerdame</label>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div id="validation_results">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-row mt-3 mb-0">
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-secondary-gradien">LOGIN</button>
                                        </div>
                                    </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--login page end-->
    </div>
</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/jquery-3.2.1.min.js')); ?>"></script>

<!-- Bootstrap js-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/bootstrap/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/bootstrap/bootstrap.js')); ?>"></script>

<!-- Theme js-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/script.js')); ?>"></script>

<!-- Scripts -->
<?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
<script src="<?php echo e(asset('js/aplication.js')); ?>"></script>

</body>

</html><?php /**PATH D:\Kuma\MAMP\htdocs\PruebaLaravelGM\resources\views/auth/login.blade.php ENDPATH**/ ?>