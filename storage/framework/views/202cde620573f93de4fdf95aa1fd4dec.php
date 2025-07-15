 
    <div>
        <!--[if BLOCK]><![endif]--><?php if($status): ?>
            <div class="alert alert-success"><?php echo e($status); ?></div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <!--[if BLOCK]><![endif]--><?php if($error): ?>
            <div class="alert alert-danger"><?php echo e($error); ?></div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    
        <form wire:submit.prevent="resetPassword">
            <input type="hidden" wire:model="token">
            <div class="mb-3">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" id="email" wire:model="email" class="form-control">
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="mb-3">
                <label for="password">كلمة المرور الجديدة</label>
                <input type="password" id="password" wire:model="password" class="form-control">
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="mb-3">
                <label for="password_confirmation">تأكيد كلمة المرور</label>
                <input type="password" id="password_confirmation" wire:model="password_confirmation" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">تغيير كلمة المرور</button>
        </form>
    </div>
    
 
<?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/livewire/ui_auth/reset-password.blade.php ENDPATH**/ ?>