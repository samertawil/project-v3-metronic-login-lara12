{{-- <div class="d-flex my-5" style="background-image: url('{{ asset('template-assets/metronic7/media/bg/bg-3.jpg') }}');">
    <div class="container m-auto ">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="">

                 
                <div class="mb-10">
                    <h1>{{ __('customTrans.get-help') }}</h1>
                    <div class="text-muted font-weight-bold">
                        في حال عدم تمكنك من الدخول الي الحساب او انشاء حساب جديد يرجى مراسلتنا هنا</div>
                </div>




                    <div class="m-3">
                        <form wire:submit='create'>


                            <x-input name="name" wire:model='name' label :labelname="__('customTrans.providerName')" req
                                divWidth="12"></x-input>

                            <x-input name="user_name" wire:model='user_name' label :labelname="__('customTrans.accountName')"
                                divWidth="12"></x-input>



                            @php
                                $techsipport = 'techsupport_' . app()->getLocale();
                            @endphp

                            <x-input name="mobile" wire:model='mobile' label divWidth="12"
                                :description_field="__('customTrans.mobileDetails')"></x-input>

                            <x-select wire:model='subject_id' id='subject_id' name="subject_id" :options="$this->statuses->pluck('status_name','id')" label
                                :labelname="__('customTrans.help-type')" divWidth="12" req></x--select>

                                <x-textarea wire:model='issue_description' name="issue_description" label req
                                    rows="4" cols="30" divWidth="12"></x-textarea>

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

                <div class="row my-3 m-auto">


                    <x-button label="send" class="bg-success text-white py-2 w-75  m-auto"
                        divlclass="d-grid gap-2"></x-uilogin-button>

                        <x-cancel-back :route="route('login')" label="cancel_back" class="mb-5"></x-cancel-back>

                        @include('layouts._show_errors_all')
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.addEventListener('alert', (event) => {
        let data = event.detail;

        Swal.fire({
            title: data.title,
            text: data.text,
            icon: data.type,
            confirmButtonText: data.confirmButtonText
        })
    });
</script>




  --}}


  <div class="d-flex flex-column flex-root ">

    <div class="login login-signin-on d-flex flex-row-fluid " id="kt_login">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat "
            style="background-image: url('{{ asset('template-assets/metronic7/media/bg/bg-3.jpg') }}');">

            <div class=" login-form  p-7 position-relative overflow-hidden ">



                <div class="mb-10">
                    <h1>{{ __('customTrans.get-help') }}</h1>
                    <div class="text-muted font-weight-bold">
                        في حال عدم تمكنك من الدخول الي الحساب او انشاء حساب جديد يرجى مراسلتنا هنا</div>
                </div>
                <form wire:submit='create'>

                    <div class="row col-12 justify-content-center">


                        <x-input name="user_name" wire:model='user_name' label :labelname="__('customTrans.user_name')" divlclass="col-5"
                            divWidth="5" req></x-input>

                        <x-input name="name" wire:model='name' label :labelname="__('customTrans.providerName')" divlclass="col-7 "
                            divWidth="7" req></x-input>

                    </div>

                   



                    <div class="row col-12 justify-content-center">
                        

                        <x-input name="mobile" wire:model='mobile' label divWidth="5" divlclass="col-5"
                            :description_field="__('customTrans.mobileDetails')" req></x--input>

                            <x-select wire:model='subject_id' id='subject_id' name="subject_id" :options="$this->statuses->pluck('status_name','id')" label
                                :labelname="__('customTrans.help-type')" divWidth="7" divlclass="col-7" req></x-select>


                            <x-textarea wire:model='issue_description' name="issue_description" label req rows="4"
                                cols="30" divWidth="12"></x-textarea>
                    </div>



                    <div class="row col-12 justify-content-center">
                        <div class="g-recaptcha" data-sitekey="{!! env('RECAPTCHA_SITE_KEY', 'NO-KEY-FOUND') !!}"></div>

                        <div class="container my-1">
                            <img src="{{ captcha_src('technicalSupport') }}" alt="captcha">

                            <input type="text" wire:model='captcha' name="captcha"
                                class="form-control px-8 my-3 @error('captcha') is-invalid @enderror"
                                placeholder="{{ __('customTrans.captcha') }}">
                            @error('captcha')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="w-100 m-auto ">
                            <button
                                class="btn btn-primary font-weight-bold  my-5 w-100">{{ __('customTrans.send') }}</button>

                            <div class="form-group d-flex flex-wrap flex-center mt-10">
                                <x-cancel-back class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2"
                                    :route="route('login')"   label="cancel_back"
                                    wire:loading.remove></x-cancel-back>

                            </div>

                            @include('layouts._show_errors_all')
                        </div>


                    </div>



                </form>
            </div>
        </div>
    </div>
    <script>
        $('#subject_id').on('change', function() {

            $data = $("#subject_id option:selected").text();

        })
    </script>

<script>
    window.addEventListener('alert', (event) => {
        let data = event.detail;

        Swal.fire({
            title: data.title,
            text: data.text,
            icon: data.type,
            confirmButtonText: data.confirmButtonText
        })
    });
</script>


</div>

