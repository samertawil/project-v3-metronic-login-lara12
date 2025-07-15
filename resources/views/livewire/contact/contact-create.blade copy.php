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

        <section id="topTitle-image">


            <div class="main-content-body main-content-body-contacts card custom-card mt-10">
                <div class="main-contact-info-header px-15 py-10">
                    <div class="media">
                        {{-- <div class="main-img-user ">

                                @if ($contactImage)
                                    <img src="{{ $contactImage->temporaryUrl() }}"
                                        class="form-control @error('contactImage')
                                        is-invalid
                                        @enderror">
                                    @include('layouts._show-error', [
                                        'field_name' => 'contactImage',
                                    ])
                                @else
                                    <img alt="avatar" src="{{ $image1 }}"
                                        class="form-control  @error('contactImage')
                                        is-invalid
                                        @enderror"
                                        style="background-color: #e1e5ef">
                                @endif

                                <label for="imageUpload" class="main-img-user1">

                                    <i class="fe fe-camera"></i></label>
                                <input wire:model='contactImage' name="contactImage" type="file" id="imageUpload"
                                    accept="image/*" style="display: none">


                            </div> --}}

                        <div class="form-group row  mr-4">
                            <div class="col-lg-9 col-xl-9">

                                @if ($contactImage)
                                    <div class="image-input image-input-outline" id="kt_contact_add_avatar">
                                        <div class="image-input-wrapper"
                                            style="background-image: url({{ $contactImage->temporaryUrl() }})"></div>
                                    @else
                                        <div class="image-input image-input-outline" id="kt_contact_add_avatar">
                                            <div class="image-input-wrapper"
                                                style="background-image: url({{ asset('template-assets/metronic7/media/users/100_2.jpg') }})">
                                            </div>
                                @endif


                                <label
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" wire:model='contactImage' name="contactImage" class="form-control  @error('contactImage')
                                    is-invalid
                                    @enderror"accept=".png, .jpg, .jpeg">
                                    @include('layouts._show-error', [
                                        'field_name' => 'contactImage',
                                    ])  
                                   
                                        
                                    <input type="hidden" name="profile_avatar_remove">
                                </label>

                                {{-- <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span> --}}
                            </div>
                        </div>
                    </div>


                    <div wire:loading>
                        <img src="{{ asset('template-assets/valex/img/loader.svg') }}" alt="Loader">
                    </div>


                    <div class="media-body mr-2 ">
                        <x-input wire:model='full_name' wire:change="chkExists($event.target.value,'full_name')"
                            name="full_name" divWidth="8" marginBottom="1"
                            class="text-primary custom-border-bottom-dotted mb-1 px-10 " placeholder="الاسم كامل"
                            style="font-weight:700 !important;font-size: 14px;"></x-input>


                        <div class="d-flex justify-content-between align-items-center">


                            <x-input wire:model='short_description' name="short_description" divWidth="8"
                                class="custom-border-bottom-dotted" placeholder="وصف مختصر"></x-input>


                            <nav class="contact-info text-left">

                                <x-actions class="contact-icon border tx-inverse" edit></x-actions>
                                <x-actions del></x-actions>
                            </nav>
                        </div>

                    </div>
                </div>


            </div>

        </section>

        <section>


            <div class="row mt-15 justify-content-start align-items-center pr-4">

                <x-select class="custom-border-bottom-dotted " wire:model='contact_type' id="contactType"
                    onchange="check1()" name="contact_type" :options="$statuses
                        ->where('p_id_sub', config('myConstants.contact_type'))
                        ->pluck('status_name', 'id')" ChoseTitle="contact_type" marginBottom="0"
                    divWidth="3"></x-select>


                <x-input wire:model='identity_number' name="identity_number" divWidth="3"
                    class="custom-border-bottom-dotted person"
                    placeholder="{{ __('customTrans.identity_number') }}"></x-input>


                <x-input wire:model='fname' name="fname" divWidth="2" class="custom-border-bottom-dotted person"
                    placeholder="{{ __('customTrans.fname') }}"></x-input>

                <x-input wire:model='sname' name="sname" divWidth="2" class="custom-border-bottom-dotted person"
                    placeholder="{{ __('customTrans.sname') }}"></x-input>


                <x-input wire:model='tname' name="tname" divWidth="2" class="custom-border-bottom-dotted person"
                    placeholder="{{ __('customTrans.tname') }}"></x-input>

                <x-input wire:model='lname' name="lname" divWidth="2" class="custom-border-bottom-dotted person"
                    placeholder="{{ __('customTrans.lname') }}"></x-input>


                <x-input wire:model='nick_name' name="nick_name" divWidth="3"
                    class="custom-border-bottom-dotted person"
                    placeholder="{{ __('customTrans.nick_name') }}"></x-input>


                <x-input wire:model='responsible' name="responsible" divWidth="3"
                    class="custom-border-bottom-dotted com" placeholder="{{ __('customTrans.responsible') }}"></x-input>


            </div>

           

                <div class="row justify-content-start my-15">

                    <x-input wire:model='phone_primary'
                        wire:change="chkExists($event.target.value,'phone_primary')"
                        name="phone_primary" divWidth="3" label class="custom-border-bottom-dotted mt-0 pt-0"
                        labelclass="pb-0" req></x-input>



                    <x-input wire:model='phone_secondary' name="phone_secondary" divWidth="3" label
                        class="custom-border-bottom-dotted mt-0 pt-0" labelclass="pb-0"></x-input>





                    <x-input wire:model='work_phone_primary' name="work_phone_primary" divWidth="3" label
                        class="custom-border-bottom-dotted mt-0 pt-0" labelclass="pb-0"></x-input>



                    <x-input wire:model='work_phone_secondary' name="work_phone_secondary" divWidth="3" label
                        class="custom-border-bottom-dotted mt-0 pt-0" labelclass="pb-0"></x-input>
                </div>


              

        </section>


        <section id="attributes">
            <div class="pr-3" name="properties" id="properties">

                @foreach ($attributeValue as $index => $question)
                    <div class=" row align-items-center">

                        <Select @class(['form-control  w-25']) wire:model='attributeColumn.{{ $index }}'>
                            <option value="">اختار اعمدة</option>

                            @foreach ($all_templates ?? [] as $template1)
                                <option value="{{ $template1->status_name }}">
                                    {{ $template1->status_name }}
                                </option>
                            @endforeach
                        </Select>


                        <x-input wire:model="attributeValue.{{ $index }}"
                            name="attributeValue{{ $index }}" divWidth="4"></x-input>

                        <x-actions mins wire:click.prevent='removeQuestion({{ $index }})'></x-actions>

                    </div>
                @endforeach

            </div>

            <div class="d-flex align-items-center">

                <x-actions plus wire:click.prevent='addQuestion'></x-actions>

                <small class="col-12 text-primary px-0">يمكنك الضغط على زر "+" لاضافة خانات جديدة</small>

            </div>
            <p class="m-5"> {{ __('customTrans.add content type') }} <span><a href="{{ route('status') }}"
                        target="_blank">{{ __('customTrans.here') }} </a> </span></p>

        </section>


        <hr>

        <section id="address">
            <div class="media">
                <div class="media-body">
                    <div>


                        <x-button type='button' class="btn-light-info" data-target="#CreateAddressModal"
                            data-toggle="modal"    label="add address"></x-button>



                        <x-modal idName="CreateAddressModal" width="xl" title='اضافة عنوان'>

                            <livewire:AddressesModule.AddressForm :statuses="$statuses" lazy>
                            </livewire:AddressesModule.AddressForm>

                        </x-modal>


                    </div>
                </div>
            </div>
        </section>


        <div>

            <x-textarea wire:model='description' name="description" label labelname="وصف" divWidth="12"
                rows="2" divclass="text-muted"></x-textarea>
            <x-textarea wire:model='note' name="note" label divWidth="12" rows="2"
                divclass="text-muted"></x-textarea>
        </div>

        <x-saveClearbuttons></x-saveClearbuttons>
    </form>






    @push('js')
        <script>
            $('[name="responsible"]').hide();
        </script>
        <script>
            function check1() {
                // $('#contactType').on('change', function() {
                // $contactType = $('#contactType').val();

                if ($('#contactType').val() == 17) {

                    $('.person').css('display', 'block');
                    $('.com').css('display', 'none');

                    // $('[name="fname"]').css('display', 'block');
                    // $('[name="sname"]').css('display', 'block');
                    // $('[name="tname"]').css('display', 'block');
                    // $('[name="lname"]').css('display', 'block');
                    // $('[name="nick_name"]').css('display', 'block');
                    // $('[name="responsible"]').css('display', 'none');

                    // $('[name="fname"]').show();
                    // $('[name="sname"]').show();
                    // $('[name="tname"]').show();
                    // $('[name="lname"]').show();
                    // $('[name="nick_name"]').show();
                    // $('[name="responsible"]').hide();
                } else {
                    $('.person').css('display', 'none');
                    $('.com').css('display', 'block');

                    // $('[name="fname"]').css('display', 'none');
                    // $('[name="sname"]').css('display', 'none');
                    // $('[name="tname"]').css('display', 'none');
                    // $('[name="lname"]').css('display', 'none');
                    // $('[name="nick_name"]').css('display', 'none');
                    // $('[name="responsible"]').css('display', 'block');



                    // $('[name="fname"]').hide();
                    // $('[name="sname"]').hide();
                    // $('[name="tname"]').hide();
                    // $('[name="lname"]').hide();
                    // $('[name="nick_name"]').hide();
                    // $('[name="responsible"]').show();

                }

                // }) 
            }
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
    @endpush




</div>
