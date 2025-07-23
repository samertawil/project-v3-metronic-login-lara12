<div>

    <x-slot:crumb>
        <x-breadcrumb></x-breadcrumb>
    </x-slot:crumb>

    
    <form wire:submit='store'>
        <div class="row">
            <x-input name="key" wire:model='key' label></x-input>
            <x-input name="value" wire:model='value' label ></x-input>
            <x-input name="description" wire:model='description' label ></x-input>
            <x-textarea name="notes" wire:model='notes' label divWidth="6" rows="3"></x-textarea>
        </div>

        <x-button></x-button>
    </form>
</div>
