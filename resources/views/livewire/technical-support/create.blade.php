 <div class="d-flex mt-4">
     <div class="container m-auto ">
         <div class="row justify-content-center">
             <div class="col-md-5">
                 <div class="card">

                     <div class="card-header">{{ __('customTrans.get-help') }}</div>




                     <div class="m-3">
                         <form wire:submit='create'>


                             <x-input  name="name" wire:model='name' label :labelname="__('customTrans.providerName')" req
                                 divWidth="12"></x-uilogin-input>

                             <x-input name="user_name" wire:model='user_name' label :labelname="__('customTrans.accountName')"
                                 divWidth="12"></x-uilogin-input>



                             @php
                                 $techsipport = 'techsupport_' . app()->getLocale();
                             @endphp

                             <x-input name="mobile" wire:model='mobile' label divWidth="12"
                                 :description_field="__('customTrans.mobileDetails')"></x-uilogin-input>

                             <x-select wire:model='subject_id' id='subject_id' name="subject_id"
                                 :options="config($techsipport)['list']" label :labelname="__('customTrans.help-type')" divWidth="12" req></x-uilogin-select>

                             <x-textarea wire:model='issue_description' name="issue_description" label req
                                 rows="4" cols="30" divWidth="12"></x-uilogin-textarea>

                     </div>

                     <div class="g-recaptcha" data-sitekey="{!! env('RECAPTCHA_SITE_KEY', 'NO-KEY-FOUND') !!}"></div>

                     <div class="container my-1">
                         <img src="{{ captcha_src('technicalSupport') }}" alt="captcha">

                         <input type="text" wire:model='captcha' name="captcha"
                             class="form-control  my-3 @error('captcha') is-invalid @enderror"
                             placeholder="{{ __('customTrans.captcha') }}">
                         @error('captcha')
                             <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                     </div>


                 </div>

                 <div class="row my-3 ">


                     <x-button :name="__('customTrans.send')" class="bg-primary text-white"
                         divlclass="d-grid gap-2"></x-uilogin-button>

                     <x-cancel-back :route="route('login')" wire:navigate label="cancel_back"></x-uilogin-cancel-back>
                 </div>

                 </form>
             </div>
         </div>
     </div>

 </div>
 </div>


 <script src="{{ asset('uilogin-assets/js/jquery.min.js') }}"></script>
 <script>
     $('#subject_id').on('change', function() {

         $data = $("#subject_id option:selected").text();

     })
 </script>
 </div>
