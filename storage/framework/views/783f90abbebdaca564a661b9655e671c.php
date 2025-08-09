
<?php
$current = LaravelLocalization::getCurrentLocale();
?>


<div class="text-center w-100">

    <!--[if BLOCK]><![endif]--><?php if($current == 'en'): ?>
        <a rel="alternate" hreflang="ar"
            href="<?php echo e(LaravelLocalization::getLocalizedURL('ar', null, [], true)); ?>">
            <span style="font-size: 12px;"><?php echo e(__('customTrans.ar')); ?> </span> </a> <small
            style="font-size: 12px;"><?php echo e(__('customTrans.langName')); ?></small>
    <?php else: ?>
        <small style="font-size: 12px;"><?php echo e(__('customTrans.langName')); ?></small>

        <a rel="alternate" hreflang="en"
            href="<?php echo e(LaravelLocalization::getLocalizedURL('en', null, [], true)); ?>">
            <span style="font-size: 12px;"> </small> <?php echo e(__('customTrans.en')); ?></span> </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH C:\xampp\htdocs\project-v3-metronic-login-lara12\resources\views/partials/general/_lang.blade.php ENDPATH**/ ?>