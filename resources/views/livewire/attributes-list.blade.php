 <div>
     {{-- <div>


         <div class="pr-3" name="properties" id="properties">

             @foreach ($attributeValue as $index => $question)
                 <div class=" row align-items-center">

                     <Select @class(['form-control  w-25']) wire:change="SelectFileType($event.target.value)"
                         wire:model='attributeColumn.{{ $index }}'>
                         <option value="">اختار اعمدة</option>

                         @foreach ($all_templates ?? [] as $template1)
                             <option value="{{ $template1->status_name }}">
                                 {{ $template1->status_name }}
                             </option>
                         @endforeach
                     </Select>

                     <x-input wire:model="attributeValue.{{ $index }}" name="attributeValue{{ $index }}"
                         divWidth="4" marginBottom="0"></x-input>



                     <x-actions mins wire:click.prevent='removeQuestion({{ $index }})'></x-actions>

                 </div>
             @endforeach

         </div>



         <x-actions plus wire:click.prevent='addQuestion'></x-actions>





         <x-button wire:click.prevent='store' label="save and back"></x-button>


         <p> {{ __('customTrans.add new colums') }} <span><a href="{{ route('appsetting.status') }}"
                     target="_blank">{{ __('customTrans.here') }} </a> </span></p>



     </div> --}}

     <div>


        <div class="pr-3" name="properties" id="properties">

            @foreach ($attributeValue as $index => $question)
                <div class=" row align-items-center">

                    <Select @class(['form-control  w-25']) 
                        wire:model='attributeColumn.{{ $index }}'>
                        <option value="">اختار اعمدة</option>

                        @foreach ($all_templates2 ?? [] as $template1)
                            <option value="{{ $template1->status_name }}">
                                {{ $template1->status_name }}
                            </option>
                        @endforeach
                    </Select>

                    {{-- <x-input type="file" wire:model="attributeValue.{{ $index }}" name="attributeValue{{ $index }}"
                        divWidth="4" marginBottom="0"></x-input> --}}

                        <input type="file" wire:model="attributeValue.{{ $index }}"   accept="image/*" multiple>

                    <x-actions mins wire:click.prevent='removeQuestion({{ $index }})'></x-actions>

                </div>
            @endforeach

        </div>



        <x-actions plus wire:click.prevent='addQuestion'></x-actions>





        <x-button wire:click.prevent='store' label="save and back"></x-button>


        <p> {{ __('customTrans.add new colums') }} <span><a href="{{ route('appsetting.status') }}"
                    target="_blank">{{ __('customTrans.here') }} </a> </span></p>



    </div>
 </div>


 {{-- wire:change="SelectFileType($event.target.value)" --}}