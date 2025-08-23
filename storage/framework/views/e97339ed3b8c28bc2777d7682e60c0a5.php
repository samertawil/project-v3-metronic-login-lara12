<div>

   
     <?php $__env->slot('crumb', null, []); ?> 
      <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['button' => true,'label' => __('customTrans.add new'),'route' => route('app.contact.create')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['button' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('customTrans.add new')),'route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('app.contact.create'))]); ?>

        <li class="breadcrumb-item"><a href="" class="text-muted"><?php echo e(__('customTrans.contacts list')); ?></a></li>

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




    <?php $__env->startPush('css'); ?>
        <script src="https://cdn.tailwindcss.com"></script>
    <?php $__env->stopPush(); ?>

    




 
    <?php if (isset($component)) { $__componentOriginalb2ca74f246e2dddefd3b44697e7b5be9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb2ca74f246e2dddefd3b44697e7b5be9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search-index-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('search-index-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

         
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
                        <th>#</th>
                        <?php if (isset($component)) { $__componentOriginal215abb4c13efe247e49c1b629be1a8e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'identity_number\')','name' => 'idc','sortBy' => true,'sortdir' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'identity_number\')','name' => 'idc','sortBy' => true,'sortdir' => true]); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'full_name\')','name' => 'full_name','sortBy' => true,'sortdir' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'full_name\')','name' => 'full_name','sortBy' => true,'sortdir' => true]); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'phone_primary\')','name' => 'mobile1','sortBy' => true,'sortdir' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'phone_primary\')','name' => 'mobile1','sortBy' => true,'sortdir' => true]); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'phone_secondary\')','name' => 'mobile2','sortBy' => true,'sortdir' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'phone_secondary\')','name' => 'mobile2','sortBy' => true,'sortdir' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $attributes = $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__attributesOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4)): ?>
<?php $component = $__componentOriginal215abb4c13efe247e49c1b629be1a8e4; ?>
<?php unset($__componentOriginal215abb4c13efe247e49c1b629be1a8e4); ?>
<?php endif; ?>


                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $this->Contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $Contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>

                            <td><?php echo e(($this->Contacts->currentPage() - 1) * $this->Contacts->perPage() + $key + 1); ?></td>

                            <td><?php echo e($Contact->identity_number); ?></td>
                            <td><?php echo e($Contact->full_name); ?></td>
                            <td><?php echo e($Contact->phone_primary); ?></td>
                            <td><?php echo e($Contact->phone_secondary); ?></td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>لا يوجد بيانات</p>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
            <?php echo e($this->contacts->links()); ?>

        </div>

    </div>
</div>
 <?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/my-app/contact/index.blade.php ENDPATH**/ ?>