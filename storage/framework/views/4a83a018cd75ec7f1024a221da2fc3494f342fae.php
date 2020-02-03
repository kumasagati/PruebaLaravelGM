<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon"/>
    <title>Universal - Premium Admin Template</title>

    <!-- latest jquery-->
    <script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/jquery-3.2.1.min.js')); ?>" ></script>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/fontawesome.css')); ?> ">

    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/icofont.css')); ?>">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/themify.css')); ?>">

    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/flag-icon.css')); ?>">

    <!-- prism css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/prism.css')); ?>">

    <!-- Owl css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/themeforest/html_n_resources/assets/css/owlcarousel.css')); ?>">

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

    <!--Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/images/logo-light.png')); ?>" class="image-dark" alt=""/>
                    <img src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/images/logo-light-dark-layout.png')); ?>" class="image-light" alt=""/>
                </a>
            </div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input type="checkbox" id="sidebar-toggle" checked>
                        <span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li class="onhover-dropdown">
                        <div class="media  align-items-center">
                            <img class="align-self-center pull-right mr-2" src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/images/dashboard/user.png')); ?>" alt="header-user"/>
                            <div class="media-body">
                                <h6 class="m-0 txt-dark f-16">
                                    My Account
                                    <i class="fa fa-angle-down pull-right ml-2"></i>
                                </h6>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i>
                                    Edit Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle">
                    <i class="icon-more"></i>
                </div>
            </div>
        </div>
    </div>
    <!--Page Header Ends-->

    <!--Page Body Start-->
    <div class="page-body-wrapper">
        <!--Page Sidebar Start-->
        <div class="page-sidebar custom-scrollbar">
            <ul class="sidebar-menu">
                <li class="active">
                    <div class="sidebar-title">General</div>
                    <a href="#" class="sidebar-header">
                        <i class="icon-desktop"></i><span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-header">
                        <i class="icofont icofont-prescription"></i>
                        Clasificaciones
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="<?php echo e(route('categories.create')); ?>">
                                <i class="fa fa-angle-right"></i>
                                Agregar Nueva
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('categories.index')); ?>">
                                <i class="fa fa-angle-right"></i>
                                Listado de Clasificaciones
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sidebar-header">
                        <i class="icofont icofont-capsule"></i>
                        Medicamentos
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="<?php echo e(route('medicines.create')); ?>">
                                <i class="fa fa-angle-right"></i>
                                Agregar Nuevo
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('medicines.index')); ?>">
                                <i class="fa fa-angle-right"></i>
                                Listado de Medicamentos
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--Page Sidebar Ends-->

        <!--Page Body Starts-->
        <div class="page-body">
            <?php echo $__env->yieldContent('contenido'); ?>
        </div>
        <!--Page Body Ends-->
    </div>
    <!--Page Body Ends-->

</div>
<!--page-wrapper Ends-->

<!-- Bootstrap js-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/bootstrap/popper.min.js')); ?>" ></script>
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/bootstrap/bootstrap.js')); ?>" ></script>

<!-- Chart JS-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/chart/Chart.min.js')); ?>"></script>

<!-- Morris Chart JS-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/morris-chart/raphael.js')); ?>"></script>
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/morris-chart/morris.js')); ?>"></script>

<!-- owlcarousel js-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/owlcarousel/owl.carousel.js')); ?>" ></script>

<!-- Sidebar jquery-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/sidebar-menu.js')); ?>" ></script>

<!--Sparkline  Chart JS-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/sparkline/sparkline.js')); ?>"></script>

<!--Height Equal Js-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/height-equal.js')); ?>"></script>

<!-- prism js -->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/prism/prism.min.js')); ?>"></script>

<!-- clipboard js -->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/clipboard/clipboard.min.js')); ?>" ></script>

<!-- custom card js  -->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/custom-card/custom-card.js')); ?>" ></script>

<!-- Theme js-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/script.js')); ?>" ></script>

<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/dashboard-default.js')); ?>" ></script>

<!-- Counter js-->
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/counter/counter-custom.js')); ?>"></script>

<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/notify/bootstrap-notify.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/themeforest/html_n_resources/assets/js/notify/index.js')); ?>"></script>

<?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
<script src="<?php echo e(asset('js/aplication.js')); ?>"></script>

</body>
</html><?php /**PATH D:\Kuma\MAMP\htdocs\PruebaLaravelGM\resources\views/menu.blade.php ENDPATH**/ ?>