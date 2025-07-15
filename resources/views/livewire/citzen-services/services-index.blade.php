<div>


    @push('css')
        <link rel="stylesheet" href="{{ asset('template-assets/myTableResponsive.css') }}">

        
    @endpush

    <x-slot:crumb>
        <x-breadcrumb>

            <li class="breadcrumb-item"><a href="{{ route('citzen.services.index') }}"
                    class="text-muted">{{ __('customTrans.services index') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('citzen.services.resouces') }}"
                    class="text-muted">{{ __('customTrans.services resource') }} </a></li>

        </x-breadcrumb>

    </x-slot:crumb>




    {{-- LG large view --}}
    <div class="table-responsive  d-none d-sm-block">
        <div id="example2_wrapper " class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>

                        <x-table-th wire:click="setSortBy('num')" name="num" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.service num')"></x-table-th>

                        <x-table-th wire:click="setSortBy('name')" name="name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.service name')"></x-table-th>

                        <x-table-th wire:click="setSortBy('home_page_order')" name="home_page_order"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.order')"></x-table-th>

                        <x-table-th wire:click="setSortBy('active')" name="activation" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('active_from_date')" name="active_from_date"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('active_to_date')" name="active_to_date"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>


                        <th class="text-center"> <span>{{ __('customTrans.actions') }}</span></th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($this->services as $key => $service)
                        <tr>
                            <td> {{ $service->num }} </td>

                            @if ($editServicesId === $service->id)
                                <td> <x-input wire:model="name" name="name" placeholder="..."
                                        divWidth="12"></x-input> </td>
                            @else
                                <td>{{ $service->name }}</td>
                            @endif


                            @if ($editServicesId === $service->id)
                                <td> <x-input wire:model="home_page_order" name="home_page_order" placeholder="..."
                                        divWidth="6"></x-input> </td>
                            @else
                                <td>{{ $service->home_page_order }}</td>
                            @endif



                            @if ($editServicesId === $service->id)
                                <td>
                                    <select wire:model="active" class="form-control bg-white">

                                        <option value="1">{{ __('customTrans.active') }}</option>
                                        <option value="0">{{ __('customTrans.not active') }}</option>
                                    </select>
                                </td>
                            @else
                                <td @class([
                                    '',
                                    'text-danger' => $service->active == 0,
                                    'text-success' => $service->active == 1,
                                ])>

                                    <div @class([
                                        'bg-danger dot-label' => $service->active == 0,
                                        'bg-success dot-label' => $service->active == 1,
                                    ])></div>
                                    {{ $service->active == 1 ? __('customTrans.active') : __('customTrans.not active') }}
                                </td>
                            @endif



                            @if ($editServicesId === $service->id)
                                <td> <x-input type='date' wire:model="active_from_date" name="active_from_date"
                                        divWidth="12"></x-input> </td>
                            @else
                                <td>{{ $service->active_from_date }}</td>
                            @endif


                            @if ($editServicesId === $service->id)
                                <td> <x-input type='date' wire:model="active_to_date" name="active_to_date"
                                        divWidth="12"></x-input> </td>
                            @else
                                <td>{{ $service->active_to_date }}</td>
                            @endif




                            <td class="d-flex  justify-content-center">
                                @if (!($editServicesId === $service->id))
                                    <x-actions preview data-target="#Servicepreview{{ $service->id }}"
                                        data-toggle="modal"></x-actions>


                                    <x-modal width='lg' idName="Servicepreview{{ $service->id }}" footer>


                                        <livewire:CitzenServices.Details :id="$service->id">
                                        </livewire:CitzenServices.Details>

                                    </x-modal>


                                    <x-actions edit wire:loading.attr='disabled'
                                        wire:click.prevent='edit({{ $service->id }})'></x-actions>
                                    
                                    <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                        wire:confirm.prompt="{{ __('customTrans.please insert num of services for del') }}\n|{{ $service->num }}"
                                        wire:click.prevent='destroy({{ $service->id }})'> <i
                                            class="ti-trash text-danger"></i>
                                    </a>
                                @else
                                    <x-actions make wire:loading.attr='disabled'
                                        wire:click.prevent='update'></x-actions>
                                    <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>
                                @endif




                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{-- {{ $this->services->links() }} --}}
        </div>
    </div>

    {{-- SM mobile view --}}
    <div class="bg-light  d-block d-sm-none " role="region" aria-labelledby="Cap1" tabindex="0">
        <table class=" table hover" id="mytable2">


            <tr>
                <th> {{ __('customTrans.service num') }} </th>
                <th> {{ __('customTrans.service name') }} </th>
                <th> الترتيب </th>
                <th> {{ __('customTrans.activation') }} </th>

                <th> {{ __('customTrans.active_from_date') }} </th>
                <th> {{ __('customTrans.active_to_date') }} </th>

                <th> {{ __('customTrans.url_active_from_date') }}</th>
                <th>{{ __('customTrans.url_active_to_date') }} </th>

                <th>{{ __('customTrans.services Responsible') }}</th>
                <th>{{ __('customTrans.url service') }}</th>
                <th>{{ __('customTrans.route_name') }}</th>
                <th>{{ __('customTrans.description') }}</th>
                <th>{{ __('customTrans.note') }}</th>
                <th>{{ __('customTrans.home_page_order') }}</th>
                <th>{{ __('customTrans.teal') }}</th>
                <th>{{ __('customTrans.deactive_note') }}</th>

                <th>{{ __('customTrans.services conditions') }}</th>
                <th>{{ __('customTrans.actions') }}</th>


            </tr>


            <tr>
                @foreach ($this->services as $key => $service)
                    <td> {{ $service->num }} </td>



                    @if ($editServicesId === $service->id)
                        {{ $service->name }}
                    @else
                        <td>{{ $service->name }}</td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td>
                            <input wire:model='home_page_order' name='home_page_order' placeholder="..."
                                class="form-control bg-white">
                        </td>
                    @else
                        <td>{{ $service->home_page_order }}</td>
                    @endif



                    @if ($editServicesId === $service->id)
                        <td>
                            <select wire:model="active" class="form-control bg-white ">

                                <option value="1">{{ __('customTrans.active') }}</option>
                                <option value="0">{{ __('customTrans.not active') }}</option>
                            </select>
                        </td>
                    @else
                        <td @class([
                            '',
                            'text-danger' => $service->active == 0,
                            'text-success' => $service->active == 1,
                        ])>

                            {{ $service->active == 1 ? __('customTrans.active') : __('customTrans.not active') }}



                        </td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td> <x-input type='date' wire:model="active_from_date" name="active_from_date"
                                divWidth="12"></x-input> </td>
                    @else
                        <td>{{ myDateStyle1($service->active_from_date) }}</td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td> <x-input type='date' wire:model="active_to_date" name="active_to_date"
                                divWidth="12"></x-input> </td>
                    @else
                        <td>{{ myDateStyle1($service->active_to_date) }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td> <x-input type='date' wire:model="url_active_from_date" name="url_active_from_date"
                                divWidth="12"></x-input> </td>
                    @else
                        <td>{{ myDateStyle1($service->url_active_from_date) }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td> <x-input type='date' wire:model="url_active_to_date" name="url_active_to_date"
                                divWidth="12"></x-input> </td>
                    @else
                        <td>{{ myDateStyle1($service->url_active_to_date) }}</td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td>
                            <x-input wire:model='Responsible' name='Responsible' divWidth='8'
                                placeholder="..."></x-input>
                        </td>
                    @else
                        <td>{{ $service->Responsible }}</td>
                    @endif




                    @if ($editServicesId === $service->id)
                        <td>

                            <x-input wire:model='url' name='url' divWidth='8'></x-input>
                        </td>
                    @else
                        <td>{{ $service->url }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td>

                            <x-input wire:model='route_name' name='route_name' divWidth='5'></x-input>
                        </td>
                    @else
                        <td>{{ $service->route_name }}</td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td>
                            <x-textarea wire:model='description' name='description' divWidth='6'
                                rows='4'></x-textarea>
                        </td>
                    @else
                        <td>{{ $service->description }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td>

                            <x-textarea wire:model='note' name='note' :labelname="__('customTrans.note')" divWidth='6'
                                rows='4'></x-textarea>
                        </td>
                    @else
                        <td>{{ $service->note }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td>

                            <x-input type="number" min="0" wire:model='home_page_order'
                                name='home_page_order' :labelname="__('customTrans.home_page_order')" divWidth='6'></x-input>
                        </td>
                    @else
                        <td>{{ $service->home_page_order }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td>

                            <x-input wire:model='teal' name='teal' :labelname="__('customTrans.teal')" divWidth='6'></x-input>
                        </td>
                    @else
                        <td>{{ $service->teal }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td>

                            <x-textarea wire:model='deactive_note' name='deactive_note' :labelname="__('customTrans.deactive_note')"
                                divWidth='6' rows='4'></x-textarea>
                        </td>
                    @else
                        <td>{{ $service->deactive_note }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td>


                            <div class="col-lg-6 col-md-9 col-sm-12">
                                <textarea wire:model='conditions' name="conditions" class="form-control" data-provide="markdown" rows="10"></textarea>
                            </div>


                        </td>
                    @else
                        <td>{{ $service->conditions }}</td>
                    @endif



                    <td class=" d-flex  justify-content-center">


                        @if (!($editServicesId === $service->id))
                            <x-actions edit wire:loading.attr='disabled'
                                wire:click.prevent='edit({{ $service->id }})'></x-actions>

                            {{-- <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                wire:confirm.prompt="{{ __('customTrans.please insert num of services for del') }}\n|{{ $service->num }}"
                                wire:click.prevent='destroy({{ $service->id }})'> <i
                                    class="ti-trash text-danger"></i>
                            </a> --}}
                        @else
                            <x-actions make wire:loading.attr='disabled' wire:click.prevent='update'></x-actions>
                            <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>
                        @endif






                    </td>
                @endforeach
            </tr>

        </table>

    </div>



    @push('js')
        <script src="{{ asset('template-assets/myTableResponsive.js') }}"></script>
    @endpush

</div>
