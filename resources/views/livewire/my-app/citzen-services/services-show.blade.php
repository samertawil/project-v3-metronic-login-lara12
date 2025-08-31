<div wire:cloak>

    <x-slot:crumb>
        <x-breadcrumb>

            <li class="breadcrumb-item"><a href="{{ route('app.citzen.services.index') }}"
                    class="text-muted">{{ __('customTrans.services index') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('app.citzen.services.create') }}"
                    class="text-muted">{{ __('customTrans.services resource') }} </a></li>

        </x-breadcrumb>

    </x-slot:crumb>


    <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
        <div class="col-md-10">
            <div class="d-flex align-items-center  justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                <h1 class="display-4 font-weight-boldest text-primary">{{ $this->services->name }}</h1>
                <div class="d-flex flex-column align-items-md-start px-0">
                    <!--begin::Logo-->
                    <a href="#" class="mb-5">
                        <img src="assets/media/logos/logo-dark.png" alt="">
                    </a>
                    <!--end::Logo-->
                    <span class=" d-flex flex-column align-items-md-start opacity-70">

                        <p @class([
                            'opacity-100 h5',
                            'text-danger' => $this->services->active == 0,
                            'text-success' => $this->services->active == 1,
                        ])>


                            {{ $this->services->active == 1 ? __('customTrans.active') : __('customTrans.not active') }}
                        </p>


                        <span> {{ $this->services->description }}</span>

                    </span>
                </div>
            </div>
            <div class="border-bottom w-100"></div>
            <div class="row  pt-6">
                <div class="col-4 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">{{ __('customTrans.service num') }}</span>
                    <span class="opacity-70">{{ $this->services->num }}</span>
                </div>
                <div class="col-4 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">{{ __('customTrans.order') }}</span>
                    <span class="opacity-70">{{ $this->services->home_page_order }}</span>
                </div>
                <div class="col-4 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">{{ __('customTrans.url_active_from_date') }}</span>
                    <span
                        class="opacity-70">{{ $this->services->url_active_from_date ?? '-' }}<br>{{ $this->services->url_active_to_date ?? '-' }}</span>
                </div>
            </div>

            <div class="row pt-10">

                <div class="col-6 col-lg-4  d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2"> رابط مباشر للوصول للخدمة</span>
                    <span class="opacity-70">{{ $this->services->url ?? '-' }}
                </div>



                <div class="col-6 col-lg-4 d-flex flex-column flex-root">

                    <span class="font-weight-bolder mb-2"> {{ __('customTrans.route_name') }}</span>
                    <span class="opacity-70">{{ $this->services->route_name ?? '-' }}
                </div>
            </div>


            <div class="row pt-10">

                <div class="col-6 col-lg-4  d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">تذيل</span>
                    @php
                        $data = explode(' ', $this->services->teal);
                    @endphp
                    <div class="d-flex align-items-center">
                        @forelse ($data as $keys)
                            <span
                                class="label label-light-primary font-weight-bold label-inline mr-1">{{ $keys }}</span>

                        @empty
                            <span class="opacity-70">-</span>
                        @endforelse
                    </div>
                </div>


                <div class="col-6 col-lg-4  d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2"> {{ __('customTrans.services Responsible') }} </span>
                    <span class="opacity-70">{{ $this->services->responsible ?? '-' }}
                </div>
            </div>


            <div class="row pt-10">
                <div class="border-bottom w-100 "></div>

                <div class="w-100 text-center pt-10 font-weight-bolder text-info">
                    <p>شروط وملاحظات</p>
                </div>

                <div class="col-12 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2 pt-10">* {{ __('customTrans.conditions') }} </span>
                    <span class="opacity-70">{!! $this->services->conditions ?? '-' !!}
                </div>
            </div>


            <div class="row pt-10">

                <div class="col-12 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">* {{ __('customTrans.note') }} </span>
                    <span class="opacity-70">{!! $this->services->note ?? '-' !!}
                </div>
            </div>


            <div class="row pt-10">

                <div class="col-12 d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">* ملاحظات عند ايقاف الخدمة </span>
                    <span class="opacity-70">{!! $this->services->deactive_note ?? '-' !!}
                </div>
            </div>

            @if ($this->services->card_header || $this->services->services_images)
                
                <div class="w-100 text-center pt-10 font-weight-bolder text-info">
                <p>الصور والبطاقات</p>

            </div>

          
            <div class="row pt-10">
               
                <div class="col-12 d-flex flex-column flex-root">

                    @if ($this->services->card_header)

                    <span class="font-weight-bolder mb-2">* {{ __('customTrans.card_header') }} </span>
                  
                        <div class="row">

                            <div class="col-6 col-lg-4 my-5">
                                <img src="{{ asset('storage/' . $this->services->card_header) }}"
                                    style="height: 100px; width:100px;">
                            </div>

                        </div>
                    @endif
                </div>
            </div>


            <div class="row pt-10">
               
                <div class="col-12 d-flex flex-column flex-root">

                    @if ($this->services->services_images)

                    <span class="font-weight-bolder mb-2">* {{ __('customTrans.services_images') }} </span>

                        <div class="row">
                            @foreach ($this->services->services_images as $image)
                                <div class="col-6 col-lg-4 my-5">
                                    <img src="{{ asset('storage/' . $image) }}" style="height: 100px; width:100px;">
                                </div>
                            @endforeach
                        </div>

                    @endif
                </div>
            </div>

            @endif


        </div>
    </div>
 


</div>
