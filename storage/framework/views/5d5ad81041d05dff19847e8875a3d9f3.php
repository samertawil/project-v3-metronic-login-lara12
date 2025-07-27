 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />  

<link rel="shortcut icon" href="<?php echo e(asset('template-assets/metronic7/media/logos/favicon.ico')); ?>" />

<link href="<?php echo e(asset('template-assets/main.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/valex/css/icons.css')); ?>" rel="stylesheet">



<?php if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl'): ?>
<link href="<?php echo e(asset('template-assets/metronic7/plugins/global/plugins.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/css/style.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/plugins/custom/prismjs/prismjs.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/css/themes/layout/header/base/light.rtl.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/css/themes/layout/header/menu/light.rtl.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/css/themes/layout/brand/dark.rtl.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/css/themes/layout/aside/dark.rtl.css')); ?>" rel="stylesheet" type="text/css" /> 
<?php else: ?>
<link href="<?php echo e(asset('template-assets/metronic7/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('template-assets/metronic7/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet" type="text/css" /> 
<?php endif; ?>


<?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/partials/metronic7/head.blade.php ENDPATH**/ ?>