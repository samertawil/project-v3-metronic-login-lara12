<div>


    <form wire:submit='storeAbility'>
        <div class="row">


            <x-input type="text" name="ability_name" dir="ltr" autofocus label='yes' req
                description_field="ex: ModelName.functionName" wire:model="ability_name"></x-input>

            <x-input type="text" name="ability_description" label='yes' req :description_field="__('customTrans.ex_ability_desc')"
                wire:model="ability_description"></x-input>


            <x-input type="text" name="url" wire:model="url" label='yes' dir="ltr"></x-input>

           

            <x-select name="module_id" label='yes' wire:model="module_id" :options="$this->moduleNames->pluck('name', 'id')" />

            <x-textarea type="text" name="description" label="yes" cols="20" rows="2" divWidth=6
                wire:model="description"></x-textarea>


        </div>

        <div class="text-center my-5">
            <p> {{ __('customTrans.add new module') }} <span><a href="{{ route('ability.module.create') }}"
                        target="_blank">{{ __('customTrans.here') }} </a> </span></p>
        </div>
    
        <div class="modal-footer"  >
            
            <x-button default_class="btn ripple btn-secondary "    label="close" data-dismiss="modal">
            </x-button>

            <x-button default_class="btn ripple btn-primary "   style="width: 100px;"
                wire:click.prevent='storeAbility'>{{ __('customTrans.save') }}</x-button>

        </div>  

 
    </form>



    {{-- @livewire('ability.ability-index',['lazy'=>'true']) --}}

</div>
