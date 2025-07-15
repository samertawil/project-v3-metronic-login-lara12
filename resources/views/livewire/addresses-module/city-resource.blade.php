<div>
    <p class="card-header"> </p>

    @can('city.create')
        <div>

            <form wire:submit="store">

                <div class="d-flex border align-items-center p-2 ">

                    <x-input name="city_name" wire:model="city_name" label="yes"></x-input>

                    <x-select :options="$regions->pluck('region_name', 'region_id')" name="region_id" wire:model="region_id" label="yes"></x-select>


                </div>

                <x-saveClearbuttons></x-saveClearbuttons>

            </form>

        </div>
    @endcan
    @can('city.index')
        <x-search-index-section>

            <x-select :options="$regions->pluck('region_name', 'region_id')" name="regionIdSearch" wire:model.live="regionIdSearch"></x-select>

        </x-search-index-section>

        <div class="table-responsive ">
            <div id="cityTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable w-md-75 "
                    id="cityTable" role="grid" aria-describedby="cityTable">
                    <thead>
                        <th>#</th>
                        <th>{{ __('customTrans.city_name') }}</th>
                        <th>{{ __('customTrans.region_name') }}</th>
                        <th>{{ __('customTrans.actions') }}</th>
                    </thead>
                    <tbody>

                        @foreach ($cities as $key => $city)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                @if ($cityId == $city->city_id)
                                    <td> <x-input wire:model='editCityName' name='editCityName' divWidth='10'> </x-input>
                                    </td>
                                @else
                                    <td>{{ $city->city_name }}</td>
                                @endif

                                @if ($cityId == $city->city_id)
                                    <td>
                                        <x-select :options="$regions->pluck('region_name', 'region_id')" name="regionIdUpdate" wire:model="regionIdUpdate"
                                            divWidth='10'></x-select>
                                    </td>
                                @else
                                    <td>{{ $city->region_name }}</td>
                                @endif

                                <td class="d-flex  justify-content-center align-items-center">
                                    @if (!($cityId == $city->city_id))
                                        @can('city.update')
                                            <x-actions edit wire:click.prevent='edit({{ $city->city_id }})'></x-actions>
                                        @endcan
                                        @can('city.delete')
                                            <x-actions del wire:click.prevent='destroy({{ $city->city_id }})'></x-actions>
                                        @endcan
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
                {{ $cities->links(data: ['scrollTo' => '#collapse-city']) }}

            </div>

        </div>
    @endcan
</div>
