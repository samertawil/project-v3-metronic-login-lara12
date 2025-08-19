 <div class="d-flex flex-column flex-root">
     <div class="d-flex flex-row-fluid">
         <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
             style="background-image: url('<?php echo e(asset('template-assets/metronic7/media/bg/bg-3.jpg')); ?>');">
             <div class="login-form text-center p-7 position-relative overflow-hidden">

                 <div>
                     <form wire:submit='' class="login-forgot form-group form">

                         <div class="login-forgot">
                             <div class="mb-10">
                                 <h1><?php echo e(__('customTrans.Forgot Your Password')); ?></h1>
                                 <div class="text-muted font-weight-bold">
                                     <?php echo e(__('customTrans.Enter your user name to reset your password')); ?></div>
                             </div>
                         </div>
                         <div class="form-group mb-10">
                             <input wire:model.live.debounce.1000ms='user_name' name="user_name" dir="ltr"
                                 class="form-control form-control-solid h-auto py-4 px-8 text-center <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                     
                                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                 type="text" placeholder="<?php echo e(__('customTrans.user_name')); ?>" required
                                 autocomplete="off" />
                             <?php echo $__env->make('layouts._show-error', ['field_name' => 'user_name'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                         </div>

                         <div>
                             <!--[if BLOCK]><![endif]--><?php if($this->user): ?>
                                 <div class="mb-10">
                                     <span style=" font-weight: bold;"><?php echo e(__('customTrans.mr/s')); ?> :
                                     </span><span
                                         style=" font-weight: bold;"><?php echo e(' ' . $this->user['user']->name); ?></span>
                                 </div>

                                 <div>
                                     <?php if (isset($component)) { $__componentOriginal2f9894a01a11669b094ae0763b00bdf1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f9894a01a11669b094ae0763b00bdf1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.radio','data' => ['label' => true,'wire:model.live' => 'check_type','name' => 'resetType','value1' => 'questions','style1' => 'margin-right:20px;','class' => 'text-cente','value2' => 'email','valueTitle1' => 'login questions','valueTitle2' => 'email','divWidth' => '12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => true,'wire:model.live' => 'check_type','name' => 'resetType','value1' => 'questions','style1' => 'margin-right:20px;','class' => 'text-cente','value2' => 'email','value_title1' => 'login questions','value_title2' => 'email','divWidth' => '12']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f9894a01a11669b094ae0763b00bdf1)): ?>
<?php $attributes = $__attributesOriginal2f9894a01a11669b094ae0763b00bdf1; ?>
<?php unset($__attributesOriginal2f9894a01a11669b094ae0763b00bdf1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f9894a01a11669b094ae0763b00bdf1)): ?>
<?php $component = $__componentOriginal2f9894a01a11669b094ae0763b00bdf1; ?>
<?php unset($__componentOriginal2f9894a01a11669b094ae0763b00bdf1); ?>
<?php endif; ?>
                                 </div>

                                 <!--[if BLOCK]><![endif]--><?php if($typeValue == 'email'): ?>

                                     <strong class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                         'text-danger' => $this->data['emailData'] == 'noRecoveryEmail',
                                     ]); ?>"><?php echo e(__($this->data['emailData'])); ?></strong>

                                     <!--[if BLOCK]><![endif]--><?php if($this->data['emailData'] != 'noRecoveryEmail'): ?>
                                         <div>
                                             <button wire:click='sendResetLink' wire:loading.remove id="sendBtn"
                                                 class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2"><?php echo e(__('customTrans.send')); ?>

                                             </button>
                                         </div>
                                     <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                 <?php elseif($typeValue == 'questions'): ?>
                                     <!--[if BLOCK]><![endif]--><?php if(gettype($this->data['questionsData']) != 'array'): ?>
                                         <strong class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                             'text-danger' => $this->data['questionsData'] == 'noQuestions',
                                         ]); ?>">
                                             <?php echo e(__($this->data['questionsData'])); ?> </strong>
                                     <?php else: ?>
                                         <?php
                                             $question = 'question_' . app()->getLocale();
                                         ?>

                                         <p><?php echo e($this->data['questionsData'][0]->questions->$question ??''); ?></p>
                                         <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['wire:model' => 'answer1','name' => 'answer1','label' => 'yes','divlclass' => 'col-lg-12','req' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'answer1','name' => 'answer1','label' => 'yes','divlclass' => 'col-lg-12','req' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                                         <p><?php echo e($this->data['questionsData'][1]->questions->$question??''); ?></p>
                                         <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['wire:model' => 'answer2','name' => 'answer2','label' => 'yes','divlclass' => 'col-lg-12','req' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'answer2','name' => 'answer2','label' => 'yes','divlclass' => 'col-lg-12','req' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                                         <p><?php echo e($this->data['questionsData'][2]->questions->$question ??''); ?></p>
                                         <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['wire:model' => 'answer3','name' => 'answer3','label' => 'yes','divlclass' => 'col-lg-12','req' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'answer3','name' => 'answer3','label' => 'yes','divlclass' => 'col-lg-12','req' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>

                                         <div wire:loading>
                                             <img src="<?php echo e(asset('template-assets/valex/img/loader.svg')); ?>"
                                                 alt="Loader">
                                         </div>


                                         <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['wire:model' => 'password','type' => 'password','name' => 'password','class' => 'mr-4','label' => 'yes','autocomplete' => 'new-password','divlclass' => 'col-lg-12','req' => true,'dir' => 'ltr']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'password','type' => 'password','name' => 'password','class' => 'mr-4','label' => 'yes','autocomplete' => 'new-password','divlclass' => 'col-lg-12','req' => true,'dir' => 'ltr']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['wire:model' => 'passwordConfirmation','name' => 'passwordConfirmation','id' => 'password_confirmation','type' => 'password','label' => 'yes','dir' => 'ltr','autocomplete' => 'new-password','divlclass' => 'col-lg-12','req' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'passwordConfirmation','name' => 'passwordConfirmation','id' => 'password_confirmation','type' => 'password','label' => 'yes','dir' => 'ltr','autocomplete' => 'new-password','divlclass' => 'col-lg-12','req' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>

                                         <div>
                                             <button wire:click.prevent='changePassword' wire:loading.remove
                                                 class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2"><?php echo e(__('customTrans.Change_Password')); ?>

                                             </button>
                                         </div>

                                         <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['wrongAnswer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                             <div class="w-100 bg-danger text-white text-center">
                                                 <p><?php echo e(__('customTrans.wrongAnswer')); ?></p>
                                             </div>
                                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                     <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                 <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                             <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                         </div>

                         <div class="form-group d-flex flex-wrap flex-center mt-10">
                             <?php if (isset($component)) { $__componentOriginal3c726f8bb9601e022c4145892a8f8516 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c726f8bb9601e022c4145892a8f8516 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cancel-back','data' => ['class' => 'btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2','route' => route('login'),'wire:navigate' => true,'label' => 'cancel_back','wire:loading.remove' => true,'wire:target' => 'sendResetLink']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cancel-back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('login')),'wire:navigate' => true,'label' => 'cancel_back','wire:loading.remove' => true,'wire:target' => 'sendResetLink']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c726f8bb9601e022c4145892a8f8516)): ?>
<?php $attributes = $__attributesOriginal3c726f8bb9601e022c4145892a8f8516; ?>
<?php unset($__attributesOriginal3c726f8bb9601e022c4145892a8f8516); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c726f8bb9601e022c4145892a8f8516)): ?>
<?php $component = $__componentOriginal3c726f8bb9601e022c4145892a8f8516; ?>
<?php unset($__componentOriginal3c726f8bb9601e022c4145892a8f8516); ?>
<?php endif; ?>

                         </div>

                     </form>
                 </div>


             </div>
         </div>
     </div>



 </div>




 <?php $__env->startPush('js'); ?>
     
 <?php $__env->stopPush(); ?>


 </div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/login/forget-password.blade.php ENDPATH**/ ?>