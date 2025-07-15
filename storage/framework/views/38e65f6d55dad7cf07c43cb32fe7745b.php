<div class="d-flex flex-column flex-root">
 
    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
            style="background-image: url('<?php echo e(asset('template-assets/metronic7/media/bg/bg-3.jpg')); ?>');">

            <div class="login-form   p-7 position-relative overflow-hidden">
                 <div class="">
                     <div class="h3 text-center"><?php echo e(__('customTrans.register_new_account')); ?></div>

                     <div class="card-body">

                         <form wire:submit='register'>



                             <div class="form-group mb-5 ">
                                 <input req wire:model.live='user_name' name="user_name"
                                     class="form-control h-auto form-control-solid py-4 px-8 <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                         
                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                     type="text" placeholder="<?php echo e(__('customTrans.user_name')); ?>" />
                                 <?php echo $__env->make('layouts._show-error', ['field_name' => 'user_name'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                             </div>

                             <div class="form-group mb-5">
                                 <input req wire:model.live='name' name="name"
                                     class="form-control h-auto form-control-solid py-4 px-8 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                        
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                     type="text" placeholder="<?php echo e(__('customTrans.fullName')); ?>" />
                                 <?php echo $__env->make('layouts._show-error', ['field_name' => 'name'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                             </div>



                             <div class="form-group mb-5">
                                 <input req wire:model.live='mobile' name="mobile"
                                     class="form-control h-auto form-control-solid py-4 px-8 <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                        
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                     type="text" placeholder="<?php echo e(__('customTrans.mobile')); ?>" />
                                 <?php echo $__env->make('layouts._show-error', ['field_name' => 'mobile'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                             </div>



                             <div class="form-group mb-5">
                                 <input req wire:model.live='email' name="email"
                                     class="form-control h-auto form-control-solid py-4 px-8  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                        
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                     type="text" placeholder="<?php echo e(__('customTrans.email')); ?>" />
                                 <?php echo $__env->make('layouts._show-error', ['field_name' => 'email'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                             </div>




                             <?php
                                 $questions = 'question_' . app()->getLocale();
                             ?>
                             <div class="text-center" style="margin-top: 50px; margin-bottom: 30px;">
                                 <p><?php echo e(__('customTrans.recoveryQuestions')); ?></p>
                             </div>
                             <div>
                                 <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $repeater; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <tr>
                                         <td>

                                             <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model' => 'recoveryQuestions.0','name' => 'recoveryQuestions.0','class' => 'form-control h-auto form-control-solid py-4 px-8','choseTitle' => 'recoveryQuestions.0','options' => $this->QuestionData->pluck($questions, 'id'),'divlclass' => 'col-lg-12 px-0','wire:change' => 'QuestionData2','req' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'recoveryQuestions.0','name' => 'recoveryQuestions.0','class' => 'form-control h-auto form-control-solid py-4 px-8','ChoseTitle' => 'recoveryQuestions.0','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->QuestionData->pluck($questions, 'id')),'divlclass' => 'col-lg-12 px-0','wire:change' => 'QuestionData2','req' => true]); ?> <?php echo $__env->renderComponent(); ?>
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

                                         <div class="form-group mb-5  ">
                                             <input wire:model='answers.0' name="answers.0"
                                                 class="form-control h-auto form-control-solid py-4 px-8  <?php $__errorArgs = ['answers.0'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                                    
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                 type="text" placeholder="<?php echo e(__('customTrans.answers.0')); ?>" />
                                             <?php echo $__env->make('layouts._show-error', ['field_name' => 'answers.0'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                         </div>


                                         <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model' => 'recoveryQuestions.1','options' => $this->QuestionData2->pluck($questions, 'id'),'name' => 'recoveryQuestions.1','choseTitle' => 'recoveryQuestions.1','class' => 'form-control h-auto form-control-solid py-4 px-8','divlclass' => 'col-lg-12  px-0','wire:change' => 'QuestionData3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'recoveryQuestions.1','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->QuestionData2->pluck($questions, 'id')),'name' => 'recoveryQuestions.1','ChoseTitle' => 'recoveryQuestions.1','class' => 'form-control h-auto form-control-solid py-4 px-8','divlclass' => 'col-lg-12  px-0','wire:change' => 'QuestionData3']); ?> <?php echo $__env->renderComponent(); ?>
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

                                         <div class="form-group mb-5">
                                             <input wire:model='answers.1' name="answers.1"
                                                 class="form-control h-auto form-control-solid py-4 px-8  <?php $__errorArgs = ['answers.1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                                    
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                 type="text" placeholder="<?php echo e(__('customTrans.answers.1')); ?>" />
                                             <?php echo $__env->make('layouts._show-error', ['field_name' => 'answers.1'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                         </div>



                                         <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['wire:model' => 'recoveryQuestions.2','options' => $this->QuestionData3->pluck($questions, 'id'),'name' => 'recoveryQuestions.2','choseTitle' => 'recoveryQuestions.2','class' => 'form-control h-auto form-control-solid py-4 px-8','divlclass' => 'col-lg-12 px-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'recoveryQuestions.2','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->QuestionData3->pluck($questions, 'id')),'name' => 'recoveryQuestions.2','ChoseTitle' => 'recoveryQuestions.2','class' => 'form-control h-auto form-control-solid py-4 px-8','divlclass' => 'col-lg-12 px-0']); ?> <?php echo $__env->renderComponent(); ?>
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

                                         <div class="form-group mb-5">
                                             <input wire:model='answers.2' name="answers.2"
                                                 class="form-control h-auto form-control-solid py-4 px-8  <?php $__errorArgs = ['answers.2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                                    
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                 type="text" placeholder="<?php echo e(__('customTrans.answers.2')); ?>" />
                                             <?php echo $__env->make('layouts._show-error', ['field_name' => 'answers.2'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                         </div>


                                     </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->


                             </div>
                             <div   style="margin-top: 50px; margin-bottom: 30px;"></div>
                             <div class="form-group mb-5" >
                                 <input wire:model='password' type="password" name="password"
                                     class="form-control h-auto form-control-solid py-4 px-8  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                     autocomplete="new-password" placeholder="<?php echo e(__('customTrans.password')); ?>" />
                                 <?php echo $__env->make('layouts._show-error', ['field_name' => 'password'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                             </div>

                             <div class="form-group mb-5 ">
                                 <input wire:model.live='passwordConfirmation' name="passwordConfirmation"
                                     id="password_confirmation" type="password"
                                     class="form-control h-auto form-control-solid py-4 px-8  <?php $__errorArgs = ['passwordConfirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                     placeholder="<?php echo e(__('customTrans.passwordConfirmation')); ?>" />
                                 <?php echo $__env->make('layouts._show-error', ['field_name' => 'password'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                             </div>

                             <div class="form-group d-flex flex-wrap flex-center mt-10">
                                
                                <button   class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2"><?php echo e(__('customTrans.register_new_account')); ?></button>
                              
                              
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
                            <?php echo $__env->make('layouts._show_errors_all', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                       
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/livewire/ui_auth/register.blade.php ENDPATH**/ ?>