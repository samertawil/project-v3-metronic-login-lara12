@props([
    'type' => '',
    'name' => 'حفظ',
    'divlclass'=>'',
    'iclass'=>'',
    '$iclassName'=>''
])

<div>

 

<div class="d-flex justify-content-start"   dir="ltr">
    
    <x-button type="submit"   wire:loading.attr='disabled'></x-button>
    <x-button type="reset" name="مسح" class="bg-secondary"  wire:loading.attr='disabled'></x-button>
  
   
</div>

<div wire:loading   >
    <img src="{{ asset('template-assets/valex/img/loader.svg') }}"  
        alt="Loader">
</div>
 
</div>
 


