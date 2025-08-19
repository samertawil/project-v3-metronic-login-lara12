<div>


     <?php $__env->slot('crumb', null, []); ?> 

        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['button' => true,'route' => route('role.create'),'label' => __('customTrans.create new role')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['button' => true,'route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('role.create')),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('customTrans.create new role'))]); ?>
         
                <li class="breadcrumb-item"><a href="<?php echo e(route('appsetting.user.index')); ?>" class="text-muted"><?php echo e(__('customTrans.users')); ?> </a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('ability.index')); ?>" class="text-muted"><?php echo e(__('customTrans.abilities')); ?> </a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('role.index')); ?>" class="text-muted"><?php echo e(__('customTrans.role group')); ?> </a></li>
        

         <?php echo $__env->renderComponent(); ?>
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



    <div wire:offline>
        <div class="alert" role="alert" style="background-color: #fefe5c;">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>تحذير!</strong> انت الان خارج نطاق الانترنت.
        </div>
    </div>


    <?php if (isset($component)) { $__componentOriginalb2ca74f246e2dddefd3b44697e7b5be9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb2ca74f246e2dddefd3b44697e7b5be9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search-index-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('search-index-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
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
                        <th>#</th>

                        <?php if (isset($component)) { $__componentOriginal215abb4c13efe247e49c1b629be1a8e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'name\')','name' => 'name','sortBy' => true,'sortdir' => true,'labelname' => __('customTrans.group name')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'name\')','name' => 'name','sortBy' => true,'sortdir' => true,'labelname' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('customTrans.group name'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $attributes = $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $component = $__componentOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>

                        <th ><?php echo e(__('customTrans.abilities')); ?></th>

                        <th class="text-center"><?php echo e(__('customTrans.actions')); ?></th>
                    </tr>
                </thead>
                <tbody >


                    <tr>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td ><?php echo e($key + 1); ?></td>
                            <td><?php echo e($role->name); ?></td>
                            <td ><?php echo e(implode(',', $role->abilities_description)); ?></td>


                            <td class="d-flex align-items-center justify-content-center">

                                <?php if (isset($component)) { $__componentOriginal52984d0dc87f31be3fd7055890be5eb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.actions','data' => ['preview' => true,'dataTarget' => '#roleGroupPreview'.e($role->id).'','dataToggle' => 'modal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['preview' => true,'data-target' => '#roleGroupPreview'.e($role->id).'','data-toggle' => 'modal']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52984d0dc87f31be3fd7055890be5eb4)): ?>
<?php $attributes = $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4; ?>
<?php unset($__attributesOriginal52984d0dc87f31be3fd7055890be5eb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52984d0dc87f31be3fd7055890be5eb4)): ?>
<?php $component = $__componentOriginal52984d0dc87f31be3fd7055890be5eb4; ?>
<?php unset($__componentOriginal52984d0dc87f31be3fd7055890be5eb4); ?>
<?php endif; ?>
                                
                                <?php if (isset($component)) { $__componentOriginal52984d0dc87f31be3fd7055890be5eb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.actions','data' => ['edit' => true,'route' => route('role.edit', $role->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['edit' => true,'route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('role.edit', $role->id))]); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['idName' => 'roleGroupPreview'.e($role->id).'','modalType' => 'modal-dialog-scrollable','title' => $role->name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['idName' => 'roleGroupPreview'.e($role->id).'','modalType' => 'modal-dialog-scrollable','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($role->name)]); ?>
                                   <?php echo e(__('customTrans.created_at')); ?> : <?php echo e(myDateStyle1($role->created_at)); ?> </br>
                                    </br>
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $role->abilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $abilities): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="m-1"><?php echo e($abilities); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                    <div class="dropdown-divider m-0"></div>
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $role->abilities_description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $abilities_description): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="m-1"><?php echo e($abilities_description); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

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

                                
                                <?php if (isset($component)) { $__componentOriginal52984d0dc87f31be3fd7055890be5eb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.actions','data' => ['del' => true,'wire:click' => 'destroy('.e($role->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['del' => true,'wire:click' => 'destroy('.e($role->id).')']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52984d0dc87f31be3fd7055890be5eb4)): ?>
<?php $attributes = $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4; ?>
<?php unset($__attributesOriginal52984d0dc87f31be3fd7055890be5eb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52984d0dc87f31be3fd7055890be5eb4)): ?>
<?php $component = $__componentOriginal52984d0dc87f31be3fd7055890be5eb4; ?>
<?php unset($__componentOriginal52984d0dc87f31be3fd7055890be5eb4); ?>
<?php endif; ?>
                                


                            </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
            <?php echo e($roles->links()); ?>


        </div>

    </div>

    


</div>


 
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/app-setting/role/role-resource.blade.php ENDPATH**/ ?>