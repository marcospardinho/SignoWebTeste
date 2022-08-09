<?php echo $__env->make('layouts.navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <!--<div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Layout</a></li>
                  <li class="breadcrumb-item active">Fixed Layout</li>
                </ol>
              </div> -->
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">



          <div class="card card-primary card-outline">
            <div class="card-body">
              <form class="needs-validation" novalidate id="formVoto" name="formVoto" action="<?php echo e(route('questionary.store', $enquete->id_enquete)); ?>" enctype="multipart/form-data" method="post">

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" value="<?php echo e($enquete->id_enquete); ?>" id="id" name="id">
                <!-- Conteudo da Abas -->
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
                <!-- box Padrão -->
                <div class="questions">
                  <p class="card-text">
                    <small>Inicio em: <?php echo e(\Carbon\Carbon::parse($enquete->inicio)->format('d/m/Y')); ?> </small>
                    <small style="float: right;"> Término: <?php echo e(\Carbon\Carbon::parse($enquete->fim)->format('d/m/Y')); ?> </small>
                  </p>
                  <h5 style="font-size: 22px;"><?php echo e($enquete->titulo); ?></h5>
                  <p><?php echo e($enquete->descricao); ?></p>
                  <br>
                  <?php $__currentLoopData = $enquete->opcoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opcao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if(!isset($key)) $key = 0; ?>
                  <div class="col-sm-12">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input custom-control-input-success custom-control-input-outline" type="radio" value="<?php echo e($opcao->id_opcao); ?>" id="<?php echo e($key); ?>" name="<?php echo e($enquete->id_enquete); ?>" <?php if($apuracao != null && $apuracao->id_opcao == $opcao->id_opcao): ?> checked <?php endif; ?> <?php if((now() > $enquete->fim || $enquete->inicio > now()) || ($apuracao != null && $apuracao->count() > 0)): ?> disabled <?php endif; ?>>
                      <label for="<?php echo e($key); ?>" class="custom-control-label"><?php echo e($opcao->descricao); ?></label>
                    </div>
                  </div>
                  <?php $key += 1; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <br>
                </div>
                <input style="float: right;" type="submit" value="Enviar Voto" id="submitButton" class="btn px-5 btn-primary" <?php if((now()> $enquete->fim || $enquete->inicio > now()) || ($apuracao != null && $apuracao->count() > 0)): ?> disabled <?php endif; ?>>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="card-title m-0">Votação em tempo real</h5>
            </div>
            <div class="card-body" id="resultado">
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>


</div>

<script type="text/javascript" src="<?php echo e(url('dist/js/ajaxEnquete.js')); ?>"></script>
<?php echo $__env->make('layouts.footerClient', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/quest/questionary.blade.php ENDPATH**/ ?>