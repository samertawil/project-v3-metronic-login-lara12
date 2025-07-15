     <div class="d-flex mt-4">

         <div class="container m-auto">
             <div class="row justify-content-center">
                 <div class="col-md-10">
                     <div class="card card-none-shadow">

                         @if (!Auth::check())
                             <div class="card-header"><span class="h5">{{__('customTrans.create new account')}}</span></div>
                         @endif

                         <div class="card-body">

                             <form wire:submit='register'>

                                 <x-input wire:model='user_name' name="user_name" label="yes" dir="ltr" req
                                     divlclass='col-lg-12'></x-input>

                                 <x-input wire:model='name' name="name" label="yes" req
                                     divlclass='col-lg-12'></x-input>


                                 <x-input wire:model='mobile' name="mobile" label="yes" divlclass='col-lg-12'
                                     dir="ltr"></x-input>


                                 {{-- <x-select-parts-date></x-select-parts-date> --}}


                                 <x-input wire:model='password' type="password" name="password" label="yes" req
                                     autocomplete="new-password" divlclass='col-lg-12'></x-input>
 
                                 <x-input wire:model='passwordConfirmation' name="passwordConfirmation" req
                                     id="password_confirmation" type="password" label="yes"
                                     autocomplete="new-password" divlclass='col-lg-12'></x-input>

                                
                                   
                                        <x-button label="register_new_account" class="bg-primary text-white mx-3"
                                        divlclass="d-grid gap-2" wire:click='register'></x-button>
                                     

                                 @if (!Auth::check())
                                 {{-- :route="route('login')" --}}
                                 {{-- <x-cancel-back  wire:navigate class=" mx-3"></x-cancel-back> --}}
                                 @endif
                                 
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
