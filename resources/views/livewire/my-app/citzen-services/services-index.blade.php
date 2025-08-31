<div>


    <x-slot:crumb>
        <x-breadcrumb>

            <li class="breadcrumb-item"><a href="{{ route('app.citzen.services.index') }}"
                    class="text-muted">{{ __('customTrans.services index') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('app.citzen.services.create') }}"
                    class="text-muted">{{ __('customTrans.services resource') }} </a></li>

        </x-breadcrumb>

    </x-slot:crumb>




 
    <div class="table-responsive">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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

                        <x-table-th wire:click="setSortBy('url_active_from_date')" name="url_active_from_date"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('url_active_to_date')" name="url_active_to_date"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>


                        <th class="text-center"> <span>{{ __('customTrans.actions') }}</span></th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($this->services as $key => $service)

                        <tr class="main-row" wire:key="card-{{ $service->id }}">
                            

                            <td> {{ $service->num }} </td>

                       
                                <td>{{ $service->name }}</td>
                      
                         
                                <td>{{ $service->home_page_order }}</td>
                          

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
                          
                                <td>{{ $service->url_active_from_date }}</td>
                         
                                <td>{{ $service->url_active_to_date }}</td>
                          

                            <td class="d-flex  justify-content-center">
                              
                                    <x-actions preview data-target="#Servicepreview{{ $service->id }}"
                                        data-toggle="modal"></x-actions>


                                    <x-modal width='lg' idName="Servicepreview{{ $service->id }}" title="بيانات الخدمة" >


                                      <livewire:MyApp.CitzenServices.ServicesShow :id="$service->id">
                                        </livewire:MyApp.CitzenServices.ServicesShow> 

                                    </x-modal>


                                    <x-actions edit wire:loading.attr='disabled'
                                        wire:click.prevent='edit({{ $service->id }})'></x-actions>
                                    
                                    <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                        wire:confirm.prompt="{{ __('customTrans.please insert num of services for del') }}\n|{{ $service->num }}"
                                        wire:click.prevent='destroy({{ $service->id }})'> <i
                                            class="ti-trash text-danger"></i>
                                    </a>
                              
                            </td>

                        </tr>

                       
                    @endforeach
                </tbody>

            </table>
            {{-- {{ $this->services->links() }} --}}
        </div>
    </div>
 


</div>
