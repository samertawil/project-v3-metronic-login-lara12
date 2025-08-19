<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row-fluid">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
            style="background-image: url('{{ asset('template-assets/metronic7/media/bg/bg-3.jpg') }}');">
            <div class="login-form text-center p-7 position-relative overflow-hidden">
                <div>


                    <form wire:submit='resetPassword' class="login-forgot form-group form">

                        <div class="login-forgot">
                            <div class="mb-10">
                                <h1>{{ __('customTrans.Change_Password') }}</h1>
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
                        
                       
                        

                        <div class="form-group mb-10" style="position: relative;">
                            <input wire:model='currentPassword' name="currentPassword" dir="ltr"
                                id="currentPassword"
                                class="form-control form-control-solid h-auto py-4 px-8 text-center @error('currentPassword') is-invalid @enderror"
                                type="password" placeholder="{{ __('customTrans.currentPassword') }}" required autocomplete="new-password" />
                            <span toggle="#currentPassword" class="fa fa-fw fa-eye field-icon toggle-password @error('currentPassword')  pb-6 px-4 @enderror"
                                style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;"></span>
                            @include('layouts._show-error', ['field_name' => 'currentPassword'])
                        </div>
                        
                        <div class="form-group mb-10" style="position: relative;">
                            <input wire:model='password' name="password" dir="ltr"
                                id="password"
                                class="form-control form-control-solid h-auto py-4 px-8 text-center @error('password') is-invalid @enderror"
                                type="password" placeholder="{{ __('customTrans.password') }}" required autocomplete="new-password" />
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password @error('password')  pb-6 px-4 @enderror"
                                style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;"></span>
                            @include('layouts._show-error', ['field_name' => 'password'])
                        </div>


                        <div class="form-group mb-10" style="position: relative;">
                            <input wire:model='passwordConfirmation' name="passwordConfirmation" dir="ltr"
                                id="passwordConfirmation"
                                class="form-control form-control-solid h-auto py-4 px-8 text-center @error('passwordConfirmation') is-invalid @enderror"
                                type="password" placeholder="{{ __('customTrans.passwordConfirmation') }}" required autocomplete="new-password" />
                            <span toggle="#passwordConfirmation" class="fa fa-fw fa-eye field-icon toggle-password  @error('passwordConfirmation')  pb-6 px-4 @enderror"
                                style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;"></span>
                            @include('layouts._show-error', ['field_name' => 'passwordConfirmation'])
                        </div>

                        <div class="form-group d-flex flex-wrap flex-center mt-10">
                                
                            <button   class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">{{__('customTrans.renewPassword')}}</button>
                          
                          
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
