

 <div class="card card-custom gutter-b">

    <x-slot:crumb>

    <x-breadcrumb></x-breadcrumb>

</x-slot:crumb>


     <div class="card-body p-0">

         <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
             <div class="col-xl-12 col-xxl-7">

                 <div class="pb-5">
                     <h3 class="mb-10 font-weight-bold text-dark">{{ __('customTrans.Personal Information') }}:
                     </h3>
                     <div class="row">
                         <div class="col-xl-12">
                             <div class="form-group row">
                                 <label class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.Avatar') }}</label>
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
                                                 style="background-image: url(template-assets/metronic7/media/users/blank.png)">
                                             </div>
                                         @endif


                                         <label
                                             class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                             data-action="change" data-toggle="tooltip" title=""
                                             data-original-title="Change avatar">
                                             <i class="fa fa-pen icon-sm text-muted"></i>
                                             <input type="file" name="profile_image" wire:model='profile_image'
                                                 accept=".png, .jpg, .jpeg">
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
                                         class="form-control form-control-lg form-control-solid" id="id1">
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
                                         <input class="form-control form-control-lg form-control-solid" name="fname"
                                             wire:model='fname' type="text" id=fname>
                                         <div class="fv-plugins-message-container"></div>
                                     </div>
                                 </div>
                                 <div class="form-group row fv-plugins-icon-container has-success">
                                     <label
                                         class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.sec_name') }}</label>
                                     <div class="col-lg-9 col-xl-9">
                                         <input class="form-control form-control-lg form-control-solid" name="sname"
                                             wire:model='sname' type="text">
                                         <div class="fv-plugins-message-container"></div>
                                     </div>
                                 </div>
                                 <div class="form-group row fv-plugins-icon-container has-success">
                                     <label
                                         class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.thr_name') }}</label>
                                     <div class="col-lg-9 col-xl-9">
                                         <input class="form-control form-control-lg form-control-solid" name="tname"
                                             wire:model='tname' type="text">
                                         <div class="fv-plugins-message-container"></div>
                                     </div>
                                 </div>
                                 <div class="form-group row fv-plugins-icon-container has-success">
                                     <label
                                         class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.family_name') }}<span
                                             class="text-danger"> &nbsp; *</span></label>

                                     <div class="col-lg-9 col-xl-9">
                                         <input class="form-control form-control-lg form-control-solid" name="lname"
                                             wire:model='lname' type="text" id='lname'>
                                         <div class="fv-plugins-message-container"></div>
                                     </div>
                                 </div>
                             @else
                                 <div class=" form-group row fv-plugins-icon-container has-success">
                                     <label for="full_name"
                                         class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.contact_full_name') }}</label>
                                     <div class="col-lg-9 col-xl-9">
                                         <input class="form-control form-control-lg form-control-solid" id="full_name"
                                             name="full_name" wire:model='full_name' type="text">
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
                                         <input type="text" class="form-control form-control-lg form-control-solid"
                                             name="phone1" wire:model="phone_primary"
                                             wire:change="chkExists($event.target.value,'phone_primary')"
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
                                         <input type="text" class="form-control form-control-lg form-control-solid"
                                             name="phone_secondary" wire:model='phone_secondary'
                                             placeholder="{{ __('customTrans.phone') }}">
                                     </div>

                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>
                             <div class="form-group row fv-plugins-icon-container has-success">
                                 <label class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.email') }}</label>
                                 <div class="col-lg-9 col-xl-9">
                                     <div class="input-group input-group-lg input-group-solid">
                                         <div class="input-group-prepend"><span class="input-group-text"><i
                                                     class="la la-at"></i></span></div>
                                         <input type="text" class="form-control form-control-lg form-control-solid"
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
                                             name="companywebsite" placeholder="{{ __('customTrans.web site') }}">
                                         <div class="input-group-append"><span class="input-group-text">.com</span>
                                         </div>
                                     </div>
                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>
                             <div class="form-group row align-items-center fv-plugins-icon-container has-danger">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.connect_ways') }}<span
                                         class="text-danger"> &nbsp; *</span></label>
                                 <div class="col-lg-9 col-xl-6">
                                     <div class="checkbox-inline">
                                         <label class="checkbox" for="checkemail">
                                             <input name="connect_ways" id="checkemail" wire:model='connect_ways'
                                                 type="checkbox" class="is-invalid" value="Email">
                                             <span></span>
                                             Email
                                         </label>
                                         <label class="checkbox" for="checksms">
                                             <input name="connect_ways" id="checksms" wire:model='connect_ways'
                                                 type="checkbox" value="SMS">
                                             <span></span>
                                             SMS
                                         </label>
                                         <label class="checkbox" for="checkphone">
                                             <input name="connect_ways" id="checkphone" wire:model='connect_ways'
                                                 type="checkbox" value="Phone">
                                             <span></span>
                                             Phone
                                         </label>
                                     </div>
                                     <div class="fv-plugins-message-container">
                                         <div data-field="communication" data-validator="choice" class="text-muted"
                                             style="font-size: 8px;">
                                             {{ __('customTrans.Please select at least 1 option') }}</div>
                                     </div>
                                 </div>
                             </div>



                         </div>
                     </div>
                 </div>

                 <div class="pb-5">


                     @if ($settings['country'] == 'palestine')
                         {{-- <livewire:Address2.Create></livewire:Address2.Create> --}}


                         <div>



                             <div class="form-group row align-items-center fv-plugins-icon-container has-danger">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.addressType') }}</label>
                                 <div class="col-lg-9 col-xl-9">
                                     <div class="checkbox-inline ">
                                         @foreach ($statuses->where('p_id_sub', config('myConstants.addressType')) as $address_type)
                                             <label class="radio" style="margin:0px 5px;">
                                                 <input name="address_type" wire:model='address_type' type="radio"
                                                     style="margin:0px 5px;" value=" {{ $address_type->id }}"
                                                     class="is-invalid">
                                                 <span class="mx-2"></span>
                                                 {{ $address_type->status_name }}
                                             </label>
                                         @endforeach


                                     </div>

                                 </div>
                             </div>

                             <div class=" form-group row fv-plugins-icon-container has-success">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.region_name') }}</label>
                                 <div class="col-lg-9 col-xl-9">
                                     <select name="region_id" wire:model.live='region_id'
                                         class="form-control form-control-lg form-control-solid">
                                         <option value="" hidden>{{ __('customTrans.choose') }}</option>
                                         @foreach ($regions as $region)
                                             <option value="{{ $region->region_id }}">
                                                 {{ $region->region_name }}</option>
                                         @endforeach
                                     </select>
                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>


                             <div class=" form-group row fv-plugins-icon-container has-success">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.city_name') }}</label>
                                 <div class="col-lg-9 col-xl-9">
                                     <select name="city_id" wire:model.live='city_id'
                                         class="form-control form-control-lg form-control-solid">
                                         <option value="" hidden>{{ __('customTrans.choose') }}</option>
                                         @foreach ($cities->where('region_id', $region_id) as $citiy)
                                             <option value="{{ $citiy->id }}">
                                                 {{ $citiy->city_name }}</option>
                                         @endforeach
                                     </select>
                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>

                             <div class=" form-group row fv-plugins-icon-container has-success">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.neighbourhood_name') }}</label>
                                 <div class="col-lg-9 col-xl-9">
                                     <select name="neighbourhood_id" wire:model.live='neighbourhood_id'
                                         class="form-control form-control-lg form-control-solid">
                                         <option value="" hidden>{{ __('customTrans.choose') }}</option>
                                         @foreach ($neighbourhoods->where('city_id', $city_id) as $neighbourhood)
                                             <option value="{{ $neighbourhood->id }}">
                                                 {{ $neighbourhood->neighbourhood_name }}</option>
                                         @endforeach
                                     </select>
                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>

                             <div class=" form-group row fv-plugins-icon-container has-success">
                                 <label
                                     class="col-xl-3 col-lg-3 col-form-label">{{ __('customTrans.location_name') }}</label>
                                 <div class="col-lg-9 col-xl-9">
                                     <select name="location_id" wire:model='location_id'
                                         class="form-control form-control-lg form-control-solid">
                                         <option value="" hidden>{{ __('customTrans.choose') }}</option>
                                         @foreach ($locations->where('neighbourhood_id', $neighbourhood_id) as $location)
                                             <option value="{{ $location->id }}">
                                                 {{ $location->location_name }}</option>
                                         @endforeach
                                     </select>
                                     <div class="fv-plugins-message-container"></div>
                                 </div>
                             </div>

                         </div>
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


                         </div>
                     @endif
                 </div>

                 <div class="d-flex justify-content-end border-top pt-10 ">

                     <button type="button" class="btn btn-success font-weight-bold text-uppercase px-9 py-4"
                         wire:click='store' wire:loading.remove>
                         حفظ
                     </button>
                     <div wire:loading>
                         <img src="{{ asset('template-assets/valex/img/loader.svg') }}" alt="Loader">
                     </div>

                 </div>
                 @include('layouts._show_errors_all');
             </div>




         </div>

     </div>




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
 </div>
