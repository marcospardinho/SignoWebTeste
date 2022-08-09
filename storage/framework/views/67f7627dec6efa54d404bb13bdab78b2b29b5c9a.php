<?php $__currentLoopData = $enquete->opcoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opcao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="progress-group">
            <?php echo e($opcao->descricao); ?>

                <span class="float-right"><b><?php echo e($votos->where('id_opcao', $opcao->id_opcao)->count()); ?></b>/<?php echo e($votos->count()); ?></span>
                <div class="progress progress-sm">
                    <?php $percent = $votos->where('id_opcao', $opcao->id_opcao)->count() / $votos->count() * 100; ?>
                    <div class="progress-bar bg-primary" style="width: <?php echo e($percent); ?>%"></div>
                </div>
            </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                      <?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/ajax/questionaryAjax.blade.php ENDPATH**/ ?>