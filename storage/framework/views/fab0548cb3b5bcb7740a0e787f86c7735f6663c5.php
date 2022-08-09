<?php foreach($attributes->onlyProps(['errors']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['errors']); ?>
<?php foreach (array_filter((['errors']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($errors->any()): ?>
    <div <?php echo e($attributes); ?>>
        <ul class="mt-3 list-disc list-inside text-sm text-red-600" style="padding: 0;">
            <div class="card-body">
                <div class="alert alert-danger alert-dismissible" style="text-align: center;">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li style="list-style: none;"><?php echo e($error); ?></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>


              </div>

        </ul>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/components/auth-validation-errors.blade.php ENDPATH**/ ?>