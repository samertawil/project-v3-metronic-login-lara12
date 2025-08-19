<div>


    @if ($goEdit == 0)
        <div>

            <span style="  font-weight: bold;">{{ __('customTrans.services Responsible') }}</span> : {{ $Responsible }}
            <br><br>
            <span style="  font-weight: bold;">{{ __('customTrans.url_active_from_date') }}</span> :{{ $url_active_from_date }}
            <br><br>
            <span style="  font-weight: bold;">{{ __('customTrans.url_active_to_date') }}</span> : {{ $url_active_to_date }}
            <br><br>
            <span style="  font-weight: bold;">{{ __('customTrans.url') }} </span>: {{ $url }} <br> <br>
            <span style="  font-weight: bold;"> {{ __('customTrans.route_name') }}</span> : {{ $route_name }} <br><br>
            <span style="  font-weight: bold;">{{ __('customTrans.description') }}</span> : {{ $description }} <br><br>
            <span style="  font-weight: bold;">{{ __('customTrans.note') }}</span> : {{ $note }} <br> <br>
            <span style="  font-weight: bold;">{{ __('customTrans.home_page_order') }}</span> : {{ $home_page_order }}<br><br>
            <span style="  font-weight: bold;">{{ __('customTrans.teal') }}</span> : {{ $teal }} <br> <br>
            <span style="  font-weight: bold;">{{ __('customTrans.deactive_note') }}</span> {{ $deactive_note }} <br><br>
            <span style="  font-weight: bold;">{{ __('customTrans.services conditions') }}</span> :
            {{ $conditions }}<br><br>


            <span style="  font-weight: bold;">{{ __('customTrans.services collection images') }}</span> :

            <div class="form-group">

                @if ($logo1)
                    <div style="height: 100px; width: 50vw; margin-top:10px; " class="d-flex  justify-content-start ">
                        @foreach ($logo1 as $data_img)
                            <a href="{{ asset('storage/' . $data_img) }}" target="_blank">
                                <img src="{{ asset('storage/' . $data_img) }}"
                                    style="height: 100%;width: 100%; padding-left:20px;">
                            </a>
                        @endforeach

                    </div>
                @endif
            </div>

            <span style="  font-weight: bold;">{{ __('customTrans.card_header') }}</span> :

            <div class="form-group">
 
                @if ($card_header)
    
                    <div style="height: 100px; width: 50vw; margin-top:10px; " class="d-flex  justify-content-start ">

                        <a href="{{ asset('storage/' . $card_header) }}" target="_blank">
                            <img src="{{ asset('storage/' . $card_header) }}"
                                style="height: 100%;width: 100%; padding-left:20px;">
                        </a>


                    </div>
                @endif
            </div>

            {{-- <span style="  font-weight: bold;">{{ __('customTrans.properties') }}</span>
            @foreach ($properties ?? [] as $key => $value)
                <li> {{ $key }} : {{ $value }}</li>  
            @endforeach   --}}

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

                {{-- @foreach ($properties ?? [] as $key => $value)
                    <li> <x-input value=" {{ $key }}" name='properties' label divWidth='12'></x-input></li>
                @endforeach --}}
            </div>

            <div>


                <span style="  font-weight: bold;">{{ __('customTrans.services collection images') }}</span> :

                <div class="form-group">


                    @if ($logo1)
                        <div style="height: 100px; width: 50vw; margin-top:10px; "
                            class="d-flex  justify-content-start ">
                            @foreach ($logo1 as $key => $data_img)
                                <x-actions del wire:click.prevent='deleteAttchment( {{ $key }} )'></x-actions>

                                <a href="{{ asset('storage/' . $data_img) }}" target="_blank">
                                    <img src="{{ asset('storage/' . $data_img) }}"
                                        style="height: 100%;width: 100%; padding-left:20px;">
                                </a>
                            @endforeach

                        </div>
                    @endif


                </div>

                @if ($logo1_1)
                    {{ __('customTrans.preview') }}
                    @foreach ($logo1_1 as $image)
                        <img src="{{ $image->temporaryUrl() }}" class="w-50 w-lg-25 h-50 h-lg-25 p-4">
                    @endforeach

                @endif

                <div class="form-group">
                    <label for="logo1_1">اضافة صورة 1</label>
                    <input type="file" wire:model='logo1_1' name="logo1_1[]" @class ([
                        ' custom-file',
                        'form-control',
                        'is-invalid' => $errors->has('logo1*'),
                    ])
                        accept="image/*" multiple>

                    @error('logo1*')
                        <li class="invalid-feedback"> {{ $message }} </li>
                    @enderror

                </div>

            </div>


            <div>


                <span style="  font-weight: bold;">{{ __('customTrans.card_header') }}</span> :

                <div class="form-group">


                    @if ($card_header)
                        <div style="height: 100px; width: 50vw; margin-top:10px; "
                            class="d-flex  justify-content-start ">

                            <x-actions del wire:click.prevent='deleteCard_header'></x-actions>

                            <a href="{{ asset('storage/' . $card_header) }}" target="_blank">
                                <img src="{{ asset('storage/' . $card_header) }}"
                                    style="height: 100%;width: 100%; padding-left:20px;">
                            </a>


                        </div>
                    @endif


                </div>

                @if ($card_header_1)
                    {{ __('customTrans.preview') }}

                    <img src="{{ $card_header_1->temporaryUrl() }}" class="w-50 w-lg-25 h-50 h-lg-25 p-4">
                @endif

                <div class="form-group">
                    <label for="card_header_1">Card_header1</label>
                    <input type="file" wire:model='card_header_1' name="Card_header" @class ([
                        ' custom-file',
                        'form-control',
                        'is-invalid' => $errors->has('Card_header'),
                    ])
                        accept="image/*">

                    @error('Card_header')
                        <li class="invalid-feedback"> {{ $message }} </li>
                    @enderror
                </div>
            </div>

        </div>

 


        <div class="modal-footer"  >
            
            <x-button default_class="btn ripple btn-secondary "    wire:click.prevent='cancelEdit' label="close">
            </x-button>

            <x-button default_class="btn ripple btn-primary "   style="width: 100px;"
                wire:click.prevent='update'>{{ __('customTrans.save') }}</x-button>

        </div>  

 
    @endif


    @if ($goEdit == 0)
        <div class="modal-footer ">
            
            <x-button default_class="btn ripple btn-secondary" data-dismiss="modal" label="close"></x-button>

            <x-button default_class="btn ripple btn-primary" wire:loading.attr='disabled' style="width: 100px;"
                wire:click.prevent='edit' label="edit"></x-button>

        </div>
    @endif



</div>
