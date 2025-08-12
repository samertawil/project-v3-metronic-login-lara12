 @props([
    'type' => 'text',
    'name',
    'value' => '',
    'dataUrl' => '',
    'dir' => '',
    'label'=>'',
    'placeholder'=>'',
    'title'=>'',
    'labelclass'=>'',
    'cols'=>'10',
    'rows'=>'1',
    'divclass'=>'',
    'labelname'=>'',
    'id'=>null,
    'req'=>'',
    'divWidth'=>3,
    'span'=>null,
    'description_field1'=>null,
    'marginBottom'=>'3',
 ])
 
 <div
  @class(["form-group mb-$marginBottom col-md-4 col-lg-$divWidth",$divclass])  >

  @if ($label)
  <label for="{{ $id }}" @class(["col-form-label  $labelclass   "])>{{$labelname?$labelname: __("customTrans.$name") }}
      @if($req)
      <span class="text-danger">*</span>
      @if ($span)
      <small class="text-muted">{{$description_field1}}</small>
      @endif
      @endif
  </label>
  @endif


     <textarea
      name="{{ $name }}" 
      type="{{ $type }}"
       id={{$id ??$name}}
       cols="{{$cols}}"
        rows="{{$rows}}"
        placeholder="{{$placeholder}}"
         {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>{{ old($name) }}</textarea>
             

         @include('partials.general._show-error',['field_name'=>$name])

 </div>
