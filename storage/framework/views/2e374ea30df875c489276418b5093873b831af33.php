<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="shortcut icon" href="https://site.signoweb.com.br/assets/images/favicon/favicon-32x32.png" type="image/x-icon">
        <title><?php echo e(config('app.name', 'Teste Signo')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(url("plugins/fontawesome-free/css/all.min.css")); ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="<?php echo e(url("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")); ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo e(url("plugins/icheck-bootstrap/icheck-bootstrap.min.css")); ?>">
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?php echo e(url("plugins/jqvmap/jqvmap.min.css")); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(url("dist/css/adminlte.min.css")); ?>">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo e(url("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")); ?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo e(url("plugins/daterangepicker/daterangepicker.css")); ?>">
        <!-- summernote -->
        <link rel="stylesheet" href="<?php echo e(url("plugins/summernote/summernote-bs4.min.css")); ?>">
        
        <link rel="stylesheet" href="<?php echo e(url("../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")); ?>">

        <!-- Scripts -->

        <!-- jQuery -->
        <script src="<?php echo e(url("plugins/jquery/jquery.min.js")); ?>"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo e(url("plugins/jquery-ui/jquery-ui.min.js")); ?>"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo e(url("plugins/bootstrap/js/bootstrap.bundle.min.js")); ?>"></script>
        <!-- ChartJS -->
        <script src="<?php echo e(url("plugins/chart.js/Chart.min.js")); ?>"></script>
        <!-- Sparkline -->
        <script src="<?php echo e(url("plugins/sparklines/sparkline.js")); ?>"></script>
        <!-- JQVMap -->
        <script src="<?php echo e(url("plugins/jqvmap/jquery.vmap.min.js")); ?>"></script>
        <script src="<?php echo e(url("plugins/jqvmap/maps/jquery.vmap.usa.js")); ?>"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo e(url("plugins/jquery-knob/jquery.knob.min.js")); ?>"></script>
        <!-- daterangepicker -->
        <script src="<?php echo e(url("plugins/moment/moment.min.js")); ?>"></script>
        <script src="<?php echo e(url("plugins/daterangepicker/daterangepicker.js")); ?>"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?php echo e(url("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")); ?>"></script>
        <!-- Summernote -->
        <script src="<?php echo e(url("plugins/summernote/summernote-bs4.min.js")); ?>"></script>
        <!-- overlayScrollbars -->
        <script src="<?php echo e(url("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(url("dist/js/adminlte.js")); ?>"></script>
       


        <script src="<?php echo e(url("../../plugins/datatables/jquery.dataTables.min.js")); ?>"></script>
        <script src="<?php echo e(url("../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")); ?>"></script>
        <script src="<?php echo e(url("../../plugins/datatables-responsive/js/dataTables.responsive.min.js")); ?>"></script>
        <script src="<?php echo e(url("../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js")); ?>"></script>
        <script src="<?php echo e(url("../../plugins/datatables-buttons/js/dataTables.buttons.min.js")); ?>"></script>
        <script src="<?php echo e(url("../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js")); ?>"></script>
    </head>
    <body>
        <div>
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page Heading -->
            <header>
                <div>
                    <?php echo e($header); ?>

                </div>
            </header>

            <!-- Page Content -->
            <main>
                <?php echo e($slot); ?>

            </main>
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </body>
</html><?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/layouts/app.blade.php ENDPATH**/ ?>