<div>


     <?php $__env->slot('crumb', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>

     <?php $__env->endSlot(); ?>







    <?php if (isset($component)) { $__componentOriginalb2ca74f246e2dddefd3b44697e7b5be9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb2ca74f246e2dddefd3b44697e7b5be9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search-index-section','data' => ['place' => 'البحث باسم الحساب او صاحب الحساب']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('search-index-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['place' => 'البحث باسم الحساب او صاحب الحساب']); ?>

        


        <div class="col-5" wire:ignore>
            <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model' => 'searchStatusId','multiple' => 'true','class' => 'js-example-basic-multiple ','id' => 'searchStatusId','wire:ignore' => true,'divWidth' => '12','options' => $this->statuses['sendrecieveSupportstatus']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'searchStatusId','multiple' => 'true','class' => 'js-example-basic-multiple ','id' => 'searchStatusId','wire:ignore' => true,'divWidth' => '12','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->statuses['sendrecieveSupportstatus'])]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
        </div>



        <div class="col-5 mt-7" wire:ignore>
            <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model' => 'searchSubjectId','multiple' => 'true','class' => 'js-example-basic-multiple ','id' => 'searchSubjectId','wire:ignore' => true,'divWidth' => '12','options' => $this->statuses['supportForLogin']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'searchSubjectId','multiple' => 'true','class' => 'js-example-basic-multiple ','id' => 'searchSubjectId','wire:ignore' => true,'divWidth' => '12','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->statuses['supportForLogin'])]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
        </div>


        <div class="col-4 mt-7">
            <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model.live' => 'searchSupportTerminal','name' => 'searchSupportTerminal','choseTitle' => 'terminal_id','id' => 'searchSupportTerminal','divWidth' => '12','options' => $this->statuses['supportTerminal']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'searchSupportTerminal','name' => 'searchSupportTerminal','ChoseTitle' => 'terminal_id','id' => 'searchSupportTerminal','divWidth' => '12','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->statuses['supportTerminal'])]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
        </div>



     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb2ca74f246e2dddefd3b44697e7b5be9)): ?>
<?php $attributes = $__attributesOriginalb2ca74f246e2dddefd3b44697e7b5be9; ?>
<?php unset($__attributesOriginalb2ca74f246e2dddefd3b44697e7b5be9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb2ca74f246e2dddefd3b44697e7b5be9)): ?>
<?php $component = $__componentOriginalb2ca74f246e2dddefd3b44697e7b5be9; ?>
<?php unset($__componentOriginalb2ca74f246e2dddefd3b44697e7b5be9); ?>
<?php endif; ?>



    <div class="table-responsive">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th></th>
                        <th>#</th>
                        
                        <?php if (isset($component)) { $__componentOriginal215abb4c13efe247e49c1b629be1a8e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'user_name\')','name' => 'user_name','sortBy' => $sortBy,'sortdir' => $sortdir]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'user_name\')','name' => 'user_name','sortBy' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortBy),'sortdir' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortdir)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $attributes = $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $component = $__componentOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal215abb4c13efe247e49c1b629be1a8e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'subject_id\')','name' => 'subject_id','sortBy' => $sortBy,'sortdir' => $sortdir]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'subject_id\')','name' => 'subject_id','sortBy' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortBy),'sortdir' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortdir)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $attributes = $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $component = $__componentOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal215abb4c13efe247e49c1b629be1a8e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'terminal_id\')','name' => 'terminal_id','sortBy' => $sortBy,'sortdir' => $sortdir]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'terminal_id\')','name' => 'terminal_id','sortBy' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortBy),'sortdir' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortdir)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $attributes = $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $component = $__componentOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal215abb4c13efe247e49c1b629be1a8e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'status_id\')','name' => 'status_id','sortBy' => $sortBy,'sortdir' => $sortdir]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'status_id\')','name' => 'status_id','sortBy' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortBy),'sortdir' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortdir)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $attributes = $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $component = $__componentOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal215abb4c13efe247e49c1b629be1a8e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'created_at\')','name' => 'created_at','sortBy' => $sortBy,'sortdir' => $sortdir]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'created_at\')','name' => 'created_at','sortBy' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortBy),'sortdir' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sortdir)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $attributes = $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $component = $__componentOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>

                        <th class="text-center"><?php echo e(__('customTrans.actions')); ?></th>
                    </tr>
                </thead>

                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $this->allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        

                        <tr class="<?php echo \Illuminate\Support\Arr::toCssClasses(['main-row', 'bg-light-danger' => $data->status_id == 62]); ?>" wire:key="data-<?php echo e($data->id); ?>">

                            <td class="p-0 w-lg-1px">
                                <a href="#" class="btn btn-icon pulse pulse-success mr-5"
                                    onclick="toggleDetailsRow(this); return false;">
                                    <i class="fa fa-caret-right text-success"></i> <span class="pulse-ring"></span>
                                </a>
                            </td>


                            <td><?php echo e($this->allData->firstItem() + $key); ?></td>

                            <td>
                                <?php echo e($data->name); ?><br>
                                <small class="text-muted"><?php echo e($data->user_name); ?></small>
                            </td>

                            <td><?php echo e($data->statusSubjectName->status_name ?? '-'); ?></td>

                            <td><?php echo e($data->statusTerminalName->status_name ?? '-'); ?></td>

                            <td><?php echo e($data->statusIdName->status_name ?? '-'); ?></td>

                            <td><?php echo e(myDateStyle1($data->created_at)); ?></td>

                            <td class="text-center">
                                <?php if (isset($component)) { $__componentOriginal52984d0dc87f31be3fd7055890be5eb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.actions','data' => ['preview' => true,'dataTarget' => '#Userpreview'.e($data->id).'','dataToggle' => 'modal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['preview' => true,'data-target' => '#Userpreview'.e($data->id).'','data-toggle' => 'modal']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52984d0dc87f31be3fd7055890be5eb4)): ?>
<?php $attributes = $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4; ?>
<?php unset($__attributesOriginal52984d0dc87f31be3fd7055890be5eb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52984d0dc87f31be3fd7055890be5eb4)): ?>
<?php $component = $__componentOriginal52984d0dc87f31be3fd7055890be5eb4; ?>
<?php unset($__componentOriginal52984d0dc87f31be3fd7055890be5eb4); ?>
<?php endif; ?>



                                <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['wire:key' => 'modal-'.e($data->id).'','idName' => 'Userpreview'.e($data->id).'','title' => $data->name,'footer' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'modal-'.e($data->id).'','idName' => 'Userpreview'.e($data->id).'','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->name),'footer' => true]); ?>
                                    <p class="col-12 text-left"><?php echo e($data->issue_description ?? '-'); ?></p>

                                    <?php if (isset($component)) { $__componentOriginal4727f9fd7c3055c2cf9c658d89b16886 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.textarea','data' => ['wire:model' => 'replay','name' => 'replay','divWidth' => '12','rows' => '4','label' => true,'id' => 'replay'.e($data->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'replay','name' => 'replay','divWidth' => '12','rows' => '4','label' => true,'id' => 'replay'.e($data->id).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886)): ?>
<?php $attributes = $__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886; ?>
<?php unset($__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4727f9fd7c3055c2cf9c658d89b16886)): ?>
<?php $component = $__componentOriginal4727f9fd7c3055c2cf9c658d89b16886; ?>
<?php unset($__componentOriginal4727f9fd7c3055c2cf9c658d89b16886); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model' => 'status_id','name' => 'status_id','label' => true,'id' => 'status_id','options' => $this->statuses['sendrecieveSupportstatus']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'status_id','name' => 'status_id','label' => true,'id' => 'status_id','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->statuses['sendrecieveSupportstatus'])]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginalbadf5207a493980aa65b201b55f8cfad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbadf5207a493980aa65b201b55f8cfad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.saveClearbuttons','data' => ['wire:click' => 'store('.e($data->id).')','close' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('saveClearbuttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'store('.e($data->id).')','close' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbadf5207a493980aa65b201b55f8cfad)): ?>
<?php $attributes = $__attributesOriginalbadf5207a493980aa65b201b55f8cfad; ?>
<?php unset($__attributesOriginalbadf5207a493980aa65b201b55f8cfad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbadf5207a493980aa65b201b55f8cfad)): ?>
<?php $component = $__componentOriginalbadf5207a493980aa65b201b55f8cfad; ?>
<?php unset($__componentOriginalbadf5207a493980aa65b201b55f8cfad); ?>
<?php endif; ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>

                            </td>
                        </tr>



                        
                        <tr class="details-row" style="display: none;">
                            <td colspan="13">
                                <table class="mb-0">
                                    <tr>
                                        <td class="border-0"><?php echo e(__('customTrans.issue_description')); ?></td>
                                        <td class="border-0"> <?php echo e($data->issue_description ?? '-'); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('customTrans.replay')); ?></td>
                                        <td>
                                            <span
                                                class="label label-lg label-light-info label-inline"><?php echo e($data->replay ?? '-'); ?></span>

                                        </td>
                                    </tr>

                                    <tr >
                                        <td ><?php echo e(__('customTrans.attchments')); ?></td>
                                        <td>
                                            <!--[if BLOCK]><![endif]--><?php if($data->uploaded_files): ?>
                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data->uploaded_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <a href="http://register-aid.local/storage/<?php echo e($file); ?>"
                                                        target="_blank"> <img
                                                            src="http://register-aid.local/storage/<?php echo e($file); ?>"
                                                            alt="Thumbnail" style="height: 100px; width:100px;"></a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                <?php echo e(__('No records found.')); ?>

                            </td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>

            <div>
                <?php echo e($this->allData->links()); ?>

            </div>
        </div>
    </div>



    <?php $__env->startPush('js'); ?>
        <script>
            $(document).ready(function() {
                $(".js-example-basic-multiple").select2({

                    placeholder: "البحث بالحالة",
                    dir: "rtl" // 

                });

                $("#searchSubjectId").select2({

                    placeholder: "البحث بالدعم المطلوب",
                    dir: "rtl" // 

                });




                $('#searchStatusId').on('change', function(e) {
                    var data = $('#searchStatusId').select2("val");
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('searchStatusId', data);
                });

                $('#searchSubjectId').on('change', function(e) {
                    var data = $('#searchSubjectId').select2("val");
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('searchSubjectId', data);
                });


            });
        </script>




        <script>
            function toggleDetailsRow(trigger) {
                const tr = trigger.closest('tr');
                const nextRow = tr.nextElementSibling;
                const icon = trigger.querySelector('i');

                if (nextRow && nextRow.classList.contains('details-row')) {
                    nextRow.style.display = nextRow.style.display === 'none' ? 'table-row' : 'none';
                    icon.classList.toggle('fa-caret-right');
                    icon.classList.toggle('fa-caret-down');
                }
            }
        </script>
    <?php $__env->stopPush(); ?>

</div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/technical-support/show.blade.php ENDPATH**/ ?>