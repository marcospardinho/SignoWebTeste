<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo e(url('dist/css/fonts/icomoon/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(url('dist/css/owl.carousel.min.css')); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(url('dist/css/bootstrap.min.css')); ?>">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(url('dist/css/styleLogin.css')); ?>">

    <title>Login</title>
  </head>
  <body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong>Teste Signo Web</strong></h3>
            <p class="mb-4">Faça login o para acessar as enquetes.</p>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <form method="POST" action="<?php echo e(route('login')); ?>">
              <?php echo csrf_field(); ?>

              <input type="hidden" name="email" value="<?php echo e($email); ?>">
              <div class="form-group last mb-3">
                <label for="password">Agora, informe sua senha:</label>
                <input type="password" class="form-control" placeholder="Digite sua senha" id="password" name="password" required="true">
              </div>
              <div class="d-flex mb-5 align-items-center">
              <p class="mb-4">Senha Teste: <b>12345678</b></p>
              </div>

              <input type="submit" value="Entrar" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>

  <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script src="<?php echo e(url('dist/js/jquery-3.3.1.min.js')); ?>"></script>
  <script src="<?php echo e(url('dist/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(url('dist/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(url('dist/js/mainLogin.js')); ?>"></script>
  </body>
</html>
<?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/auth/password.blade.php ENDPATH**/ ?>