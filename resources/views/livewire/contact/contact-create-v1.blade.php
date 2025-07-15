<div>

    <x-slot:crumb>

        <x-breadcrumb></x-breadcrumb>

    </x-slot:crumb>
    @push('css')
        <style>
            input {
                margin-top: 1rem;
            }

            input::file-selector-button {
                font-weight: bold;
                color: dodgerblue;
                padding: 0.5em;
                border: thin solid grey;
                border-radius: 3px;
            }

            .main-img-user1 {
                position: absolute;
                bottom: 0;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 32px;
                height: 32px;
                background-color: #737f9e;
                color: #fff;
                font-size: 18px;
                line-height: .9;
                box-shadow: 0 0 0 2px #fff;
                border-radius: 100%;
                cursor: pointer;
            }
        </style>
    @endpush


    <form wire:submit='store'>


        <section>

            <div class="row mt-15 justify-content-start align-items-center pr-4">
           

                <x-input wire:model='identity_number' name="identity_number" divWidth="2"
                    class="custom-border-bottom-dotted person"
                    placeholder="{{ __('customTrans.identity_number') }}"></x-input>


                <x-input wire:model='fname' name="fname" divWidth="2" class="custom-border-bottom-dotted person  px-9"
                    placeholder="{{ __('customTrans.fname') }}"></x-input>

                <x-input wire:model='sname' name="sname" divWidth="2" class="custom-border-bottom-dotted person  px-9"
                    placeholder="{{ __('customTrans.sname') }}"></x-input>


                <x-input wire:model='tname' name="tname" divWidth="2" class="custom-border-bottom-dotted person  px-9"
                    placeholder="{{ __('customTrans.tname') }}"></x-input>

                <x-input wire:model='lname' name="lname" divWidth="2" class="custom-border-bottom-dotted person px-9"
                    placeholder="{{ __('customTrans.lname') }}"></x-input>

            </div>



            <div class="row justify-content-start my-15">

                <x-input wire:model='phone_primary'
                    wire:change="chkExists($event.target.value,'phone_primary')" name="phone_primary"
                    divWidth="3"  class="custom-border-bottom-dotted mt-0 pt-0 px-9"  placeholder="{{ __('customTrans.phone_primary') }}" req></x-input>



                <x-input wire:model='phone_secondary' name="phone_secondary" divWidth="3"  
                    class="custom-border-bottom-dotted mt-0 pt-0  px-9"  placeholder="{{ __('customTrans.phone_secondary') }}"></x-input>
            </div>




        </section>


        <section id="topTitle-image">

            <div class="main-content-body main-content-body-contacts card custom-card mt-10">
                <div class="main-contact-info-header row px-15 py-10 row align-items-center">
                    <div class="col-lg-2 text-center">
                        <label for="">{{ __('profile_image') }}</label>

                        <x-filepond::upload wire:model="profile_image" name="profile_image" allowFileSizeValidation
                            maxFileSize='1024KB' class="@error('profile_image') is-invalid   @enderror" />
                        @include('partials.general._show-error', [
                            'field_name' => 'profile_image',
                        ])


                    </div>

                    <div class="col-8 media-body mr-2 ">
                        <x-input wire:model='full_name' wire:change="chkExists($event.target.value,'full_name')"
                            name="full_name" divWidth="8" marginBottom="1"
                            class="text-primary custom-border-bottom-dotted mb-1 px-10 " placeholder="الاسم كامل"
                            style="font-weight:700 !important;font-size: 14px;"></x-input>


                        <div class="d-flex justify-content-between align-items-center">

                            <x-input wire:model='short_description' name="short_description" divWidth="8"
                                class="custom-border-bottom-dotted px-10" placeholder="وصف مختصر"></x-input>

                        </div>

                    </div>
                </div>


            </div>

        </section>

        <hr>


        <div class="d-flex justify-content-start" dir="ltr">

            <x-button wire:loading.attr='disabled' class="mx-4 mt-4"
                style="width: 100px; height: 38px; font-size:13px;"></x-button>
            <x-button type="reset" label="clear" class="bg-secondary mt-4" wire:loading.attr='disabled'
                style="width: 80px; height: 38px; font-size:13px;"></x-button>
        </div>
        @include('layouts._show_errors_all');
    </form>






    @push('js')


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
    @endpush


    <div wire:loading>
        <img src="{{ asset('template-assets/valex/img/loader.svg') }}" alt="Loader">
    </div>



</div>
