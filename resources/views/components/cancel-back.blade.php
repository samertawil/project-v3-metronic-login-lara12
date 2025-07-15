@props([
    'route'=>'',
    'label'=>null,
]) 

<div class="text-end">
    <a href="{{$route}}"  
    {{$attributes->class(['text-decoration-none text-end ', ])}} >
   
    {{$label ? __("customTrans.$label") : __("customTrans.cancel_back")}}  </a>
</div>

 