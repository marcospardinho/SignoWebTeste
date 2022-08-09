<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <script src="<?php echo e(url("../../dist/js/questionScript.js")); ?>"></script>
     <?php $__env->endSlot(); ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content-header sessTit">
            <div class="container-fluid">
                <div class="row mb-2">
                    <!-- Título -->
                    <div class="col-sm-6">
                        <h1 style="font-size: 25px;">Adicionar Enquete </h1>
                    </div>
                    <!-- Lado Direito -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="<?php echo e(url()->previous()); ?>" style="min-width: 95px; margin-right:  5px" type="button" class="btn btn-default btn-sm" title="Voltar"><i class="fas fa-times"></i>
                                Cancelar</a>
                            <button style="min-width: 95px; margin-right: -7px" type='submit' form="formQuestion" class='btn bg-primary btn-sm btn-tam'><i class="fas fa-check"></i> Salvar</button>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Conteudo da Pagina -->
        <section class="content sessMargin">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('question.store')); ?>" id="formQuestion" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
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

                        <!-- Linha 01 -->
                        <div class="sub-doc">
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="ndoc">Título da Enquete</label>
                                    <input type="text" class="form-control" id="inputName" name="titulo_enquete" value="<?php echo e(old('nomeassembleia')); ?>" required='true' placeholder="Digite o título da enquete" />
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="ndoc">Descrição da Enquete</label>
                                <textarea id="inputDescription" name="descricao" placeholder="Digite uma descrição" value="<?php echo e(old('descricao')); ?>" class="form-control" rows="4"></textarea>

                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Data de início</label>
                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                    <input type="text" id="dtinicio" name="dtinicio" value="<?php echo e(old('dtinicio')); ?>" class="form-control datetimepicker-input" data-target="#reservationdatetime" />
                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Data do término</label>
                                <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                                    <input type="text" id="dttermino" name="dttermino" value="<?php echo e(old('dttermino')); ?>" class="form-control datetimepicker-input" data-target="#reservationdatetime2" />
                                    <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="inputPassword3">Quantidade de opções para resposta?</label>
                            <select name="quantidade_respostas" class="form-control custom-select" id="quantidade-respostas" required="true">
                                <option value="">Selecione..</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                        <div id="conteudo-respostas">
                        </div>



                        <!-- /.card-body -->
                    </form>

                </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->





 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\Users\Marcos Thiago\Documents\rapidopark-master\resources\views/quest/questionCreate.blade.php ENDPATH**/ ?>