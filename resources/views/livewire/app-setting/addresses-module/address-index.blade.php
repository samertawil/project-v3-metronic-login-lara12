<div>
 
    <x-slot:crumb>
        <x-breadcrumb></x-breadcrumb>
    </x-slot:crumb>

    <div class="row  m-auto" id="indexId">

        <div class="col-lg-12">

            <div class="d-flex align-items-center justify-content-end">
                
                @can('region.index')
                <x-button class="btn-light-info "  data-target="#regionModal" data-toggle="modal" label="regionModal"  ></x-button>
                @endcan
                @can('city.index')
                <x-button class="btn-light-info mx-2" data-target="#cityModal" data-toggle="modal"  label="cityModal" ></x-button>
                @endcan
                @can('neighbourhood.index')
                <x-button class="btn-light-info mx-2" data-target="#neighbourhoodModal" data-toggle="modal" label="neighbourhoodModal" ></x-button>
                @endcan
                @can('location.index')
                <x-button class="btn-light-info" data-target="#locationModal" data-toggle="modal" label="locationModal"></x-button>
                @endcan
            </div>
 

          
                
         
 
    <x-modal idName="regionModal" width="xl" title='ادارة المحافظات'>

        <livewire:AppSetting.AddressesModule.RegionResource></livewire:AppSetting.AddressesModule.RegionResource> 

    </x-modal>


     
    <x-modal idName="cityModal" width="xl" title='ادارة المدن'>

        <livewire:AppSetting.AddressesModule.CityResource></livewire:AppSetting.AddressesModule.CityResource> 

    </x-modal>



    <x-modal idName="neighbourhoodModal" width="xl" title='ادارة الاحياء'>

        <livewire:AppSetting.AddressesModule.NeighbourhoodResource></livewire:AppSetting.AddressesModule.NeighbourhoodResource> 

    </x-modal>



    <x-modal idName="locationModal" width="xl" title='ادارة المعالم'>

        <livewire:AppSetting.AddressesModule.LocationResource></livewire:AppSetting.AddressesModule.LocationResource> 

    </x-modal>



            <div class="card custom-card">

                <div class="card-body ">

                    <section class="container my-2">

                        <x-search-index-section>

                            <x-select class="js-select2"  jsSelect2 :options="$this->regions->pluck('region_name', 'region_id')" name="regionIdSearch"
                                wire:model.live="regionIdSearch" divWidth="2"   ></x-select>

                            <x-select name="cityIdSearch" class="js-select2" jsSelect2  :options="$this->cities->pluck('city_name', 'city_id')"
                                wire:model.live="cityIdSearch" divWidth="2"  ></x-select>



                            <x-select name="neighbourhoodIdSearch" class="js-select2"  jsSelect2
                                :options="$this->neighbourhoods->pluck('neighbourhood_name', 'neighbourhood_id')" wire:model.live="neighbourhoodIdSearch" ></x-select>




                        </x-search-index-section>


                        <div class="table-responsive ">
                            <div id="cityTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable"
                                    id="cityTable" role="grid" aria-describedby="neighbourhoodTable">

                                    <thead>
                                        <th>#</th>
                                        <x-table-th wire:click="setSortBy('location_name')" name="location_name"
                                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                                        <x-table-th wire:click="setSortBy('region_name')" name="region_name"
                                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>



                                        <x-table-th wire:click="setSortBy('city_name')" name="city_name"
                                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                                        <x-table-th wire:click="setSortBy('neighbourhood_name')"
                                            name="neighbourhood_name" sortBy={{ $sortBy }}
                                            sortdir={{ $sortdir }}></x-table-th>

                                   

                                    </thead>
                                    <tbody>

                                        @foreach ($this->locations as $key => $location)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>

                                                <td>{{ $location->location_name }}</td>

                                                <td>{{ $location->region_name }}</td>

                                                <td>{{ $location->city_name }}</td>

                                                <td>{{ $location->neighbourhood_name }}</td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $this->locations->links(data: ['scrollTo' => '#indexId']) }}
                            </div>
                        </div>


                    </section>

                </div>





            </div>
        </div>
    </div>
 


</div>
