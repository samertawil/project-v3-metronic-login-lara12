@props([
    'type' => '',
    'name' => '',
    'value' => '',
    'dataUrl' => '',
    'dir' => '',
    'label' => '',
    'placeholder' => '',
    'title' => '',
    'labelclass' => '',
    'options' => [],
    'labelname' => '',
    'req' => '',
    'id' => '',
    'divWidth' => '3',
    'divlclass' => '',
    'ChoseTitle' => 'choose',
    'divId' => null,
    'jsSelect2' => null,
    'wireIgone' => null,
    'marginBottom' => '3',
    'description_field' => null,
    'NoOptions' => null,
])


<div @class([
    "form-group  mb-$marginBottom col-md-4 col-lg-$divWidth",
    $divlclass,
]) data-url={{ $dataUrl }} id={{ $divId }}>




    @if ($label)
        <label for="{{ $id }}"
            @class(["col-form-label   $labelclass "])>{{ $labelname ? $labelname : __("customTrans.$name") }}
            @if ($req)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif
    <div @if ($wireIgone) wire:ignore @endif>
        <select id="{{ $id }}" name="{{ $name }}" dir={{ $dir }} title="{{ $title }}"
            {{ $attributes->class(['form-control ', 'is-invalid' => $errors->has($name)]) }}>
            @if (!$NoOptions)
                <option value="">{{ __("customTrans.$ChoseTitle") }} </option>
            @endif


            @foreach ($options as $key => $value)
                <option  value="{{ $key }}" @selected(old($name) ? old($name) == $key : '')
                    id="{{ $name }}{{ $key }}">
                    {{ $value }} </option>
            @endforeach
        </select>
        <small class="text-muted">{{ $description_field }}</small>
        @include('partials.general._show-error', ['field_name' => $name])
    </div>

</div>


@if ($jsSelect2)
    @push('js')
        <script>
            $('.js-select2').select2({
                 placeholder: "اختر",
                allowClear: true,

            });

            $('.js-select2').on('change', function(event) {
                let modelName = $(this).attr('name');
                @this.set(modelName, event.target.value);
            })
        </script>
    @endpush
@endif
