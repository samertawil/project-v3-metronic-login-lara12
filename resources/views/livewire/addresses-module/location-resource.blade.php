<div>
    <p class="card-header"> </p>



    <form wire:submit="store">

        <div class="d-flex border  align-items-center p-2 " id="address-cont">



            <x-input name="location_name" wire:model="location_name" label="yes"></x-input>

            <x-select class=" js-select2-address setDataSelect" wireIgone jsSelect2 divId="regionDivId" :options="$cities->pluck('region_name', 'region_id')"
                name="region_id" id="region_id" wire:model="region_id" label="yes" :dataUrl="route('address.api.create')"
                wire:ignore></x-select>


            <x-select class=" js-select2-address setDataSelect" wireIgone jsSelect2 id="city_id" name="city_id"
                wire:model="city_id" label="yes" wire:ignore></x-select>


            <x-select class=" setDataSelect" wireIgone jsSelect2 id="neighbourhood_id" name="neighbourhood_id"
                wire:model="neighbourhood_id" label="yes" wire:ignore></x-select>



        </div>


        <x-saveClearbuttons></x-saveClearbuttons>

    </form>

    <x-search-index-section>

        <x-select :options="$regions->pluck('region_name', 'region_id')" name="regionIdSearch" wire:model.live="regionIdSearch" divWidth="2"></x-select>

        <x-select name="cityIdSearch" :options="$cities->pluck('city_name', 'city_id')" wire:model.live="cityIdSearch" divWidth="2"></x-select>



        <x-select name="neighbourhoodIdSearch" :options="$neighbourhoods->pluck('neighbourhood_name', 'neighbourhood_id')" wire:model.live="neighbourhoodIdSearch"></x-select>




    </x-search-index-section>


    <div class="table-responsive ">
        <div id="cityTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="cityTable"
                role="grid" aria-describedby="neighbourhoodTable">

                <thead>
                    <th>#</th>
                    <x-table-th wire:click="setSortBy('location_name')" name="location_name" sortBy={{ $sortBy }}
                        sortdir={{ $sortdir }}></x-table-th>

                    <x-table-th wire:click="setSortBy('region_name')" name="region_name" sortBy={{ $sortBy }}
                        sortdir={{ $sortdir }}></x-table-th>



                    <x-table-th wire:click="setSortBy('city_name')" name="city_name" sortBy={{ $sortBy }}
                        sortdir={{ $sortdir }}></x-table-th>

                    <x-table-th wire:click="setSortBy('neighbourhood_name')" name="neighbourhood_name"
                        sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                    <th>{{ __('customTrans.actions') }}</th>

                </thead>
                <tbody>

                    @foreach ($locations as $key => $location)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            
                            @if ($editLocationId === $location->location_id)
                                <td><x-input wire:model="editLocationName" name="editLocationName"
                                        divWidth="12"></x-input> </td>
                            @else
                                <td>{{ $location->location_name }}</td>
                            @endif

                         
                                <td>{{ $location->region_name }}</td>
                    
                        
                                <td>{{ $location->city_name }}</td>
                        

                            @if ($editLocationId === $location->location_id)
                                <td><x-select wire:model="editNeighbourhoodId" name="editNeighbourhoodId"
                                        :options="$locations->pluck('neighbourhood_name', 'neighbourhood_id')" divWidth="12"></x-select></td>
                            @else
                                <td>{{ $location->neighbourhood_name }}</td>
                            @endif





                            <td class="d-flex  justify-content-center align-items-center">
                                @if (!($editLocationId === $location->location_id))
                                    <x-actions edit
                                        wire:click.prevent='edit({{ $location->location_id }})'></x-actions>
                                    <x-actions del
                                        wire:click.prevent='destroy({{ $location->location_id }})'></x-actions>
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
            {{ $locations->links(data: ['scrollTo' => '#indexId']) }}
        </div>
    </div>


    @push('js')
        <script src="{{ asset('assets/my-js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/my-js/blockui.js') }}"></script>

        <script src="{{ asset('assets/my-js/apiAddress.js') }}"></script>

        <script>
            $('.setDataSelect').on('change', function(event) {
                let modelName = $(this).attr('name');

                @this.set(modelName, event.target.value);
            })
        </script>

        <script>
            window.addEventListener('reset-items', event => {
                $('.js-select2').val(null).trigger('change');

            })
        </script>
    @endpush

</div>
