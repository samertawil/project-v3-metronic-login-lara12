<div wire:cloak>

    <x-slot:crumb>
        <x-breadcrumb>

            <li class="breadcrumb-item"><a href="{{ route('app.citzen.services.index') }}"
                    class="text-muted">{{ __('customTrans.services index') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('app.citzen.services.create') }}"
                    class="text-muted">{{ __('customTrans.services resource') }} </a></li>

        </x-breadcrumb>

    </x-slot:crumb>


    <div class="row align-items-center">


        <x-input type='number' min='1' wire:model='num' name='num' label :labelname="__('customTrans.service num')" divWidth='6'
            placeholder="{{ $this->maxNum }}" req description_field="لا يمكن تكرار رقم الخدمة"></x-input>

        <x-input wire:model='name' name='name' label :labelname="__('customTrans.service name')" divWidth='6' req
            description_field="مثال: خدمة تسجيل المواطنين"></x-input>

        <x-input wire:model='url' name='url' label divWidth='6'
            description_field="رابط مباشر للوصول للخدمة مثال : https:://www.***/register.net"></x-input>

        <x-input wire:model='route_name' name='route_name' label divWidth='6' req
            description_field="اسم الرابط  مثال : dashboard.register"></x-input>

        <x-input wire:model='responsible' name='responsible' :labelname="__('customTrans.services Responsible')" label divWidth='6'></x-input>


        <div class="form-group row mx-2 mt-9">
            <label class="col-8 col-form-label required">
                حالة تفعيل الخدمة
            </label>

            <div class="col-4 col-form-label">
                <div class="radio-inline">
                    <label class="radio radio-outline radio-success">
                        <input type="radio" wire:model='active' name="active" value="1"
                            data-gtm-form-interact-field-id="active1">
                        <span></span>
                        فعالة
                    </label>
                    <label class="radio radio-outline radio-danger">
                        <input type="radio" wire:model='active' name="active" value="0"
                            data-gtm-form-interact-field-id="active0">
                        <span></span>
                        متوقفة
                    </label>
                </div>

                @error('active')
                    <div class="text-danger small mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>


        <x-input type='date' wire:model='url_active_from_date' name='url_active_from_date' label
            divWidth='6'></x-input>

        <x-input type='date' wire:model='url_active_to_date' name='url_active_to_date' label
            divWidth='6'></x-input>


        <x-textarea wire:model='description' name='description' label divWidth='6' rows='4'></x-textarea>

        <x-textarea wire:model='note' name='note' label :labelname="__('customTrans.note')" divWidth='6' rows='4'></x-textarea>



    </div>




    <div class="row align-items-center">

        <div class="col-6">
            <div wire:ignore>
                <label class="mt-5">شروط الخدمة</label>
                <textarea wire:model='conditions' name="conditions" class="summernote" divWidth="12">{!! $this->conditions !!}</textarea>
            </div>
        </div>


        <div class="col-5">
            <x-textarea wire:model='deactive_note' name='deactive_note' label labelname="ملاحظات عند ايقاف الخدمة"
                divWidth='12' rows='4' span description_field1="مثال: سيتم تفعيل الخدمة قريبا"></x-textarea>


            <x-input type="number" min="0" wire:model='home_page_order' name='home_page_order' label
                divWidth='12' placeholder="{{ $this->maxPageOrder }}"></x-input>

            <x-input wire:model='teal' name='teal' label divWidth='12' span
                description_field1="مثال: جديد  نشط"></x-input>

        </div>



    </div>

    <label class="mt-9">{{ __('customTrans.services_images') }}</label>

    <x-filepond::upload wire:model="services_images" name="services_images[]" multiple required='false'
        allowFileSizeValidation maxFileSize='1024KB' class="  @error('services_images') is-invalid   @enderror" />
    @include('partials.general._show-error', ['field_name' => 'services_images'])


    <div class="row pt-10">

        <div class="col-12 d-flex flex-column flex-root">

            @if ($this->services_images_path && $type == 'update')

                <span class="font-weight-bolder mb-2">* {{ __('customTrans.services_images') }} </span>

                <div class="d-flex align-items-center">
                    @foreach ($this->services_images_path as $key => $image)
                        <div class=" my-5">
                            <img src="{{ asset('storage/' . $image) }}" style="height: 100px; width:100px;">
                        </div>
                        <x-actions del wire:click.prevent='deleteServicesImages({{ $key }})'></x-actions>
                    @endforeach
                </div>

            @endif
        </div>
    </div>


    <label>{{ __('customTrans.card_header') }}</label>

    <x-filepond::upload wire:model="card_header" name="card_header" required='false' allowFileSizeValidation
        maxFileSize='1024KB' class="@error('card_header') is-invalid   @enderror" />
    @include('partials.general._show-error', ['field_name' => 'card_header'])



    <div class="row pt-10">

        <div class="col-12 d-flex flex-column flex-root">

            @if ($this->card_header_path)
                <div class="d-flex align-items-center">
                    <div class="my-5">
                        <img src="{{ asset('storage/' . $this->card_header_path) }}"
                            style="height: 100px; width:100px;">
                    </div>
                    <x-actions del wire:click.prevent='deleteCardHeader'></x-actions>

                </div>
            @endif
        </div>
    </div>


    <div class="d-flex justify-content-end">

        <x-button default_class="btn ripple btn-light-primary" style="width: 100px;" wire:loading.remove
            wire:click.prevent='{{ $type }}' label="{{ $type }}"></x-button>

        <div wire:loading wire:target='{{ $type }}'>
            <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
            <span class="sr-only">Loading...</span>
        </div>
    </div>






    @include('layouts._show_errors_all')






    @push('js')
        <script>
            $('.summernote').summernote({
                placeholder: 'ضع شروط الخدمة مع وجود امكانية التنسيق',
                tabsize: 2,
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('conditions', contents);
                    }
                }
            });
        </script>
    @endpush

</div>
