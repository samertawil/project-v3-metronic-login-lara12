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

 
    <div class="row  m-auto">
        <div class="col-lg-12">
            <div class="card custom-card card-none-shadow">

                <div class="card-body ">

                    <section class="container my-2">

                        <a data-toggle="collapse" href="#collapse-system" aria-expanded="true"
                            aria-controls="collapse-system" id="heading-system" class="d-block ">
                            <i class="fa fa-chevron-down pull-right mx-2 "></i>
                            <?php echo e(__('customTrans.module_createion_name')); ?>

                        </a>

 
                              <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('appsetting.statusModule.SystemClass', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-824058986-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?></livewire:appsetting.statusModule.SystemClass>
 
 
                        <form wire:submit="store">

                          

                            <div class="mt-4"></div>
                            <a data-toggle="collapse" href="#collapse-status" aria-expanded="true"
                                aria-controls="collapse-status" id="heading-status" class="d-block ">
                                <i class="fa fa-chevron-down pull-right mx-2 "></i>
                                <?php echo e(__('customTrans.create_new_status')); ?>

                            </a>
                            <div id="collapse-status" class="collapse show" aria-labelledby="heading-status">
                                <p class="card-header"> </p>

                                <div class="container row justify-content-evenly align-items-center  p-3 "
                                    style="border : 1px solid #dee2e6 ;   ">



                                    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'status_name','wire:model' => 'status_name','label' => 'yes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'status_name','wire:model' => 'status_name','label' => 'yes']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>


                                  
                                    <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['name' => 'p_id_sub','label' => 'yes','wire:model' => 'p_id_sub','options' => $this->statusesAll->whereNull('p_id_sub')->pluck('status_name', 'id')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'p_id_sub','label' => 'yes','wire:model' => 'p_id_sub','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->statusesAll->whereNull('p_id_sub')->pluck('status_name', 'id'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
                                        
                        
                                    <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['name' => 'used_in_system_id','wire:model' => 'used_in_system_id','label' => 'yes','options' => $this->systems_data->pluck('system_name', 'id')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'used_in_system_id','wire:model' => 'used_in_system_id','label' => 'yes','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->systems_data->pluck('system_name', 'id'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>


                                    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'description','wire:model' => 'description','label' => 'yes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'description','wire:model' => 'description','label' => 'yes']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>


                                    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'page_name','wire:model' => 'page_name','label' => 'yes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'page_name','wire:model' => 'page_name','label' => 'yes']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>


                                    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'route_system_name','wire:model' => 'route_system_name','label' => 'yes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'route_system_name','wire:model' => 'route_system_name','label' => 'yes']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>


                                    <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'route_name','wire:model' => 'route_name','label' => 'yes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'route_name','wire:model' => 'route_name','label' => 'yes']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>

                                    <div id="scrollToHere"></div>
                                </div>
                                <?php if (isset($component)) { $__componentOriginalbadf5207a493980aa65b201b55f8cfad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbadf5207a493980aa65b201b55f8cfad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.saveClearbuttons','data' => ['clear' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('saveClearbuttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['clear' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbadf5207a493980aa65b201b55f8cfad)): ?>
<?php $attributes = $__attributesOriginalbadf5207a493980aa65b201b55f8cfad; ?>
<?php unset($__attributesOriginalbadf5207a493980aa65b201b55f8cfad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbadf5207a493980aa65b201b55f8cfad)): ?>
<?php $component = $__componentOriginalbadf5207a493980aa65b201b55f8cfad; ?>
<?php unset($__componentOriginalbadf5207a493980aa65b201b55f8cfad); ?>
<?php endif; ?>


                        </form>
                </div>

                </section>

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
              
                    <div class="col-sm-12 col-md-3"  >
                        <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['id' => 'id1','options' => $this->statusesAll->whereNull('p_id_sub')->pluck('status_name', 'id'),'divWidth' => '12','wire:model.live' => 'PidSearch']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'id1','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->statusesAll->whereNull('p_id_sub')->pluck('status_name', 'id')),'divWidth' => '12','wire:model.live' => 'PidSearch']); ?> <?php echo $__env->renderComponent(); ?>
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

                    <div class="col-sm-12 col-md-3">
                        <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['name' => 'SystemName','options' => $this->systems_data->pluck('system_name', 'id'),'divWidth' => '12','wire:model.live' => 'SystemName']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'SystemName','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->systems_data->pluck('system_name', 'id')),'divWidth' => '12','wire:model.live' => 'SystemName']); ?> <?php echo $__env->renderComponent(); ?>
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



                <div class="table-responsive" id="table">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable"
                            id="example2" role="grid" aria-describedby="example2_info">
                            <thead>
                                <th>#</th>

                                <?php if (isset($component)) { $__componentOriginal215abb4c13efe247e49c1b629be1a8e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal215abb4c13efe247e49c1b629be1a8e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'status_name\')','name' => 'status_name','sortBy' => true,'sortdir' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'status_name\')','name' => 'status_name','sortBy' => true,'sortdir' => true]); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'p_id_sub\')','name' => 'p_id_sub','sortBy' => true,'sortdir' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'p_id_sub\')','name' => 'p_id_sub','sortBy' => true,'sortdir' => true]); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-th','data' => ['wire:click' => 'setSortBy(\'used_in_system_id\')','name' => 'used_in_system_id','sortBy' => true,'sortdir' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-th'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'setSortBy(\'used_in_system_id\')','name' => 'used_in_system_id','sortBy' => true,'sortdir' => true]); ?> <?php echo $__env->renderComponent(); ?>
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
                            </thead>
                            <tbody>

                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($data->id); ?></td>

                                        <!--[if BLOCK]><![endif]--><?php if($editStatusId === $data->id): ?>
                                            <td> <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['wire:model' => 'StatusName','name' => 'StatusName','divWidth' => '10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'StatusName','name' => 'StatusName','divWidth' => '10']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?></td>
                                        <?php else: ?>
                                            <td><?php echo e($data->status_name); ?></td>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                                        

                                        <!--[if BLOCK]><![endif]--><?php if($editStatusId === $data->id): ?>
                                            <td>
                                                <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model' => 'statusPid','options' => $this->statusesAll->whereNull('p_id_sub')
                                               ->pluck('status_name', 'id'),'divWidth' => '10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'statusPid','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->statusesAll->whereNull('p_id_sub')
                                               ->pluck('status_name', 'id')),'divWidth' => '10']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>

                                            </td>
                                        <?php else: ?>
                                            <td><?php echo e($data->status_p_id_sub->status_name ?? '//'); ?></td>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                        <!--[if BLOCK]><![endif]--><?php if($editStatusId === $data->id): ?>
                                            <td>
                                                <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model' => 'usedInSystem','options' => $this->systems_data->pluck('system_name', 'id'),'divWidth' => '10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'usedInSystem','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->systems_data->pluck('system_name', 'id')),'divWidth' => '10']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>

                                            </td>
                                        <?php else: ?>
                                            <td><?php echo e($data->systemname->system_name ?? ''); ?></td>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                        <td class="d-flex  justify-content-center">
                                            <!--[if BLOCK]><![endif]--><?php if(!($editStatusId === $data->id)): ?>
                                                <?php if (isset($component)) { $__componentOriginal52984d0dc87f31be3fd7055890be5eb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.actions','data' => ['edit' => true,'wire:click.prevent' => 'edit('.e($data->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['edit' => true,'wire:click.prevent' => 'edit('.e($data->id).')']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.actions','data' => ['del' => true,'wire:click.prevent' => 'destroy('.e($data->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['del' => true,'wire:click.prevent' => 'destroy('.e($data->id).')']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52984d0dc87f31be3fd7055890be5eb4)): ?>
<?php $attributes = $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4; ?>
<?php unset($__attributesOriginal52984d0dc87f31be3fd7055890be5eb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52984d0dc87f31be3fd7055890be5eb4)): ?>
<?php $component = $__componentOriginal52984d0dc87f31be3fd7055890be5eb4; ?>
<?php unset($__componentOriginal52984d0dc87f31be3fd7055890be5eb4); ?>
<?php endif; ?>
                                            <?php else: ?>
                                                <?php if (isset($component)) { $__componentOriginal52984d0dc87f31be3fd7055890be5eb4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.actions','data' => ['make' => true,'wire:loading.attr' => 'disabled','wire:click.prevent' => 'update']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['make' => true,'wire:loading.attr' => 'disabled','wire:click.prevent' => 'update']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.actions','data' => ['cancel' => true,'wire:click.prevent' => 'cancelEdit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('actions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['cancel' => true,'wire:click.prevent' => 'cancelEdit']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52984d0dc87f31be3fd7055890be5eb4)): ?>
<?php $attributes = $__attributesOriginal52984d0dc87f31be3fd7055890be5eb4; ?>
<?php unset($__attributesOriginal52984d0dc87f31be3fd7055890be5eb4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52984d0dc87f31be3fd7055890be5eb4)): ?>
<?php $component = $__componentOriginal52984d0dc87f31be3fd7055890be5eb4; ?>
<?php unset($__componentOriginal52984d0dc87f31be3fd7055890be5eb4); ?>
<?php endif; ?>
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->


                            </tbody>
                        </table>
                        <?php echo e($this->statuses->links(data: ['scrollTo' => '#scrollToHere'])); ?>


                    </div>

                </div>
 
            </div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/app-setting/status/status.blade.php ENDPATH**/ ?>