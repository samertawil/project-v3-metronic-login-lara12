<!DOCTYPE html>

<?php
    if (app()->getLocale() == 'ar') {
        $dir = 'rtl';
    } else {
        $dir = 'ltr';
    }
?>


<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir=<?php echo e($dir); ?>>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('website-assets/media/logo2.ico')); ?>" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> <!--end::Fonts-->
   
    <?php if(app()->getLocale() == 'ar'): ?>
        <link href="<?php echo e(asset('template-assets/metronic7/css/pages/login/classic/login-4.rtl.min.css')); ?>" rel="stylesheet"
            type="text/css" />

        <link href="<?php echo e(asset('template-assets/metronic7/plugins/global/plugins.bundle.rtl.css')); ?>" rel="stylesheet"
            type="text/css" />
        <link href="<?php echo e(asset('template-assets/metronic7/plugins/custom/prismjs/prismjs.bundle.rtl.css')); ?>"
            rel="stylesheet" type="text/css" />

        <link href="<?php echo e(asset('template-assets/metronic7/css/style.bundle.rtl.css')); ?>" rel="stylesheet"
            type="text/css" />
    <?php else: ?>
        <link href="<?php echo e(asset('template-assets/metronic7/css/pages/login/classic/login-4.min.css')); ?>" rel="stylesheet"
            type="text/css" />

        <link href="<?php echo e(asset('template-assets/metronic7/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet"
            type="text/css" />
        <link href="<?php echo e(asset('template-assets/metronic7/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet"
            type="text/css" />

        <link href="<?php echo e(asset('template-assets/metronic7/css/style.bundle.min.css')); ?>" rel="stylesheet"
            type="text/css" />
    <?php endif; ?>
    

    <style>
        @font-face {
            font-family: 'Droid';

            src: url(<?php echo e(asset('uilogin-assets/fonts/ar/Droid.Arabic.Kufi_DownloadSoftware.iR_.ttf')); ?>);

        }


        @font-face {
            font-family: 'NotoSans';

            src: url(<?php echo e(asset('uilogin-assets/fonts/en/NotoSans-Regular.ttf')); ?>);
        }
 
        body {
           
            margin: 0 ;
            font-family: 'Droid', 'NotoKufiArabic', 'NotoSans', 'Courier New', Courier, monospace !important;

        }

        .toast-top-full-width {
        text-align: center;
    }

    .disabledTagA {
    pointer-events: none;
    cursor: default;
    text-decoration: none;
    color: black;
}

 
    </style>
    

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>

    <title><?php echo e($title ?? 'Page Title'); ?></title>
</head>
<style>
    #global-loader {
        position: fixed;
        z-index: 50000;
        background: #fff;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }

    .loader-img {
        position: absolute;
        right: 0;
        bottom: 0;
        top: 43%;
        left: 0;
        margin: 0 auto;
        text-align: center;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<body>
    <!-- Loader -->

    <div id="global-loader" wire:loading>
              <img src="<?php echo e(URL::asset('template-assets/valex/img/loader.svg')); ?>" class="loader-img" alt="Loader">
    </div>


    <?php echo e($slot ?? ''); ?>


 
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?php echo e(asset('template-assets/metronic7/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('template-assets/metronic7/plugins/custom/prismjs/prismjs.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('template-assets/metronic7/js/scripts.bundle.js')); ?>"></script>
    
    
    <script>
        var KTAppSettings = {
"breakpoints": {
    "sm": 576,
    "md": 768,
    "lg": 992,
    "xl": 1200,
    "xxl": 1200
},
"colors": {
    "theme": {
        "base": {
            "white": "#ffffff",
            "primary": "#6993FF",
            "secondary": "#E5EAEE",
            "success": "#1BC5BD",
            "info": "#8950FC",
            "warning": "#FFA800",
            "danger": "#F64E60",
            "light": "#F3F6F9",
            "dark": "#212121"
        },
        "light": {
            "white": "#ffffff",
            "primary": "#E1E9FF",
            "secondary": "#ECF0F3",
            "success": "#C9F7F5",
            "info": "#EEE5FF",
            "warning": "#FFF4DE",
            "danger": "#FFE2E5",
            "light": "#F3F6F9",
            "dark": "#D6D6E0"
        },
        "inverse": {
            "white": "#ffffff",
            "primary": "#ffffff",
            "secondary": "#212121",
            "success": "#ffffff",
            "info": "#ffffff",
            "warning": "#ffffff",
            "danger": "#ffffff",
            "light": "#464E5F",
            "dark": "#ffffff"
        }
    },
    "gray": {
        "gray-100": "#F3F6F9",
        "gray-200": "#ECF0F3",
        "gray-300": "#E5EAEE",
        "gray-400": "#D6D6E0",
        "gray-500": "#B5B5C3",
        "gray-600": "#80808F",
        "gray-700": "#464E5F",
        "gray-800": "#1B283F",
        "gray-900": "#212121"
    }
},
"font-family": "Poppins"
};
    </script>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scriptConfig(); ?>

    
    
    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\project-v3-metronic login-lara12\resources\views/components/layouts/uilogin-admin-app.blade.php ENDPATH**/ ?>