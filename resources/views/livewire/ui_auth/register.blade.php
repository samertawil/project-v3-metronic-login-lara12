<div class="d-flex flex-column flex-root">
 
    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
            style="background-image: url('{{ asset('template-assets/metronic7/media/bg/bg-3.jpg') }}');">

            <div class="login-form   p-7 position-relative overflow-hidden">
                 <div class="">
                     <div class="h3 text-center">{{ __('customTrans.register_new_account') }}</div>

                     <div class="card-body">

                         <form wire:submit='register'>



                             <div class="form-group mb-5 ">
                                 <input req wire:model.live='user_name' name="user_name"
                                     class="form-control h-auto form-control-solid py-4 px-8 @error('user_name') is-invalid
                                         
                                     @enderror"
                                     type="text" placeholder="{{ __('customTrans.user_name') }}" />
                                 @include('layouts._show-error', ['field_name' => 'user_name'])
                             </div>

                             <div class="form-group mb-5">
                                 <input req wire:model.live='name' name="name"
                                     class="form-control h-auto form-control-solid py-4 px-8 @error('name') is-invalid
                                        
                                    @enderror"
                                     type="text" placeholder="{{ __('customTrans.fullName') }}" />
                                 @include('layouts._show-error', ['field_name' => 'name'])
                             </div>



                             <div class="form-group mb-5">
                                 <input req wire:model.live='mobile' name="mobile"
                                     class="form-control h-auto form-control-solid py-4 px-8 @error('mobile') is-invalid
                                        
                                    @enderror"
                                     type="text" placeholder="{{ __('customTrans.mobile') }}" />
                                 @include('layouts._show-error', ['field_name' => 'mobile'])
                             </div>



                             <div class="form-group mb-5">
                                 <input req wire:model.live='email' name="email"
                                     class="form-control h-auto form-control-solid py-4 px-8  @error('email') is-invalid
                                        
                                    @enderror"
                                     type="text" placeholder="{{ __('customTrans.email') }}" />
                                 @include('layouts._show-error', ['field_name' => 'email'])
                             </div>




                             @php
                                 $questions = 'question_' . app()->getLocale();
                             @endphp
                             <div class="text-center" style="margin-top: 50px; margin-bottom: 30px;">
                                 <p>{{ __('customTrans.recoveryQuestions') }}</p>
                             </div>
                             <div>
                                 @foreach ($repeater as $index => $question)
                                     <tr>
                                         <td>

                                             <x-select wire:model="recoveryQuestions.0" name="recoveryQuestions.0"
                                                 class="form-control h-auto form-control-solid py-4 px-8"
                                                 ChoseTitle="recoveryQuestions.0" :options="$this->QuestionData->pluck($questions, 'id')"
                                                 divlclass='col-lg-12 px-0' wire:change='QuestionData2' req></x-select>

                                         </td>

                                         <div class="form-group mb-5  ">
                                             <input wire:model='answers.0' name="answers.0"
                                                 class="form-control h-auto form-control-solid py-4 px-8  @error('answers.0') is-invalid
                                                    
                                                @enderror"
                                                 type="text" placeholder="{{ __('customTrans.answers.0') }}" />
                                             @include('layouts._show-error', ['field_name' => 'answers.0'])
                                         </div>


                                         <x-select wire:model="recoveryQuestions.1" :options="$this->QuestionData2->pluck($questions, 'id')"
                                             name="recoveryQuestions.1" ChoseTitle="recoveryQuestions.1"
                                             class="form-control h-auto form-control-solid py-4 px-8"
                                             divlclass='col-lg-12  px-0' wire:change='QuestionData3'></x-select>


                                         </td>

                                         <div class="form-group mb-5">
                                             <input wire:model='answers.1' name="answers.1"
                                                 class="form-control h-auto form-control-solid py-4 px-8  @error('answers.1') is-invalid
                                                    
                                                @enderror"
                                                 type="text" placeholder="{{ __('customTrans.answers.1') }}" />
                                             @include('layouts._show-error', ['field_name' => 'answers.1'])
                                         </div>



                                         <x-select wire:model="recoveryQuestions.2" :options="$this->QuestionData3->pluck($questions, 'id')"
                                             name="recoveryQuestions.2" ChoseTitle="recoveryQuestions.2"
                                             class="form-control h-auto form-control-solid py-4 px-8"
                                             divlclass='col-lg-12 px-0'></x-select>

                                         </td>

                                         <div class="form-group mb-5">
                                             <input wire:model='answers.2' name="answers.2"
                                                 class="form-control h-auto form-control-solid py-4 px-8  @error('answers.2') is-invalid
                                                    
                                                @enderror"
                                                 type="text" placeholder="{{ __('customTrans.answers.2') }}" />
                                             @include('layouts._show-error', ['field_name' => 'answers.2'])
                                         </div>


                                     </tr>
                                 @endforeach


                             </div>
                             <div   style="margin-top: 50px; margin-bottom: 30px;"></div>
                             <div class="form-group mb-5" >
                                 <input wire:model='password' type="password" name="password"
                                     class="form-control h-auto form-control-solid py-4 px-8  @error('password') is-invalid
                                      @enderror"
                                     autocomplete="new-password" placeholder="{{ __('customTrans.password') }}" />
                                 @include('layouts._show-error', ['field_name' => 'password'])
                             </div>

                             <div class="form-group mb-5 ">
                                 <input wire:model.live='passwordConfirmation' name="passwordConfirmation"
                                     id="password_confirmation" type="password"
                                     class="form-control h-auto form-control-solid py-4 px-8  @error('passwordConfirmation') is-invalid
                                      @enderror"
                                     placeholder="{{ __('customTrans.passwordConfirmation') }}" />
                                 @include('layouts._show-error', ['field_name' => 'password'])
                             </div>

                             <div class="form-group d-flex flex-wrap flex-center mt-10">
                                
                                <button   class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">{{__('customTrans.register_new_account')}}</button>
                              
                              
                                <x-cancel-back class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2"
                                :route="route('login')" wire:navigate label="cancel_back" wire:loading.remove ></x-cancel-back>
                               
                            </div>
                            @include('layouts._show_errors_all')
                       
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
