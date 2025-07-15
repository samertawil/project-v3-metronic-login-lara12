<div class="dropdown">

    @php
        $currentLang = LaravelLocalization::getCurrentLocale();
    @endphp

    @if ($currentLang == 'en')
        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
            <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                <img class="h-20px w-20px rounded-sm"
                    src="  {{ asset('template-assets/metronic7/media/svg/flags/226-united-states.svg') }}"
                    alt="" />

            </div>
        </div>
    @elseif ($currentLang == 'ar')
        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
            <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                <img class="h-20px w-20px rounded-sm"
                    src="  {{ asset('template-assets/metronic7/media/svg/flags/077-jordan.svg') }}" alt="" />

            </div>
        </div>
    @endif


    <!--begin::Dropdown-->
    <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
        <!--begin::Nav-->
        <ul class="navi navi-hover py-4">
            <!--begin::Item-->
            <li class="navi-item">




                <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="navi-link">
                    <span class="symbol symbol-20 mr-3">
                        <img src="  {{ asset('template-assets/metronic7/media/svg/flags/226-united-states.svg') }}"
                            alt="" />
                    </span>
                    <span class="navi-text">English</span>
                </a>

            </li>


            <li class="navi-item">
                <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" class="navi-link">
                    <span class="symbol symbol-20 mr-3">
                        <img src=" {{ asset('template-assets/metronic7/media/svg/flags/077-jordan.svg') }}"
                            alt="" />
                    </span>
                    <span class="navi-text">العربية</span>
                </a>
            </li>
            <!--end::Item-->
        </ul>
        <!--end::Nav-->
    </div>
    <!--end::Dropdown-->
</div>
