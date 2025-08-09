<div class="d-flex flex-column flex-root">

    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
            style="background-image: url('{{ asset('template-assets/metronic7/media/bg/bg-3.jpg') }}');">

            <div class="login-form text-center p-7 position-relative overflow-hidden">

                <div class="d-flex flex-center mb-10">
                    <a>

                        <img src="{{ asset('Users_icon.png') }}" class="max-h-150px" alt="" />
                    </a>
                </div>


                <div>
                    @if ($status)
                        <div class="alert alert-success">{{ $status }}</div>
                    @endif
                    @if ($error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endif

                    <form wire:submit.prevent="resetPassword">
                        <input type="hidden" wire:model="token">
                        <div class="mb-3 ">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" id="email" wire:model="email" class="form-control text-center">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password">كلمة المرور الجديدة</label>
                            <input type="password" id="password" wire:model="password" class="form-control">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation">تأكيد كلمة المرور</label>
                            <input type="password" id="password_confirmation" wire:model="password_confirmation"
                                class="form-control">
                        </div>

                        <div class="form-group d-flex flex-wrap flex-center mt-10">

                            <button
                                class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">{{ __('customTrans.Change_Password') }}</button>


                            <x-cancel-back class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2"
                                :route="route('login')" wire:navigate label="cancel_back" wire:loading.remove></x-cancel-back>

                        </div>
                        @include('layouts._show_errors_all')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
