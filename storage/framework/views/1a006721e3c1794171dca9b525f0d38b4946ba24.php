<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                    <p class="text-success text-xl">
                        <i class="ion ion-ios-refresh-empty"></i>
                    </p>
                    <p class="d-flex flex-column text-right">
                        <span class="font-weight-bold">
                            <i class="ion ion-android-arrow-up text-success"></i> <?php echo e($votos->count()); ?>

                        </span>
                        <span class="text-muted">TOTAL DE VOTOS</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <?php $__currentLoopData = $enquete->opcoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opcao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($votos->where('id_opcao', $opcao->id_opcao)->count() != 0){ $percent = $votos->where('id_opcao', $opcao->id_opcao)->count() / $votos->count() * 100; } else{ $percent = 0; }?>
        <div class="progress-group">
            <?php echo e($opcao->descricao); ?>

            <span class="float-right"><b><?php echo e($percent); ?>%</b></span>
            <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: <?php echo e($percent); ?>%"></div>
            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/ajax/detalharAjax.blade.php ENDPATH**/ ?>