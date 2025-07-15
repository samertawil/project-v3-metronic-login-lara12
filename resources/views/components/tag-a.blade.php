
<div>

    @props([
        'route' => '#',
        'label' => '',
        'divlclass'=>'',
        'name'=>'',
        'iclass'=>'',
         'text_dir'=>'text-right',
        'default_class'=>'btn btn-sm btn-info'
    ])

         

<div @class([' my-4 ', $divlclass,$text_dir])>

    <a  href={{$route}}
        {{$attributes->class([$default_class,
             ]) }}  >{{$name}}
             @if($iclass)
              <i class="las la-trash"></i>
              @endif
    </a>

</div>
    
</div>


{{-- 
<x-tag-a :route="route($service->route_name)" :name="__('customTrans.sign in')" default_class="btn btn-outline-secondary  btn-light-primary"
    style="width: 100px; height: 38px; font-size:13px;"></x-tag-a> --}}