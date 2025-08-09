<!--[if BLOCK]><![endif]--><?php if($errors->any()): ?>
<!--[if BLOCK]><![endif]--><?php $__currentLoopData = $errors->all(':message'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="text-right">
        <li class="text-danger"><small><?php echo e($error); ?></small></li>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/layouts/_show_errors_all.blade.php ENDPATH**/ ?>