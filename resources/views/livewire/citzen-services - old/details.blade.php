<div>
    <div class="d-flex  justify-content-end">
        @if ($goEdit == 0)
            <x-actions edit wire:loading.attr='disabled' wire:click.prevent='edit'></x-actions>
        @else
            <x-actions make wire:loading.attr='disabled' wire:click.prevent='update'></x-actions>
            <x-actions cancel wire:loading.attr='disabled' wire:click.prevent='cancelEdit'></x-actions>
        @endif
    </div>

    @if ($goEdit == 0)
        <div>

            <span style="  font-weight: bold;">{{ __('customTrans.services Responsible') }}</span> : {{ $Responsible }}
            <br>
            <br>
            <span style="  font-weight: bold;">{{ __('customTrans.url_active_from_date') }}</span> :
            {{ $url_active_from_date }}
            <br> <br>
            <span style="  font-weight: bold;">{{ __('customTrans.url_active_to_date') }}</span> : {{ $url_active_to_date }}
            <br>
            <br>
            <span style="  font-weight: bold;">{{ __('customTrans.url') }} </span>: {{ $url }} <br> <br>
            <span style="  font-weight: bold;"> {{ __('customTrans.route_name') }}</span> : {{ $route_name }} <br> <br>
            <span style="  font-weight: bold;">{{ __('customTrans.description') }}</span> : {{ $description }} <br> <br>
            <span style="  font-weight: bold;">{{ __('customTrans.note') }}</span> : {{ $note }} <br> <br>
            <span style="  font-weight: bold;">{{ __('customTrans.home_page_order') }}</span> : {{ $home_page_order }}
            <br> <br>
            <span style="  font-weight: bold;">{{ __('customTrans.teal') }}</span> : {{ $teal }} <br> <br>
            <span style="  font-weight: bold;">{{ __('customTrans.deactive_note') }}</span><span class="text-muted">
                deactive_note </span> : {{ $deactive_note }} <br> <br>
            <span style="  font-weight: bold;">{{ __('customTrans.services conditions') }}</span> : {{ $conditions }}
            <br>
            <br>
            <span style="  font-weight: bold;">{{ __('customTrans.properties') }}</span>
            @foreach ($properties??[] as $key=>$value )
          <li>  {{  $key }} : {{ $value }}</li>
            @endforeach
          
        </div>
    @endif

    @if ($goEdit == 1)
        <div>

            <div class="row">

                <x-input wire:model='Responsible' name='Responsible' :labelname="__('customTrans.services Responsible')" label divWidth='6'></x-input>

            </div>

            <div class="row">

                <x-input type='date' wire:model='url_active_from_date' name='url_active_from_date' label
                    divWidth='6'></x-input>

                <x-input type='date' wire:model='url_active_to_date' name='url_active_to_date' label
                    divWidth='6'></x-input>


            </div>

            <div class="row">

                <x-input wire:model='url' name='url' label :labelname="__('customTrans.url service')" divWidth='6'></x-input>

                <x-input wire:model='route_name' name='route_name' label divWidth='6'></x-input>

            </div>



            <div class="row">

                <x-textarea wire:model='description' name='description' label divWidth='6'
                    rows='4'></x-textarea>

                <x-textarea wire:model='note' name='note' label :labelname="__('customTrans.note')" divWidth='6'
                    rows='4'></x-textarea>

            </div>


            <div class="row align-items-center">

                <x-textarea wire:model='conditions' name='conditions' data-provide="markdown" label :labelname="__('customTrans.conditions')"
                    divWidth='6' rows='13'></x-textarea>


                <div class="col-5">
                    <x-textarea wire:model='deactive_note' name='deactive_note' label :labelname="__('customTrans.deactive_note')" divWidth='12'
                        rows='4' span description_field1=" بحال ايقاف الخدمة"></x-textarea>

                    <x-input type="number" min="0" wire:model='home_page_order' name='home_page_order' label
                        divWidth='12'></x-input>

                    <x-input wire:model='teal' name='teal' label divWidth='12'></x-input>

                </div>

                @foreach ($properties??[] as $key=>$value )
                <li> <x-input value=" {{$key}}" name='properties' label divWidth='12'></x-input></li>
                 
               
                @endforeach
            </div>

        </div>
    @endif



</div>
