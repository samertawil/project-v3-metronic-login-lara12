@props([
    'type' => 'text',
    'name'=>'',
    'value' => '',
    'dataUrl' => '',
    'dir' => '',
    'label'=>'',
    'id'=>'',
    'title'=>'',
    'labelclass'=>'',
    'description_field'=>'',
    'divlclass' =>'',
    'labelname'=>'',
    'req'=>'',
    'divWidth'=>'3',
	 'span'=>null,
    'description_field1'=>null,
    'marginBottom'=>'3',
   
    
    
])


<div   @class([ "form-group mb-$marginBottom col-md-4 col-lg-$divWidth" , $divlclass  ]) data-url={{ $dataUrl }}>

    @if ($label)
    <label for="{{ $id }}" @class(["col-form-label   $labelclass "])>{{$labelname?$labelname: __("customTrans.$name") }}
        @if($req)
        <span class="text-danger">*</span>
        @endif
		   @if ($span)
        <small class="text-muted">{{$description_field1}}</small>
        @endif
    </label>
    @endif
    
   
    
        <input 
          id="{{$id}}" 
          type="{{ $type }}"
          name="{{ $name }}"
          value="{{ old($name, $value) }}" 
          
          autocomplete="{{ $name }}"
          dir="{{ $dir }}"
          title="{{$title}}"
          
          {{$attributes->class(['form-control',
            'is-invalid' => $errors->has($name)]) }}>
        <small class="text-muted">{{$description_field}}</small>

        @include('partials.general._show-error',['field_name'=>$name])
     

    
</div>
