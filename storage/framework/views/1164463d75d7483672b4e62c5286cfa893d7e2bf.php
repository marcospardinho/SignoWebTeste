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
            <p class="mb-4">Faça login para gerenciar suas enquetes.</p>
            <form action="<?php echo e(route('password')); ?>" method="get">
              <div class="form-group first">
                <label for="username">Informe suas credenciais</label>
                <input type="text" class="form-control" placeholder="Email ou CPF/CNPJ" id="user" name="user" required="true">
              </div>
              <div class="d-flex mb-5 align-items-center">
              <p class="mb-4">E-mail Teste: <b>testesigno@gmail.com</b> <br> CPF Teste: <b>96160406000</b></p>
              </div>

              <input type="submit" value="Próximo" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>


  <script src="<?php echo e(url('dist/js/jquery-3.3.1.min.js')); ?>"></script>
  <script src="<?php echo e(url('dist/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(url('dist/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(url('dist/js/mainLogin.js')); ?>"></script>
   <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/login.blade.php ENDPATH**/ ?>