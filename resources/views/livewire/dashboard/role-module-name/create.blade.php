<div>
  
    <div>


        <form wire:submit="store">
            <div class="row   border h-0 align-items-center p-2 ">

                <x-input name="name" wire:model="name" label="yes"
                    title="اسماء العناوين الرئيسية للصفحات او المديولات كمجموعات للصلاحيات "></x-input>
                <x-input name="description" wire:model="description" label="yes"></x-input>

                <x-radio type="radio" wire:model="active" name="activation" label  req value1="1"
                    value2="0"  value_title1="active"  value_title2="not active" divclass="text-center"></x-radio>

            </div>


            <x-saveClearbuttons clear></x-saveClearbuttons>
            @include('layouts._show_errors_all')


        </form>

    </div>
    <div class="separator separator-dashed mt-8 mb-5"  style="border-width: 2px;"></div>

    <livewire:Dashboard.RoleModuleName.ModuleResource></livewire:Dashboard.RoleModuleName.ModuleResource>

</div>
