<div>

    <?php $__env->startPush('css'); ?>
        <style>
            .card {
                box-shadow: none;

            }

            .card-shadow {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        </style>
    <?php $__env->stopPush(); ?>


    <div class="row   justify-content-between  ">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 my-3">
                <div class="card custom-card card-shadow">
                    <!--[if BLOCK]><![endif]--><?php if($service->card_header): ?>
                        <img src="<?php echo e(asset('storage/' . $service->card_header)); ?>" class="card-img-top" alt="..."
                            style="height: 130px;object-fit:cover ;overflow: hidden;">
                    <?php else: ?>
                        <img src="<?php echo e(asset('pic/media-43.jpg')); ?>" class="card-img-top" alt="..."
                            style="height: 130px;object-fit:cover ;overflow: hidden;">
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <div class="card-body py-5">

                        <div class="d-flex ">
                            <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                '  card-title mb-1 h5',
                                'text-hover-success' => $service->active == 1,
                                'text-decoration-line-through text-hover-danger' => $service->active == 0,
                            ]); ?>">

                                <?php echo e($service->name); ?>



                            </span>
                            <?php
                                $teals = [null];
                            ?>
                            <!--[if BLOCK]><![endif]--><?php if($service->teal): ?>
                                <?php
                                    $teals = explode('//', $service->teal);
                                ?>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                            <div class="d-flex ">
                                <!--[if BLOCK]><![endif]--><?php if(!empty($service->teal)): ?>
                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $teals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="mx-1  btn btn-sm btn-light-primary "
                                            style="font-size: 8px; font-weight: bold; "><?php echo e($teal); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->



                                <span class="mx-1  btn btn-sm btn-light-primary"
                                    style="font-size: 8px; font-weight: bold; "><?php echo e($service->active == 1 ? __('customTrans.active') : __('customTrans.deactivated')); ?></span>
                            </div>


                        </div>




                        <div class="card-body py-2 px-0">
                            <p class="card-text"><?php echo e($service->description); ?></p>
                        </div>

                        <!--[if BLOCK]><![endif]--><?php if($service->active == 0 && $service->deactive_note): ?>
                            <div class="card-body py-2 px-0">
                                <p class="card-text"><?php echo e($service->deactive_note); ?></p>
                            </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--><?php if($service->active == 1): ?>
                            <div class="card-footer d-flex justify-content-between py-5 px-0" style="border-top: none;">

                                <?php if (isset($component)) { $__componentOriginal259a41896ba0d797a15297e35f17285d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal259a41896ba0d797a15297e35f17285d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tag-a','data' => ['route' => route($service->route_name),'name' => __('customTrans.sign in'),'defaultClass' => 'btn btn-light-primary font-weight-bold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tag-a'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($service->route_name)),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('customTrans.sign in')),'default_class' => 'btn btn-light-primary font-weight-bold']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal259a41896ba0d797a15297e35f17285d)): ?>
<?php $attributes = $__attributesOriginal259a41896ba0d797a15297e35f17285d; ?>
<?php unset($__attributesOriginal259a41896ba0d797a15297e35f17285d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal259a41896ba0d797a15297e35f17285d)): ?>
<?php $component = $__componentOriginal259a41896ba0d797a15297e35f17285d; ?>
<?php unset($__componentOriginal259a41896ba0d797a15297e35f17285d); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginal259a41896ba0d797a15297e35f17285d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal259a41896ba0d797a15297e35f17285d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tag-a','data' => ['dataTarget' => '#conditionsModal'.e($service->id).'','dataToggle' => 'modal','route' => route($service->route_name),'name' => __('customTrans.conditions'),'defaultClass' => 'btn btn-outline-secondary font-weight-bold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tag-a'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-target' => '#conditionsModal'.e($service->id).'','data-toggle' => 'modal','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($service->route_name)),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('customTrans.conditions')),'default_class' => 'btn btn-outline-secondary font-weight-bold']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal259a41896ba0d797a15297e35f17285d)): ?>
<?php $attributes = $__attributesOriginal259a41896ba0d797a15297e35f17285d; ?>
<?php unset($__attributesOriginal259a41896ba0d797a15297e35f17285d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal259a41896ba0d797a15297e35f17285d)): ?>
<?php $component = $__componentOriginal259a41896ba0d797a15297e35f17285d; ?>
<?php unset($__componentOriginal259a41896ba0d797a15297e35f17285d); ?>
<?php endif; ?>
                            </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['idName' => 'conditionsModal'.e($service->id).'','width' => 'md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['idName' => 'conditionsModal'.e($service->id).'','width' => 'md']); ?>
                            <div class="d-flex flex-column font-weight-bold  " style="line-height: 22px;">
                                <!--[if BLOCK]><![endif]--><?php if($service->conditions): ?>
                                    <span class="text-danger mb-4"
                                        style="text-decoration: underline; font-weight: bold"><?php echo e(__('customTrans.conditions')); ?>

                                        :</span>


                                    <?php
                                        $x = explode('//', $service->conditions);
                                    ?>

                                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $x; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <ul>
                                            <li><?php echo e($y); ?></li>
                                        </ul>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--><?php if($service->note): ?>
                                    <span class="text-primary mb-4"
                                        style="text-decoration: underline; font-weight: bold">
                                        <?php echo e(__('customTrans.notes')); ?>

                                        :</span>
                                    <?php echo e($service->note); ?>

                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                                 <?php $__env->slot('ModalButton', null, []); ?> 

                                    <div class="d-flex justify-content-center">
                                        <?php if (isset($component)) { $__componentOriginal259a41896ba0d797a15297e35f17285d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal259a41896ba0d797a15297e35f17285d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tag-a','data' => ['route' => route($service->route_name),'name' => __('customTrans.sign in'),'defaultClass' => 'btn btn-light-primary','style' => 'width: 100px; height: 38px; font-size:13px;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tag-a'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route($service->route_name)),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('customTrans.sign in')),'default_class' => 'btn btn-light-primary','style' => 'width: 100px; height: 38px; font-size:13px;']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal259a41896ba0d797a15297e35f17285d)): ?>
<?php $attributes = $__attributesOriginal259a41896ba0d797a15297e35f17285d; ?>
<?php unset($__attributesOriginal259a41896ba0d797a15297e35f17285d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal259a41896ba0d797a15297e35f17285d)): ?>
<?php $component = $__componentOriginal259a41896ba0d797a15297e35f17285d; ?>
<?php unset($__componentOriginal259a41896ba0d797a15297e35f17285d); ?>
<?php endif; ?>
                                    </div>
                                 <?php $__env->endSlot(); ?>


                            </div>

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


                    </div>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/my-app/citzen-services/services-home.blade.php ENDPATH**/ ?>