<?php echo $__env->make('layouts.navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Hey ! <small>Bem vindo ao Enquetes T .</small></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <?php if(!auth()->check()): ?><p class="m-0"> Deseja fazer uma enquete ? <small><a href="<?php echo e(route('cadastro')); ?>"> Cadastre-se</a></small></p><?php endif; ?>

                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <?php if($enquetesAIniciar->count() > 0): ?>
                    <div class="content-header">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h5 class="m-0"> Enquetes a começar:</h5>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                    <?php $__currentLoopData = $enquetesAIniciar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($enquete->titulo); ?></h5>
                            <p class="card-text">
                                <small>A iniciar: <?php echo e(\Carbon\Carbon::parse($enquete->inicio)->format('d/m/Y')); ?> </small>
                                <small style="float: right;"> Término: <?php echo e(\Carbon\Carbon::parse($enquete->fim)->format('d/m/Y')); ?> </small>
                            </p>
                            <p class="card-text">
                                <?php echo e($enquete->descricao); ?>

                            </p>
                            <a href="<?php echo e(route('questionary', $enquete->id_enquete)); ?>" class="card-link">Votar</a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="content-header">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h5 class="m-0"> Enquetes em andamento:</h5>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $__empty_1 = true; $__currentLoopData = $enquetesEmAndamento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($enquete->titulo); ?></h5>
                            <p class="card-text">
                                <small>Iniciado: <?php echo e(\Carbon\Carbon::parse($enquete->inicio)->format('d/m/Y')); ?> </small>
                                <small style="float: right;"> Término: <?php echo e(\Carbon\Carbon::parse($enquete->fim)->format('d/m/Y')); ?> </small>
                            </p>
                            <p class="card-text">
                                <?php echo e($enquete->descricao); ?>

                            </p>
                            <a href="<?php echo e(route('questionary', $enquete->id_enquete)); ?>" class="card-link">Votar</a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Lista vazia!</h5>
                            <p class="card-text">
                                Seja o primeiro a criar uma enquete !! Torne-se administrador :D
                            </p>
                            <a href="<?php echo e(route('cadastro')); ?>" class="card-link"> Cadastre-se</a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($enquetesFinalizadas->count() > 0): ?>
                    <div class="content-header">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h5 class="m-0"> Enquetes finalizadas:</h5>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php $__currentLoopData = $enquetesFinalizadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($enquete->titulo); ?></h5>
                            <p class="card-text">
                                <small>Iniciou: <?php echo e(\Carbon\Carbon::parse($enquete->inicio)->format('d/m/Y')); ?> </small>
                                <small style="float: right;"> Terminou: <?php echo e(\Carbon\Carbon::parse($enquete->fim)->format('d/m/Y')); ?> </small>
                            </p>
                            <p class="card-text">
                                <?php echo e($enquete->descricao); ?>

                            </p>
                            <a href="<?php echo e(route('questionary', $enquete->id_enquete)); ?>" class="card-link">Votar</a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>



                <div class="col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Ultimas Enquetes</h5>
                        </div>
                        <div class="card-body">
                            <?php $__empty_1 = true; $__currentLoopData = $ultimasEnquetes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquete): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($enquete->titulo); ?></h5>
                                    <p class="card-text">
                                        <?php echo e($enquete->descricao); ?>

                                    </p>
                                    <a href="<?php echo e(route('questionary', $enquete->id_enquete)); ?>" class="card-link">Votar</a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Lista vazia!</h5>
                                    <p class="card-text">
                                        Seja o primeiro a criar uma enquete !! Torne-se administrador :D
                                    </p>
                                    <a href="<?php echo e(route('cadastro')); ?>" class="card-link"> Cadastre-se</a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<?php echo $__env->make('layouts.footerClient', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/quests.blade.php ENDPATH**/ ?>