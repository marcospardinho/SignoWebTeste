<html lang="pt-br" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teste Signo</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(url("../../plugins/fontawesome-free/css/all.min.css")); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo e(url("../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")); ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo e(url("../../plugins/toastr/toastr.min.css")); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(url("../../dist/css/adminlte.min.css")); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="shortcut icon" href="https://site.signoweb.com.br/assets/images/favicon/favicon-32x32.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo e(url("../../dist/css/adminlte.min.css?v=3.2.0")); ?>">
    <script src=" <?php echo e(url("../../plugins/jquery/jquery.min.js")); ?>"></script>
    <script src="<?php echo e(url("../../plugins/bootstrap/js/bootstrap.bundle.min.js")); ?>"></script>
    <script src="<?php echo e(url("../../dist/js/adminlte.min.js?v=3.2.0")); ?>"></script>
</head>

<body class="layout-top-nav" style="height: auto;">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Enquetes T</span>
                </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <?php if( auth()->check() ): ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('question.index')); ?>" class="nav-link">Enquetes</a>
                        </li>
                    </ul>
                    <?php endif; ?>

                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">


                    <li class="nav-item">
                        <?php if( auth()->check() ): ?>
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="../../dist/img/user2-160x160.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                            <span class="d-none d-md-inline"> <?php echo e(Auth::guard('web')->user()->name); ?> </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.responsive-nav-link','data' => ['href' => route('logout'),'class' => 'nav-link','onclick' => 'event.preventDefault();
                                                    this.closest(\'form\').submit();']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'class' => 'nav-link','onclick' => 'event.preventDefault();
                                                    this.closest(\'form\').submit();']); ?>
                                <?php echo e(__('Sair ')); ?>

                                <i class="fas fa-sign-out-alt"></i>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                        </form>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a href="" class="nav-link">Você é um administrador ? Faça o </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Login</a>
                    </li>
                    <?php endif; ?>
                    </li>
                </ul>
            </div>
        </nav>
<?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/layouts/navBar.blade.php ENDPATH**/ ?>