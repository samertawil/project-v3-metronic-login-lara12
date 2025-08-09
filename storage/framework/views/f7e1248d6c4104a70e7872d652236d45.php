<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row-fluid">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
            style="background-image: url('<?php echo e(asset('template-assets/metronic7/media/bg/bg-3.jpg')); ?>');">
            <div class="login-form text-center p-7 position-relative overflow-hidden">
                <div>


                    <form wire:submit='resetPassword' class="login-forgot form-group form">

                        <div class="login-forgot">
                            <div class="mb-10">
                                <h1><?php echo e(__('customTrans.Change_Password')); ?></h1>
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
                        
                       
                        

                        <div class="form-group mb-10" style="position: relative;">
                            <input wire:model='currentPassword' name="currentPassword" dir="ltr"
                                id="currentPassword"
                                class="form-control form-control-solid h-auto py-4 px-8 text-center <?php $__errorArgs = ['currentPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                type="password" placeholder="<?php echo e(__('customTrans.currentPassword')); ?>" required autocomplete="new-password" />
                            <span toggle="#currentPassword" class="fa fa-fw fa-eye field-icon toggle-password <?php $__errorArgs = ['currentPassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  pb-6 px-4 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;"></span>
                            <?php echo $__env->make('layouts._show-error', ['field_name' => 'currentPassword'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>
                        
                        <div class="form-group mb-10" style="position: relative;">
                            <input wire:model='password' name="password" dir="ltr"
                                id="password"
                                class="form-control form-control-solid h-auto py-4 px-8 text-center <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                type="password" placeholder="<?php echo e(__('customTrans.password')); ?>" required autocomplete="new-password" />
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  pb-6 px-4 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;"></span>
                            <?php echo $__env->make('layouts._show-error', ['field_name' => 'password'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>


                        <div class="form-group mb-10" style="position: relative;">
                            <input wire:model='passwordConfirmation' name="passwordConfirmation" dir="ltr"
                                id="passwordConfirmation"
                                class="form-control form-control-solid h-auto py-4 px-8 text-center <?php $__errorArgs = ['passwordConfirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                type="password" placeholder="<?php echo e(__('customTrans.passwordConfirmation')); ?>" required autocomplete="new-password" />
                            <span toggle="#passwordConfirmation" class="fa fa-fw fa-eye field-icon toggle-password  <?php $__errorArgs = ['passwordConfirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  pb-6 px-4 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;"></span>
                            <?php echo $__env->make('layouts._show-error', ['field_name' => 'passwordConfirmation'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>

                        <div class="form-group d-flex flex-wrap flex-center mt-10">
                                
                            <button   class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2"><?php echo e(__('customTrans.renewPassword')); ?></button>
                          
                          
                            <?php if (isset($component)) { $__componentOriginal3c726f8bb9601e022c4145892a8f8516 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c726f8bb9601e022c4145892a8f8516 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cancel-back','data' => ['class' => 'btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2','route' => route('login'),'wire:navigate' => true,'label' => 'cancel_back','wire:loading.remove' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cancel-back'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2','route' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('login')),'wire:navigate' => true,'label' => 'cancel_back','wire:loading.remove' => true]); ?> <?php echo $__env->renderComponent(); ?>
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
    <?php $__env->startPush('js'); ?>
   
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/livewire/ui_auth/change-password.blade.php ENDPATH**/ ?>