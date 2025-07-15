 
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />  

<link rel="shortcut icon" href="{{asset('template-assets/metronic7/media/logos/favicon.ico')}}" />

<link href="{{ asset('template-assets/main.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/valex/css/icons.css')}}" rel="stylesheet">



@if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
<link href="{{asset('template-assets/metronic7/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/css/themes/layout/header/base/light.rtl.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/css/themes/layout/header/menu/light.rtl.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/css/themes/layout/brand/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/css/themes/layout/aside/dark.rtl.css')}}" rel="stylesheet" type="text/css" /> 
@else
<link href="{{asset('template-assets/metronic7/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('template-assets/metronic7/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" /> 
@endif


