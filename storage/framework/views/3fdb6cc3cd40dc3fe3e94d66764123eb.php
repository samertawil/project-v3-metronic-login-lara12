<div wire:cloak>

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
<?php $component->withAttributes([]); ?>

            <li class="breadcrumb-item"><a href="<?php echo e(route('app.citzen.services.index')); ?>"
                    class="text-muted"><?php echo e(__('customTrans.services index')); ?> </a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('app.citzen.services.create')); ?>"
                    class="text-muted"><?php echo e(__('customTrans.services resource')); ?> </a></li>

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


    <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
        <div class="col-md-10">
            <div class="d-flex align-items-center  justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                <h1 class="display-4 font-weight-boldest text-primary"><?php echo e($this->services->name); ?></h1>
                <div class="d-flex flex-column align-items-md-start px-0">
                    <!--begin::Logo-->
                    <a href="#" class="mb-5">
                        <img src="assets/media/logos/logo-dark.png" alt="">
                    </a>
                    <!--end::Logo-->
                    <span class=" d-flex flex-column align-items-md-start opacity-70">

                        <p class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                            'opacity-100 h5',
                            'text-danger' => $this->services->active == 0,
                            'text-success' => $this->services->active == 1,
                        ]); ?>">


                            <?php echo e($this->services->active == 1 ? __('customTrans.active') : __('customTrans.not active')); ?>

                        </p>


                        <span> <?php echo e($this->services->description); ?></span>

                    </span>
                </div>
            </div>
            <div class="border-bottom w-100"></div>
            <div class="row  pt-6">
                <div class="col-4 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2"><?php echo e(__('customTrans.service num')); ?></span>
                    <span class="opacity-70"><?php echo e($this->services->num); ?></span>
                </div>
                <div class="col-4 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2"><?php echo e(__('customTrans.order')); ?></span>
                    <span class="opacity-70"><?php echo e($this->services->home_page_order); ?></span>
                </div>
                <div class="col-4 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2"><?php echo e(__('customTrans.url_active_from_date')); ?></span>
                    <span
                        class="opacity-70"><?php echo e($this->services->url_active_from_date ?? '-'); ?><br><?php echo e($this->services->url_active_to_date ?? '-'); ?></span>
                </div>
            </div>

            <div class="row pt-10">

                <div class="col-6 col-lg-4  d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2"> رابط مباشر للوصول للخدمة</span>
                    <span class="opacity-70"><?php echo e($this->services->url ?? '-'); ?>

                </div>



                <div class="col-6 col-lg-4 d-flex flex-column flex-root">

                    <span class="font-weight-bolder mb-2"> <?php echo e(__('customTrans.route_name')); ?></span>
                    <span class="opacity-70"><?php echo e($this->services->route_name ?? '-'); ?>

                </div>
            </div>


            <div class="row pt-10">

                <div class="col-6 col-lg-4  d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">تذيل</span>
                    <?php
                        $data = explode(' ', $this->services->teal);
                    ?>
                    <div class="d-flex align-items-center">
                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <span
                                class="label label-light-primary font-weight-bold label-inline mr-1"><?php echo e($keys); ?></span>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <span class="opacity-70">-</span>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>


                <div class="col-6 col-lg-4  d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2"> <?php echo e(__('customTrans.services Responsible')); ?> </span>
                    <span class="opacity-70"><?php echo e($this->services->responsible ?? '-'); ?>

                </div>
            </div>


            <div class="row pt-10">
                <div class="border-bottom w-100 "></div>

                <div class="w-100 text-center pt-10 font-weight-bolder text-info">
                    <p>شروط وملاحظات</p>
                </div>

                <div class="col-12 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2 pt-10">* <?php echo e(__('customTrans.conditions')); ?> </span>
                    <span class="opacity-70"><?php echo $this->services->conditions ?? '-'; ?>

                </div>
            </div>


            <div class="row pt-10">

                <div class="col-12 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">* <?php echo e(__('customTrans.note')); ?> </span>
                    <span class="opacity-70"><?php echo $this->services->note ?? '-'; ?>

                </div>
            </div>


            <div class="row pt-10">

                <div class="col-12 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">* ملاحظات عند ايقاف الخدمة </span>
                    <span class="opacity-70"><?php echo $this->services->deactive_note ?? '-'; ?>

                </div>
            </div>

            <!--[if BLOCK]><![endif]--><?php if($this->services->card_header || $this->services->services_images): ?>
                
                <div class="w-100 text-center pt-10 font-weight-bolder text-info">
                <p>الصور والبطاقات</p>

            </div>

          
            <div class="row pt-10">
               
                <div class="col-12 d-flex flex-column flex-root">

                    <!--[if BLOCK]><![endif]--><?php if($this->services->card_header): ?>

                    <span class="font-weight-bolder mb-2">* <?php echo e(__('customTrans.card_header')); ?> </span>
                  
                        <div class="row">

                            <div class="col-6 col-lg-4 my-5">
                                <img src="<?php echo e(asset('storage/' . $this->services->card_header)); ?>"
                                    style="height: 100px; width:100px;">
                            </div>

                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>


            <div class="row pt-10">
               
                <div class="col-12 d-flex flex-column flex-root">

                    <!--[if BLOCK]><![endif]--><?php if($this->services->services_images): ?>

                    <span class="font-weight-bolder mb-2">* <?php echo e(__('customTrans.services_images')); ?> </span>

                        <div class="row">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->services->services_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-6 col-lg-4 my-5">
                                    <img src="<?php echo e(asset('storage/' . $image)); ?>" style="height: 100px; width:100px;">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>

                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>

            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


        </div>
    </div>
 


</div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/my-app/citzen-services/services-show.blade.php ENDPATH**/ ?>