 <div class="d-flex flex-column flex-root">
     <div class="d-flex flex-row-fluid">
         <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
             style="background-image: url('{{ asset('template-assets/metronic7/media/bg/bg-3.jpg') }}');">
             <div class="login-form text-center p-7 position-relative overflow-hidden">

                 <div>
                     <form wire:submit='' class="login-forgot form-group form">

                         <div class="login-forgot">
                             <div class="mb-10">
                                 <h1>{{ __('customTrans.Forgot Your Password') }}</h1>
                                 <div class="text-muted font-weight-bold">
                                     {{ __('customTrans.Enter your user name to reset your password') }}</div>
                             </div>
                         </div>
                         <div class="form-group mb-10">
                             <input wire:model.live.debounce.1000ms='user_name' name="user_name" dir="ltr"
                                 class="form-control form-control-solid h-auto py-4 px-8 text-center @error('user_name') is-invalid
                                     
                                 @enderror "
                                 type="text" placeholder="{{ __('customTrans.user_name') }}" required
                                 autocomplete="off" />
                             @include('layouts._show-error', ['field_name' => 'user_name'])
                         </div>

                         <div>

                             @if ($this->user)
                                 <div class="mb-10">
                                     <span style=" font-weight: bold;">{{ __('customTrans.mr/s') }} :
                                     </span><span
                                         style=" font-weight: bold;">{{ ' ' . $this->user['user']->name }}</span>
                                 </div>
                                
                                
                             @endif

                             <div>
                                 <x-radio label wire:model.live='typeValue' name="resetType" value1="questions" 
                                     style1="margin-right:20px;" class="text-cente" value2="email"
                                     value_title1="login questions" value_title2="email" divWidth='12'></x-radio>
                             </div>
                             
                             @if ($typeValue == 'email' && $this->user)

                                 <strong @class([
                                     'text-danger' => $this->user['emailData'] == 'noRecoveryEmail',
                                 ])>{{ __($this->user['emailData']) }}</strong>

                                 @if ($this->user['emailData'] != 'noRecoveryEmail')
                                     <div>
                                         <button wire:click='sendResetLink' wire:loading.remove id="sendBtn"
                                             class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">{{ __('customTrans.send') }}
                                         </button>
                                     </div>
                                 @endif
                             @elseif ($typeValue == 'questions' && $this->user)
                                 @if (gettype($this->user['questionsText']) != 'array')
                                     <strong @class([
                                         'text-danger' => $this->user['questionsText'] == 'noQuestions',
                                     ])>
                                         {{ __($this->user['questionsText']) }} </strong>
                                 @else
                                     @php
                                         $question = 'question_' . app()->getLocale();
                                        //  $answerModels = ['answer1', 'answer2', 'answer3'];
                                     @endphp

                                     {{-- input to answer questions --}}
                                      
                                     @foreach($this->user['questionsText'] as $index => $question)
                                     
                                    
                                     <div class="mb-4">
                                         <p class="text-primary" style="font-weight: bold;">{{ $question }}</p>
                                         <x-input wire:model="answerModels.{{$index}}" name="answerModels.{{$index}}" divlclass='col-lg-12' req></x-input>  


                                        
                                
                                     </div>
                                  @endforeach

                                     <div wire:loading>
                                         <img src="{{ asset('template-assets/valex/img/loader.svg') }}" alt="Loader">
                                     </div>


                                     <x-input wire:model='password' type="password" name="password" class='mr-4'
                                         label="yes" autocomplete="new-password" divlclass='col-lg-12' req
                                         dir="ltr"></x-input>

                                     <x-input wire:model='passwordConfirmation' name="passwordConfirmation"
                                         id="password_confirmation" type="password" label="yes" dir="ltr"
                                         autocomplete="new-password" divlclass='col-lg-12' req></x-input>

                                     <div>
                                         <button wire:click.prevent='changePassword' wire:loading.remove
                                             class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">{{ __('customTrans.Change_Password') }}
                                         </button>
                                     </div>

                                     @error('wrongAnswer')
                                       
                                         <div class="w-100 bg-danger rounded  text-white d-flex align-items-center justify-content-center"  style="height: 40px;" >
                                            <p class="mb-0">{{ __('customTrans.wrongAnswer') }}</p>
                                        </div>
                                     @enderror
                                 @endif
                             @endif



                         </div>

                         <div class="form-group d-flex flex-wrap flex-center mt-10">
                             <x-cancel-back class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2"
                                 :route="route('login')" wire:navigate label="cancel_back" wire:loading.remove
                                 wire:target="sendResetLink"></x-cancel-back>

                         </div>

                     </form>
                 </div>


             </div>
         </div>
     </div>



 </div>




 @push('js')
     {{-- <script>
         function test2() {
 
            $('input[name="resetType"]').prop('checked', false);
            $('#btn1').text('Button was clicked!');
         }
     </script>

     </script>
     <script>
         function test1() {

             $("input[name='resetType']").change(function() {

                 if ($(this).val() === "email") {
                     $("#sendBtn").show();
                     $("#emailP").show();
                     $("#questionsAnswersDataP").hide();
                 } else {
                     $("#sendBtn").hide();
                     $("#emailP").hide();
                     $("#questionsAnswersDataP").show();
                 }
             });
         }
     </script> --}}
 @endpush


 </div>
