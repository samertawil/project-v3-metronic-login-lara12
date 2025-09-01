 <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$field_name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
     <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $errors->get($field_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li class="invalid-feedback "><small><?php echo e($error); ?></small></li>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/partials/general/_show-error.blade.php ENDPATH**/ ?>