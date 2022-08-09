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
    <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(url('dist/css/styleCad.css')); ?>">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../plugins/jquery-validation/jquery.mask.min.js"></script>


    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

    <script src="<?php echo e(url('dist/js/bladeCadastro.js')); ?>"></script>

    <title>SignoTest</title>
</head>

<body>


    <div class="d-lg-flex half">

        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 py-5">
                        <h3>Registro</h3>

                        <p class="mb-4">Inicie aqui o seu cadastro de administrador na Enquetes T.</p>



                        <form action="<?php echo e(route('storeCad')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group first">
                                        <label for="fname">Nome Completo</label>
                                        <font color="red"><b>*</b></font>
                                        <input type="text" class="form-control" id="nomecompleto" name="nomecompleto" value="" required='true' placeholder="Nome Completo" id="fname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group first">
                                        <label>Tipo de Identificação:</label>
                                        <font color="red"><b>*</b></font>
                                        <!-- Default radio -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadio" onclick='trocainput()' value="1" id="" checked />
                                            <label class="form-check-label" for="flexRadioDefault1"> CPF </label>
                                        </div>

                                    </div>
                                </div>

                                <div id="crpf" class="col-sm-6" >
                                    <div class="form-group">
                                        <label>CPF:</label>
                                        <font color="red"><b>*</b></font>
                                        <div class="input-group date" data-target-input="nearest">
                                            <input type="text" id="cpf" name="cpf" placeholder="CPF" class="form-control" maxlength="" data-target="#reservationdate" onblur="" />
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="email">Email</label>
                                        <font color="red"><b>*</b></font>
                                        <input type="email" class="form-control" required='true' name="email" placeholder="Email" id="email" value="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="senha">Senha</label>
                                        <font color="red"><b>*</b></font>
                                        <input type="password" class="form-control" required='true' name="senha" placeholder="Senha" id="senha" value="">
                                    </div>
                                </div>
                            </div>


                            <input type="submit" value="Cadastrar" id="submitButton" class="btn px-5 btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script src="<?php echo e(url('dist/js/jquery.mask.js')); ?>"></script>
    <script src="<?php echo e(url('dist/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(url('dist/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(url('dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(url('dist/js/mainCad.js')); ?>"></script>



</body>

</html><?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/auth/cadastro.blade.php ENDPATH**/ ?>