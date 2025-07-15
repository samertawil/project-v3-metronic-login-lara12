@props([
    'type' => 'text',
    'name',
    'value' => '',
    'value1' => '',
    'value2' => '',
    'dataUrl' => '',
    'dir' => '',
    'label' => '',
    'placeholder' => '',
    'title' => '',
    'labelclass' => '',
    'value_title1' => '',
    'value_title2' => '',
    'divWidth' => 3,
    'labelname' => null,
    'divclass' => null,
    'style1'=>null,
])



<div @class(["form-group mb-3 col-md-4 col-lg-$divWidth", $divclass])>

    @if ($label)
        <label @class(["col-form-label  $labelclass "])>{{ $labelname ?? __("customTrans.$name") }}</label>
    @endif


    <div class="d-flex justify-content-center" style="{{$style1}}">

        <div>
            <input type="radio" id={{ $value1 }} name="{{ $name }}" value="{{ $value1 }}"
                @checked(old($name) ? old($name) == $value1 : '')
                {{ $attributes->class(['form-check-input', 'is-invalid' => $errors->has($name)]) }}>


            <label for={{ $value1 }}
                class="form-label fw-normal mr-4">{{ __("customTrans.$value_title1") }}</label>
            @include('partials.general._show-error', ['field_name' => $name])
        </div>
        <div class="mx-4 ">

            <input type="radio" id="id2" name="{{ $name }}" value="{{ $value2 }}"
                @checked($name ? old($name) == $value2 : '')
                {{ $attributes->class(['form-check-input  ', 'is-invalid' => $errors->has($name)]) }}>
            <label for="id2" class="form-label fw-normal ">{{ __("customTrans.$value_title2") }}</label>
        </div>
    </div>
</div>
