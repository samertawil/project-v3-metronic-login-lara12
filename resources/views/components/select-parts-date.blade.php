

@props([
    'nameYear'=>'year',
    'nameMonth'=>'month',
    'nameDay'=>'day',
    'label'=>'',
    'divlclass'=>'',
    'id'=>'',
    'req'=>'',
    'labelclass'=>'',
    'labelname'=>'',
    'name'=>'',
    'maxYear'=> date('Y',time()) ,
    'minYear'=>1900,

])

 

        <div   @class([ "row form-group align-items-center justify-content-between mb-3" , $divlclass  ]) >

        @if ($label)
        <label for="{{ $id }}" @class(["col-form-label   $labelclass "])>{{$labelname?$labelname: __("customTrans.$name") }}
            @if($req)
            <span class="text-danger">*</span>
            @endif
        </label>
        @endif


    <div class="col-4  text-center">
        <label for="" class="mb-2">{{ __('customTrans.year') }}</label>
        <select name="{{$nameYear}}" id="" wire:model="{{$nameYear}}"
            class="form-select @error('{{$nameYear}}') is-invalid @enderror">
            <option value="" hidden></option>
            @for ($i =$maxYear; $i >= $minYear; $i--)
                <option value="{{ $i }}" @selected(old('{{$nameYear}}') == $i)>
                    {{ $i }}</option>
            @endfor

        </select>
        @error('{{$nameYear}}')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
        @enderror

    </div>


    <div class="col-4   text-center">
        <label for="" class="mb-2">{{ __('customTrans.month') }}</label>
        <select name="{{$nameMonth}}" id=""  wire:model='month'
            class="form-select @error('month') is-invalid @enderror">
            <option value="" hidden></option>
            @for ($i = 1; $i <= 12; $i++)
                <option value="{{ $i < 10 ? '0' . $i : $i }}" @selected(old('month') == $i)>
                    {{ $i < 10 ? '0' . $i : $i }}</option>
            @endfor

        </select>

        @error('month')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
        @enderror
    </div>
    <div class="col-4   text-center">
        <label for="" class="mb-2">{{ __('customTrans.day') }}</label>
        <select name="{{$nameDay}}" id=""  wire:model='day'
            class="form-select @error('day') is-invalid @enderror">
            <option value="" hidden></option>
            @for ($i = 1; $i <= 31; $i++)
                <option value="{{ $i < 10 ? '0' . $i : $i }}"
                    @selected(old('day') == $i)>
                    {{ $i < 10 ? '0' . $i : $i }}</option>
            @endfor

        </select>
        @error('day')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
        @enderror
    </div>
   
</div>
