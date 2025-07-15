<!--begin::Card-->
@push('css')
    <link href="{{ asset('template-assets/metronic7/css/pages/wizard/wizard-1.rtl.css') }}" rel="stylesheet" type="text/css" />
@endpush
<div class="card card-custom gutter-b">
    <!--begin::Body-->
    <div class="card-body p-0">
        <!--begin::Wizard-->
        <div class="wizard wizard-1" id="kt_contact_add" data-wizard-state="first" data-wizard-clickable="true">
            <div class="kt-grid__item">
                <!--begin::Wizard Nav-->
                <div class="wizard-nav border-bottom">
                    <div class="wizard-steps p-8 p-lg-10">
                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                            <div class="wizard-label">
                                <span
                                    class="svg-icon svg-icon-4x wizard-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path
                                                d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
                                                fill="#000000"></path>
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                                <h3 class="wizard-title">1. Personal Information</h3>
                            </div>
                            <span
                                class="svg-icon svg-icon-xl wizard-arrow"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(20.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                            x="11" y="5" width="2" height="14" rx="1"></rect>
                                        <path
                                            d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(14.999999, 11.999997) scale(1, -1) rotate(270.000000) translate(-14.999999, -11.999997) ">
                                        </path>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                        </div>

                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                            <div class="wizard-label">
                                <span
                                    class="svg-icon svg-icon-4x wizard-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z"
                                                fill="#000000" fill-rule="nonzero"></path>
                                            <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6">
                                            </circle>
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                                <h3 class="wizard-title">2. Address Details</h3>
                            </div>
                            <span
                                class="svg-icon svg-icon-xl wizard-arrow"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(20.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                            x="11" y="5" width="2" height="14" rx="1"></rect>
                                        <path
                                            d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(14.999999, 11.999997) scale(1, -1) rotate(270.000000) translate(-14.999999, -11.999997) ">
                                        </path>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                        </div>
                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                            <div class="wizard-label">
                                <span
                                    class="svg-icon svg-icon-4x wizard-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                fill="#000000"></path>
                                            <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5"
                                                r="2.5"></circle>
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                                <h3 class="wizard-title">3. Review and Submit</h3>
                                <button type="button"
                                    class="btn btn-success font-weight-bold text-uppercase px-9 py-4"
                                    wire:click='store'>
                                    Submit
                                </button>
                            </div>
                            <span
                                class="svg-icon svg-icon-xl wizard-arrow last"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) "
                                            x="11" y="5" width="2" height="14" rx="1"></rect>
                                        <path
                                            d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) ">
                                        </path>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                        </div>
                    </div>
                </div>
                <!--end::Wizard Nav-->
            </div>
            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                <div class="col-xl-12 col-xxl-7">
                    <!--begin::Form Wizard Form-->
                    <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_contact_add_form">
                        <!--begin::Form Wizard Step 1-->
                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                            <h3 class="mb-10 font-weight-bold text-dark">User's Profile Details:</h3>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="image-input image-input-outline" id="kt_contact_add_avatar">

                                                @if ($profile_image)
                                                    <img src="{{ $profile_image->temporaryUrl() }}"
                                                        class="image-input-wrapper  @error('profile_image') form-control
                                        is-invalid
                                        @enderror">
                                                    @include('layouts._show-error', [
                                                        'field_name' => 'profile_image',
                                                    ])
                                                @else
                                                    <div class="image-input-wrapper"
                                                        style="background-image: url(assets/media/users/100_2.jpg)">
                                                    </div>
                                                @endif


                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="profile_image"
                                                        wire:model='profile_image' accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="profile_avatar_remove">
                                                </label>

                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="cancel" data-toggle="tooltip" title=""
                                                    data-original-title="Cancel avatar">
                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class=" form-group row fv-plugins-icon-container has-success">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.contact_type') }}<span
                                                class="text-danger"> &nbsp; *</span></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <select name="contact_type" wire:model.live='contact_type'
                                                class="form-control form-control-lg form-control-solid"
                                                id="id1">
                                                <option value="" hidden>{{ __('customTrans.choose') }}</option>
                                                @foreach ($statuses->where('p_id_sub', 16) as $status)
                                                    <option value="{{ $status->id }}" @selected($status->id == 17)>
                                                        {{ $status->status_name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>

                                  
                                    <div class=" form-group row fv-plugins-icon-container has-success">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.identity_number') }}</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-lg form-control-solid"
                                                name="identity_number" wire:model='identity_number' type="text">
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    @if ($personalSide == true)
                                        <div class="form-group row fv-plugins-icon-container has-success">
                                            <label
                                                class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.first_name') }}<span
                                                    class="text-danger"> &nbsp; *</span></label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    name="fname" wire:model='fname' type="text" id=fname>
                                                <div class="fv-plugins-message-container"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row fv-plugins-icon-container has-success">
                                            <label
                                                class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.sec_name') }}</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    name="sname" wire:model='sname' type="text">
                                                <div class="fv-plugins-message-container"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row fv-plugins-icon-container has-success">
                                            <label
                                                class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.thr_name') }}</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    name="tname" wire:model='tname' type="text">
                                                <div class="fv-plugins-message-container"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row fv-plugins-icon-container has-success">
                                            <label
                                                class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.family_name') }}<span
                                                    class="text-danger"> &nbsp; *</span></label>

                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    name="lname" wire:model='lname' type="text" id='lname'>
                                                <div class="fv-plugins-message-container"></div>
                                            </div>
                                        </div>
                                        @else
                                        <div class=" form-group row fv-plugins-icon-container has-success">
                                            <label for="full_name"
                                                class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.contact_full_name') }}</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    id="full_name" name="full_name" wire:model='full_name'
                                                    type="text">
                                                <div class="fv-plugins-message-container"></div>
                                            </div>
                                        </div>
    
                                    @endif

                                    {{-- <div class="form-group row fv-plugins-icon-container has-success">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Company Name</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-lg form-control-solid"
                                                name="companyname" type="text">
                                            <span class="form-text text-muted">If you want your invoices addressed to a
                                                company. Leave blank to use your full name.</span>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row fv-plugins-icon-container has-success">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.phone_primary') }}<span
                                                class="text-danger"> &nbsp; *</span></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="la la-phone"></i></span></div>
                                                <input type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="phone1" wire:model='phone_primary' id='phone'
                                                    placeholder="{{ __('customTrans.phone') }}">
                                            </div>

                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row fv-plugins-icon-container has-success">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.phone_secondary') }}</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="la la-phone"></i></span></div>
                                                <input type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="phone_secondary" wire:model='phone_secondary'
                                                    placeholder="{{ __('customTrans.phone') }}">
                                            </div>

                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row fv-plugins-icon-container has-success">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.email') }}</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="la la-at"></i></span></div>
                                                <input type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="email" wire:model='email'
                                                    placeholder="{{ __('customTrans.email') }}">
                                            </div>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row fv-plugins-icon-container has-success">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.web site') }}</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <input type="text" wire:model='website'
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="companywebsite"
                                                    placeholder="{{ __('customTrans.web site') }}">
                                                <div class="input-group-append"><span
                                                        class="input-group-text">.com</span></div>
                                            </div>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <div
                                        class="form-group row align-items-center fv-plugins-icon-container has-danger">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.connect_ways') }}<span
                                                class="text-danger"> &nbsp; *</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="checkbox-inline">
                                                <label class="checkbox" for="checkemail">
                                                    <input name="connect_ways" id="checkemail"
                                                        wire:model='connect_ways' type="checkbox" class="is-invalid"
                                                        value="Email">
                                                    <span></span>
                                                    Email
                                                </label>
                                                <label class="checkbox" for="checksms">
                                                    <input name="connect_ways" id="checksms"
                                                        wire:model='connect_ways' type="checkbox" value="SMS">
                                                    <span></span>
                                                    SMS
                                                </label>
                                                <label class="checkbox" for="checkphone">
                                                    <input name="connect_ways" id="checkphone"
                                                        wire:model='connect_ways' type="checkbox" value="Phone">
                                                    <span></span>
                                                    Phone
                                                </label>
                                            </div>
                                            <div class="fv-plugins-message-container">
                                                <div data-field="communication" data-validator="choice"
                                                    class="text-muted" style="font-size: 8px;">
                                                    {{ __('customTrans.Please select at least 1 option') }}</div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <!--end::Form Wizard Step 1-->


                        <!--begin::Form Wizard Step 2-->

                        <div class="pb-5" data-wizard-type="step-content">

                            @if ($settings['country'] == 'palestine')
                                <livewire:Address2.Create></livewire:Address2.Create>
                            @else
                                <div>
                                    <h3 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h3>
                                    <div class="form-group fv-plugins-icon-container">
                                        <label>Address Line 1</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="address1" placeholder="Address Line 1" value="Address Line 1">
                                        <span class="form-text text-muted">Please enter your Address.</span>
                                        <div class="fv-plugins-message-container"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address Line 2</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            name="address2" placeholder="Address Line 2" value="Address Line 2">
                                        <span class="form-text text-muted">Please enter your Address.</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group fv-plugins-icon-container">
                                                <label>Postcode</label>
                                                <input type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="postcode" placeholder="Postcode" value="3000">
                                                <span class="form-text text-muted">Please enter your Postcode.</span>
                                                <div class="fv-plugins-message-container"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group fv-plugins-icon-container">
                                                <label>City</label>
                                                <input type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="city" placeholder="City" value="Melbourne">
                                                <span class="form-text text-muted">Please enter your City.</span>
                                                <div class="fv-plugins-message-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group fv-plugins-icon-container">
                                                <label>State</label>
                                                <input type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="state" placeholder="State" value="VIC">
                                                <span class="form-text text-muted">Please enter your State.</span>
                                                <div class="fv-plugins-message-container"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group fv-plugins-icon-container">
                                                <label>Country</label>
                                                <select name="country"
                                                    class="form-control form-control-lg form-control-solid">
                                                    <option value="">Select</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU" selected="">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia, Plurinational State of</option>
                                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, the Democratic Republic of the
                                                    </option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Côte d'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic People's Republic of
                                                    </option>
                                                    <option value="KR">Korea, Republic of</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MK">Macedonia, the former Yugoslav Republic of
                                                    </option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated States of</option>
                                                    <option value="MD">Moldova, Republic of</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Réunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="BL">Saint Barthélemy</option>
                                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha
                                                    </option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and the South Sandwich Islands
                                                    </option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="UM">United States Minor Outlying Islands
                                                    </option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands, British</option>
                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                                <div class="fv-plugins-message-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!--end::Form Wizard Step 2-->

                        <!--begin::Form Wizard Step 3-->
                        <div class="pb-5" data-wizard-type="step-content">
                            <h4 class="mb-10 font-weight-bold">{{ __('customTrans.Review your Details and Submit') }}
                            </h4>

                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold text-muted">{{ __('customTrans.contact_type') }}
                                        </td>
                                        <td class="font-weight-bold text-right" style="direction: ltr;"> <select
                                                disabled wire:model='contact_type'
                                                class="form-control form-control-lg  bg-white border-0">
                                                @foreach ($statuses->where('p_id_sub', 16) as $status)
                                                    <option value="{{ $status->id }}">
                                                        {{ $status->status_name }}</option>
                                                @endforeach
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold text-muted ">
                                            {{ __('customTrans.contact_full_name') }} </td>
                                        <td style="direction: ltr;"> <input
                                                class="form-control form-control-lg bg-white border-0"
                                                wire:model='full_name' disabled></td>

                                    </tr>
                                    @if ($personalSide == true)
                                        <tr>
                                            <td class="font-weight-bold text-muted ">
                                                {{ __('customTrans.first_name') }} </td>
                                            <td style="direction: ltr;"> <input
                                                    class="form-control form-control-lg bg-white border-0"
                                                    wire:model='fname' disabled></td>

                                        </tr>

                                        <tr>
                                            <td class="font-weight-bold text-muted ">
                                                {{ __('customTrans.family_name') }} </td>
                                            <td style="direction: ltr;"> <input
                                                    class="form-control form-control-lg bg-white border-0"
                                                    wire:model='lname' disabled></td>

                                        </tr>
                                    @endif
                                    <tr>
                                        <td class="font-weight-bold text-muted ">
                                            {{ __('customTrans.phone_primary') }} </td>
                                        <td style="direction: ltr;"> <input
                                                class="form-control form-control-lg bg-white border-0"
                                                wire:model='phone_primary' disabled></td>

                                    </tr>

                                    <tr>
                                        <td class="font-weight-bold text-muted ">
                                            {{ __('customTrans.phone_secondary') }} </td>
                                        <td style="direction: ltr;"> <input
                                                class="form-control form-control-lg bg-white border-0"
                                                wire:model='phone_secondary' disabled></td>

                                    </tr>
                                    {{-- <tr style=" vertical-align: middle !important;">
                                        <td class="font-weight-bold text-muted ">
                                            {{ __('customTrans.connect_ways') }} </td>
                                        <td style="direction: ltr;  vertical-align: middle !important; 
                                        "
                                            class="mt-3">
                                            <div
                                                class="form-group row align-items-center fv-plugins-icon-container has-danger">

                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="checkbox-inline">
                                                        <label class="checkbox">
                                                            <input disabled wire:model='connect_ways' type="checkbox"
                                                                class="is-invalid">
                                                            <span></span>
                                                            Email
                                                        </label>
                                                        <label class="checkbox">
                                                            <input disabled wire:model='connect_ways' type="checkbox">
                                                            <span></span>
                                                            SMS
                                                        </label>
                                                        <label class="checkbox">
                                                            <input disabled wire:model='connect_ways' checked
                                                                type="checkbox">
                                                            <span></span>
                                                            Phone
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                        </td>

                                    </tr> --}}
                                </tbody>
                            </table>

                            <div class="separator separator-dashed my-5"></div>

                            <h6 class="font-weight-bold mb-3">
                                Delivery Info:
                            </h6>
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold text-muted">Address Line 1:</td>
                                        <td class="font-weight-bold text-right">Fox Avenue 5-6B</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold text-muted">Address Line 2:</td>
                                        <td class="font-weight-bold text-right">Melbourne VIC</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold text-muted">Post:</td>
                                        <td class="font-weight-bold text-right">3000</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold text-muted">Country:</td>
                                        <td class="font-weight-bold text-right">Australia</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="separator separator-dashed my-5"></div>

                            <h6 class="font-weight-bold mb-3">
                                Payment Details:
                            </h6>
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold text-muted">Card Number:</td>
                                        <td class="font-weight-bold text-right">xxxx xxxx xxxx 1111</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold text-muted">Card Name:</td>
                                        <td class="font-weight-bold text-right">John Wick</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold text-muted">Card Expiry:</td>
                                        <td class="font-weight-bold text-right">01/21</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--end::Form Wizard Step 4-->

                        <!--begin::Wizard Actions-->
                        <div class="d-flex justify-content-between border-top pt-10">
                            <div class="mr-2">
                                <button type="button"
                                    class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4"
                                    data-wizard-type="action-prev">
                                    Previous
                                </button>
                            </div>
                            <div>
                                <button type="button"
                                    class="btn btn-success font-weight-bold text-uppercase px-9 py-4"
                                    data-wizard-type="action-submit" wire:click='store'>
                                    Submit
                                </button>
                                <button type="button"
                                    class="btn btn-primary font-weight-bold text-uppercase px-9 py-4"
                                    data-wizard-type="action-next">
                                    Next Step
                                </button>
                            </button>
                         
                               
                            </div>
                        </div>
                        <!--end::Wizard Actions-->
                        <div></div>
                        <div></div>
                        <div></div>
                    </form>

                    <!--end::Form Wizard Form-->
                </div>
            </div>
        </div>
        <!--end::Wizard-->
    </div>




    @push('js')
        <script src="{{ asset('template-assets/metronic7/js/pages/custom/contacts/add-contact.js') }}"></script>
    @endpush
</div>
