@props([
    'pageTitle' => '',
    'button' => '',
    'type' => '',
    'label' => __('customTrans.save'),
    'divlclass' => '',
    'route' => null,
    'iclass' => '',
    'crumb' => null,
])



<div class="w-100 d-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">

    <div class="container-lg">
        <div class="breadCrumb">
            <div class="row">
                <div class="col-custom">
                    <h1> {{ $pageTitle ?? 'Page Title' }}</h1>
                   
                    <div class="links">
                        {{-- <a href="{{route('website')}}" class="text-muted">{{__('customTrans.home page')}} </a> --}}
                        
                        {{$slot ?? ''}}
                    </div>

 
                </div>
            </div>
        </div>
    </div>

 

</div>


{{-- <x-breadcrumb-website :pageTitle="__('customTrans.programs')">

    <a href="{{ route('programs.list') }}" class="text-muted">{{ __('customTrans.programs') }} </a>

</x-breadcrumb-website> --}}
