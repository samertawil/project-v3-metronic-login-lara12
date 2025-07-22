<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
 

<head>
    <base href="">
    <title><?php echo e($title ?? env('app_name')); ?></title>
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="<?php echo e(asset('website-assets/media/logo2.ico')); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?php echo e(asset('website-assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('website-assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('template-assets/main.css')); ?>" rel="stylesheet" type="text/css">
    
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

        <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/_filepond/styles?v=1.4.1">
    <script type="module" src="http://127.0.0.1:8000/_filepond/scripts?v=1.4.1" data-navigate-once defer data-navigate-track></script>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>
 

<body>
    <div>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('Website.TopNavbar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-311118587-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?></livewire:Website.TopNavbar> 
    </div>
   
    <div>
      
        <?php echo e($slot); ?>

    </div>

    <div>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('Website.Footer', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-311118587-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?></livewire:Website.Footer>
    </div>


    <script>
        var hostUrl = "website-assets/";
    </script>
    <script src="website-assets/plugins/global/plugins.bundle.js"></script>
    <script src="website-assets/js/scripts.bundle.js"></script>
    <script src="website-assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="website-assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <script src="website-assets/js/custom/landing.js"></script>
    <script src="website-assets/js/custom/pages/company/pricing.js"></script>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>


    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/components/layouts/website-master.blade.php ENDPATH**/ ?>