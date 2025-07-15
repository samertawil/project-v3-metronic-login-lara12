@props([
    'CurrentPageTitle' => '',
    'button' => '',
    'type' => '',
    'label' => __('customTrans.save'),
    'divlclass' => '',
    'route' => null,
    'iclass' => '',
    'crumb'=>null,
])



<div class="w-100 d-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">
    
    
  
    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dash font-weight-bold p-0 my-2 font-size-sm">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}" class="text-muted">{{__('customTrans.home page')}} </a></li>
        {{$slot ?? ''}}
    </ul>
       


    @if ($button)
        <div @class(['text-left ml-1 pointer px-4', $divlclass , ])>

            <a @if ($route) href={{ $route }} @endif
                {{ $attributes->class(['btn btn-md btn-primary text-light px-5 ']) }}>{{ $label }}

            </a>

        </div>
    @endif

</div>


{{-- <ul class="breadcrumb breadcrumb-transparent breadcrumb-dash font-weight-bold p-0 my-2 font-size-sm">
    <li class="breadcrumb-item"><a href="" class="text-muted">Apps </a></li>
    <li class="breadcrumb-item"><a href="" class="text-muted">profile </a></li>
</ul> --}}