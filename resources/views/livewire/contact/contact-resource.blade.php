 <div class="col-sm-12 col-lg-7 col-xl-8">


     <div class="">
         <a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>

         <form>

             <div class="main-content-body main-content-body-contacts card custom-card">
                 <div class="main-contact-info-header pt-3">
                     <div class="media">
                         <div class="main-img-user">
                             @if ($contactObject->attchments['contactImage'])
                                 <img src="{{ asset('storage/' . $contactObject->attchments['contactImage']) }}">
                             @else
                                 <img alt="avatar" src="http://127.0.0.1:8000/assets/img/faces/9.jpg">
                             @endif


                         </div>


                         <div class="media-body mr-2 ">

                             @if ($editContact === $contactObject->id)
                                 <x-input wire:model='full_name' name="full_name" divWidth="8" marginBottom="1"
                                     class="text-primary custom-border-bottom-dotted mb-1 " placeholder="الاسم كامل"
                                     style="font-weight:700 !important;font-size: 18px;"></x-input>
                             @else
                                 <x-input class="custom-border-bottom-dotted text-primary mb-1 bg-white " divWidth="8"
                                     disabled marginBottom="1" value="{{ $contactObject->full_name }}"
                                     style="font-size: 18px;"></x-input>
                             @endif

                             <div class="d-flex justify-content-between align-items-center">

                                 @if ($editContact === $contactObject->id)
                                     <x-input wire:model='short_description' name="short_description" divWidth="8"
                                         class="custom-border-bottom-dotted " placeholder="وصف مختصر"></x-input>
                                 @else
                                     <x-input class="custom-border-bottom-dotted   mb-1  bg-white" divWidth="8"
                                         disabled value="{{ $contactObject->short_description }}"></x-input>
                                 @endif

                                 <nav class="contact-info text-left">

                                     <x-actions class="contact-icon border tx-inverse" edit></x-actions>
                                     <x-actions del></x-actions>
                                 </nav>
                             </div>


                         </div>
                     </div>


                 </div>


                 <div>

                     <div class="row mt-3 justify-content-start align-items-center">

                         @if ($editContact === $contactObject->id)
                             <x-select class="custom-border-bottom-dotted " wire:model='contact_type'
                                 wire:change="contactType" name="contact_type" :options="$statuses->where('p_id_sub', 1235)->pluck('status_name', 'id')"
                                 ChoseTitle="نوع جهة الاتصال" marginBottom="0" divWidth="3"></x-select>
                         @else
                             <x-input class="custom-border-bottom-dotted bg-white"
                                 value="{{ $contactObject->contactTypeName->status_name }}" divWidth="3"
                                 disabled></x-input>
                         @endif

                         @if ($editContact === $contactObject->id && $ContactTypeToshow == 1236)
                             <x-input wire:model='fname' name="fname" divWidth="2"
                                 class="custom-border-bottom-dotted" placeholder="{{ __('customTrans.fname') }}"></x-input>
                         @elseif($editContact !== $contactObject->id && $ContactTypeToshow == 1236)
                             <x-input class="custom-border-bottom-dotted bg-white" value="{{ $contactObject->fname }}"
                                 divWidth="2" disabled></x-input>
                         @endif

                         @if ($editContact === $contactObject->id && $ContactTypeToshow === 1236)
                             <x-input wire:model='sname' name="sname" divWidth="2"
                                 class="custom-border-bottom-dotted" placeholder="{{ __('customTrans.sname') }}"></x-input>
                         @elseif($editContact !== $contactObject->id && $ContactTypeToshow == 1236)
                             <x-input class="custom-border-bottom-dotted bg-white " value="{{ $contactObject->sname }}"
                                 divWidth="2" disabled></x-input>
                         @endif

                         @if ($editContact === $contactObject->id && $ContactTypeToshow === 1236)
                             <x-input wire:model='tname' name="tname" divWidth="2"
                                 class="custom-border-bottom-dotted" placeholder="{{ __('customTrans.tname') }}"></x-input>
                         @elseif($editContact !== $contactObject->id && $ContactTypeToshow == 1236)
                             <x-input class="custom-border-bottom-dotted bg-white" value="{{ $contactObject->tname }}"
                                 divWidth="2" disabled></x-input>
                         @endif

                         @if ($editContact === $contactObject->id && $ContactTypeToshow === 1236)
                             <x-input wire:model='lname' name="lname" divWidth="2"
                                 class="custom-border-bottom-dotted" placeholder="{{ __('customTrans.lname') }}"></x-input>
                         @elseif($editContact !== $contactObject->id && $ContactTypeToshow == 1236)
                             <x-input class="custom-border-bottom-dotted bg-white" value="{{ $contactObject->lname }}"
                                 divWidth="2" disabled></x-input>
                         @endif

                         @if ($editContact === $contactObject->id && $ContactTypeToshow === 1236)
                             <x-input wire:model='nick_name' name="nick_name" divWidth="2"
                                 class="custom-border-bottom-dotted"
                                 placeholder="{{ __('customTrans.nick_name') }}"></x-input>
                         @elseif($editContact !== $contactObject->id && $ContactTypeToshow == 1236)
                             <x-input class="custom-border-bottom-dotted bg-white"
                                 value="{{ $contactObject->nick_name }}" disabled></x-input>
                         @endif


                         @if ($editContact === $contactObject->id && in_array($ContactTypeToshow, ['1237', '1238', '1239']))
                             <x-input wire:model='responsible' name="responsible" divWidth="3"
                                 class="custom-border-bottom-dotted"
                                 placeholder="{{ __('customTrans.responsible') }}"></x-input>
                         @elseif ($editContact !== $contactObject->id && in_array($ContactTypeToshow, ['1237', '1238', '1239']))
                             <x-input class="custom-border-bottom-dotted bg-white"
                                 value="{{ $contactObject->responsible }}" disabled></x-input>
                         @endif

                         @if ($editContact === $contactObject->id)
                             <x-input wire:model='identity_number' name="identity_number" divWidth="3"
                                 class="custom-border-bottom-dotted"
                                 placeholder="{{ __('customTrans.identity_number') }}"></x-input>
                         @else
                             <x-input class="custom-border-bottom-dotted bg-white"
                                 value="{{ $contactObject->identity_number }}" disabled></x-input>
                         @endif



                     </div>

                 </div>


                 <div class="main-contact-info-body p-4 ps">


                     <div class="media-list pb-0">
                         <div class="media">
                             <div class="media-body">
                                 <div>
                                     @if ($editContact === $contactObject->id)
                                         <x-input wire:model='phone_primary' name="phone_primary"
                                             divWidth="6" label class="custom-border-bottom-dotted mt-0 pt-0"
                                             labelclass="pb-0"></x-input>
                                     @else
                                         <x-input class="custom-border-bottom-dotted  mt-0 pt-0 bg-white"
                                             divWidth="6" labelclass="pb-0" label name="phone_primary"
                                             value="{{ $contactObject->phone_primary }}" disabled></x-input>
                                     @endif

                                 </div>

                                 <div>
                                     @if ($editContact === $contactObject->id)
                                         <x-input wire:model='phone_secondary'
                                             name="phone_secondary" divWidth="6" label
                                             class="custom-border-bottom-dotted mt-0 pt-0"
                                             labelclass="pb-0"></x-input>
                                     @else
                                         <x-input class="custom-border-bottom-dotted  mt-0 pt-0 bg-white"
                                             divWidth="6" labelclass="pb-0" label name="phone_secondary"
                                             value="{{ $contactObject->phone_secondary }}"
                                             disabled></x-input>
                                     @endif

                                 </div>
                             </div>
                         </div>

                         <div class="">
                             <div class="media-body">
                                 <div>
                                     @if ($editContact === $contactObject->id)
                                         <x-input wire:model='work_phone_primary' name="work_phone_primary"
                                             divWidth="6" label class="custom-border-bottom-dotted mt-0 pt-0"
                                             labelclass="pb-0"></x-input>
                                     @else
                                         <x-input class="custom-border-bottom-dotted  mt-0 pt-0 bg-white"
                                             divWidth="6" labelclass="pb-0" label name="work_phone_primary"
                                             value="{{ $contactObject->work_phone_primary }}" disabled></x-input>
                                     @endif
                                 </div>
                                 <div>
                                     @if ($editContact === $contactObject->id)
                                         <x-input wire:model='work_phone_secondary' name="work_phone_secondary"
                                             divWidth="6" label class="custom-border-bottom-dotted mt-0 pt-0 "
                                             labelclass="pb-0"></x-input>
                                     @else
                                         <x-input class="custom-border-bottom-dotted  mt-0 pt-0 bg-white"
                                             divWidth="6" labelclass="pb-0" label name="work_phone_secondary"
                                             value="{{ $contactObject->work_phone_secondary }}" disabled></x-input>
                                     @endif
                                 </div>
                             </div>
                         </div>


                         <div class="w-50 mb-3">

                             @foreach ($contactObject->properties as $key => $prop)
                                 <li class="custom-border-bottom-dotted p-x pt-3"> {{ $prop }} : <span
                                         class="text-muted">{{ $key }}</span></li>
                             @endforeach

                         </div>


                         <div class="media">
                             <div class="media-body">
                                 <div>
                                     <label>Current Address</label>
                                     {{-- <livewire:AddressesModule.AddressForm>
                                            </livewire:AddressesModule.AddressForm> --}}

                                     {{-- <p>{{ $contact->address_type }}</p> --}}


                                     <x-input wire:model='address_specific' name="address_specific"
                                         labelclass="pb-0 mt-3" divWidth="12"
                                         class=" custom-border-bottom-dotted pt-0 mt-0 pb-0 mb-0" label></x-input>

                                     <x-input wire:model='notes' name="notes" labelclass="pb-0 mt-3"
                                         divWidth="12" class=" custom-border-bottom-dotted pt-0 mt-0 pb-0 mb-0"
                                         label></x-input>
                                 </div>
                             </div>
                         </div>



                     </div>
                     <div class="ps__rail-x" style="left: 0px; top: 0px;">
                         <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                     </div>
                     <div class="ps__rail-y" style="top: 0px; right: 824px;">
                         <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                     </div>

                     <div>

                         <x-textarea wire:model='description' name="description" label labelname="وصف"
                             divWidth="12" rows="2" divclass="text-muted"></x-textarea>
                         <x-textarea wire:model='note' name="note" label divWidth="12" rows="2"
                             divclass="text-muted"></x-textarea>
                     </div>


                 </div>
             </div>
             <x-saveClearbuttons></x-saveClearbuttons>
         </form>
     </div>
 </div>
