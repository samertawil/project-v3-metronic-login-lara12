<div>

    @push('css')
        <style>
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        </style>
    @endpush

    <div class="row   justify-content-between  ">
        @foreach ($this->services as $service)
            <div class="col-lg-6 col-xxl-4 order-1 order-xxl-1 mt-3 ">

                <div class="card-body pt-8">
                    @include('partials.general._alert-session')

                    <div class="d-flex  mb-3 align-items-center">

                        <div class="symbol symbol-40 symbol-light-primary mr-5 ">
                            <span class="symbol-label align-items-center">
                                <span class="svg-icon svg-icon-xl svg-icon-primary ">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg
                                        xmlns="#" xmlns:xlink="#" width="24px" height="24px" viewBox="0 0 24 24"
                                        version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                fill="#000000"></path>
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                x="16.3255682" y="2.94551858" width="3" height="18"
                                                rx="1">
                                            </rect>
                                        </g>
                                    </svg><!--end::Svg Icon--></span> </span>
                        </div>



                        <a href="{{ $service->url }}" class="text-dark text-hover-primary mb-1 font-size-lg"
                            style=" font-weight: bold">{{ $service->name }}</a> <span
                            class="text-muted mx-2">{{ $service->active == 1 ? __('customTrans.active') : __('customTrans.not active') }}</span>
                    </div>
                    <div class="d-flex flex-column font-weight-bold  " style="line-height: 22px;">
                        @if ($service->conditions)
                            <span class="text-danger mb-4" style="text-decoration: underline; font-weight: bold">شروط
                                وملاحظات
                                :</span>
                            @php
                                $x = explode('//', $service->conditions);
                            @endphp
                            @foreach ($x as $y)
                                <ol>
                                    <li>{{ $y }}</li>
                                </ol>
                            @endforeach
                        @endif
                        <div class="d-flex justify-content-center">
                            <x-tag-a :route="route($service->route_name)" :name="__('customTrans.sign for services')" class="btn-primary"
                                style="width: 140px;"></x-tag-a>
                        </div>
                    </div>
                </div>


            </div>
        @endforeach



        <div class="row">
            <div class="col-xl-4">
                <div class="card custom-card">
                    <div class="row g-0">
                        <div class="  col-md-4"> <img src="{{ asset('pic/pexels-cottonbro-4880418.jpg') }}"
                                class="img-fluid rounded-end h-100 w-100" alt="..." style="object-fit:cover ;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-header">
                                <div class="card-title mb-0">Horizontal Cards Horizontal Cards </div>
                                <span class="badge bg-primary float-end fs-10 text-light">New</span>
                                <span class="badge bg-danger  float-end fs-10 text-light">closed</span>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle fw-medium mb-2">Horizontal cards are awesome!</h6>
                                <p class="card-text">This is a wider card with supporting text below as a natural .</p>
                            </div>
                            <div class="card-footer ">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                                <a href="#" class="btn btn-light-primary font-weight-bold ">Manage</a>
                                <a href="#" class="btn btn-outline-secondary font-weight-bold ">Learn more</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card custom-card">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-header">
                                <div class="card-title">Horizontal Cards</div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle fw-medium mb-2">Horizontal cards are awesome!</h6>
                                <p class="card-text mb-3">This is a wider card with suppo rting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-4"> <img src="{{ asset('pic/pexels-cottonbro-4880418.jpg') }}"
                                class="img-fluid rounded-end h-100 w-100" alt="..."> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card custom-card"> <img src="{{ asset('pic/media-43.jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h6 class="card-title fw-semibold">Morphology of Black Coffee.</h6>
                        <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be sure
                            there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card custom-card">
                    <img src="{{ asset('pic/media-43.jpg') }}" class="card-img-top" alt="..."
                        style="height: 130px;object-fit:cover ;overflow: hidden;">
                    <div class="card-body py-4">

                        <span class="card-title mb-1 h5">Horizontal Cards Horizontal Cards </span>

                        <span class="badge bg-primary float-end fs-10 text-light">New</span>

                        <span class="badge bg-danger  float-end fs-10 text-light">closed</span>

                        <div class="card-body py-4 px-1">

                            <p class="card-text">This is a wider card with supporting text below as a natural .</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between py-4" style="border-top: none;">

                            <a href="#" class="btn btn-light-primary font-weight-bold ">Manage</a>
                            <a href="#" class="btn btn-outline-secondary font-weight-bold ">Learn more</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
