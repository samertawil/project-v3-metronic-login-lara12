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

            .custom-border-bottom-dotted {
                border-bottom: 1px dashed #cccccc !important;
                border-top: none !important;
                border-right: none !important;
                border-left: none !important;

            }
        </style>
    @endpush




    <div class="row row-sm">
        <div class="col-sm-12 col-lg-5 col-xl-4">
            <div class="card custom-card">
                <div class="">
                    <div class="main-content-app main-content-contacts pt-0">
                        <div class="main-content-left main-content-left-contacts">
                            <nav class="nav main-nav-line main-nav-line-chat  pl-3">
                                <a class="nav-link active" data-toggle="tab" href="">All Contacts</a>
                                <a class="nav-link" data-toggle="tab" href="">Favorites</a>
                            </nav>
                            <div class="main-contacts-list ps ps--active-y" id="mainContactList">
                                <div class="main-contact-label">
                                    A
                                </div>



                                @foreach ($this->contacts as $contactList)
                                  
                                    <div class="main-contact-item "
                                    wire:click.prevent="goContactDetail({{ $contactList->id }})">
                                        <div class="main-img-user online">
                                            @if ($contactList->attchments['contactImage'])
                                                @foreach ($contactList->attchments as $pic)
                                                    <a href="{{ asset('storage/' . $pic) }}" target="_blank"><img
                                                            alt="avatar"src="{{ asset('storage/' . $pic) }}"> </a>
                                                @endforeach
                                            @else
                                                <img alt="avatar" src="http://127.0.0.1:8000/assets/img/faces/9.jpg">
                                            @endif

                                        </div>
                                        <div class="main-contact-body">

                                            <p class="text-primary font-weight-bold "
                                                wire:click.prevent="goContactDetail({{ $contactList->id }})"
                                                style="text-decoration: underline;">
                                                {{ $contactList->full_name }} </p>


                                            <span class="phone">{{ $contactList->phone_primary }}</span>

                                        </div>
                                        <a class="main-contact-star" href="">
                                            @if ($contactList->isFavorite == 0)
                                                <i class="fa-regular fa-star"
                                                    wire:click.prevent="updateFavorite({{ $contactList->id }},1)"
                                                    style="color: #FFD43B;"></i>
                                            @elseif ($contactList->isFavorite == 1)
                                                <i class="fa-solid fa-star"  wire:click.prevent="updateFavorite({{ $contactList->id }},0)" style="color: #FFD43B;"></i>
                                            @endif

                                            <i class="fe fe-edit-2 mr-1"></i>
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                    </div>
                                @endforeach




                                <div class="ps__rail-x" style="left: 0px; top: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; height: 730px; right: 400px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 554px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @if (!empty($contactList->id))
            <livewire:contact.ContactResource lazy></livewire:contact.ContactResource>
        @endif


        {{-- <livewire:contact.ContactResource  :id="$val"></livewire:contact.ContactResource> --}}



    </div>


</div>
