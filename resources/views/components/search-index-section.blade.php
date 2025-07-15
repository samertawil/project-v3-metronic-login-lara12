
@props([

'search'=>'search',
'place'=>'بحث',
])

<div>



<div class="row justify-content-between align-items-center">
    <div class="col-sm-12 col-md-2">
        <div> <span class="ml-1">{{ __('customTrans.record') }}</span> <label><select wire:model.live='perPage'
                    class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select></label></div>
    </div>

    <div class="col-sm-12 col-md-3">
        <x-input  type="search" name="search"  placeholder="{{$place}}"  divWidth="12" wire:model.live='search'></x-input>
    </div>

    {{$slot??''}}
     
</div>
</div>
 

{{-- '__("customTrans.$search")' --}}