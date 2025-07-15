
<form action="<?php echo e(route('logout')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <button
        class="btn btn-sm btn-light-warning font-weight-bolder py-2 px-5"><?php echo e(__('customTrans.sign out')); ?></button>
</form><?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/partials/general/_logout.blade.php ENDPATH**/ ?>