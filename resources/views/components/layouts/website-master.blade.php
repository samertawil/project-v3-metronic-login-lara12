<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 

<head>
    <base href="">
    <title>{{ $title ?? env('app_name') }}</title>
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    {{-- <meta property="og:locale" content="en_US" /> --}}
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{asset('website-assets/media/logo2.ico')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('website-assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('website-assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template-assets/main.css')}}" rel="stylesheet" type="text/css">
    
    @livewireStyles
    @filepondScripts
    @stack('css')
</head>
 

<body>
    <div>
        <livewire:Website.TopNavbar></livewire:Website.TopNavbar> 
    </div>
   
    <div>
      
        {{ $slot }}
    </div>

    <div>
        <livewire:Website.Footer></livewire:Website.Footer>
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

    @livewireScripts

    @stack('js')
</body>

</html>
