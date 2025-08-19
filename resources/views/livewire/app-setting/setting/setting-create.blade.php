<div>

    <x-slot:crumb>
        <x-breadcrumb></x-breadcrumb>
    </x-slot:crumb>

    
    <form wire:submit='store'>
        <div class="row">
            <x-input name="key" wire:model='key' label divWidth="4"></x-input>
            <x-input name="value" wire:model='value' label divWidth="3"></x-input>
          
            <div name="properties" id="properties">

                @foreach ($attributeValue_attchments as $index => $question)
                    <div class=" row align-items-center  w-100">

                    
                        <x-input  wire:model="attributeValue_attchments.{{ $index }}" divWidth="9" label labelname="القيمة متعدد"
                            name="attributeValue_attchments.{{ $index }}"></x-input>
                            


                        <x-actions mins
                            wire:click.prevent='removeQuestion_attchments({{ $index }})'></x-actions>

                    </div>
                @endforeach

            </div>

        </div>

        <div class="d-flex  align-items-center">

            <x-actions plus wire:click.prevent='addQuestion_attchments'></x-actions>

            <small class="col-12 text-info mt-1  ">يمكنك الضغط على زر "+" لاضافة خانات جديدة</small>

            <div class="pb=5 mb-5"></div>
        </div>
<div class="row">

    <x-input name="description" wire:model='description' label divWidth="4"></x-input>
    <x-textarea name="notes" wire:model='notes' label divWidth="6" rows="3"></x-textarea>

</div>
   
        <x-saveClearbuttons close></x-saveClearbuttons>
    </form>
</div>
