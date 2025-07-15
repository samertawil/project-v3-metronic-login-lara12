<div>
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/my-css/select2.min.css') }}">
    @endpush

    <p class="card-header"> </p>

    @can('neighbourhood.create')
        <div>

            <form wire:submit="store">

                <div class="d-flex border align-items-center p-2 ">

                    <x-input name="neighbourhood_name" wire:model="neighbourhood_name" label="yes"></x-input>

                    <x-select name="city_id" :options="$cities->pluck('city_name', 'city_id')" wire:model="city_id" label="yes"></x-select>

                </div>

                <x-saveClearbuttons></x-saveClearbuttons>

            </form>

        </div>
    @endcan

    @can('neighbourhood.index')

        <x-search-index-section>

            <x-select :options="$regions->pluck('region_name', 'id')" name="region_id" wire:model.live="regionIdSearch"></x-select>


            <x-select name="cityIdSearch" :options="$cities->pluck('city_name', 'city_id')" wire:model.live="cityIdSearch"></x-select>

        </x-search-index-section>


        <div class="table-responsive ">
            <div id="cityTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="cityTable"
                    role="grid" aria-describedby="neighbourhoodTable">

                    <thead>
                        <th>#</th>
                        <x-table-th wire:click="setSortBy('neighbourhood_name')" name="neighbourhood_name"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('region_name')" name="region_name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('city_name')" name="city_name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>


                        <th>{{ __('customTrans.actions') }}</th>

                    </thead>
                    <tbody>

                        @foreach ($neighbourhoods as $key => $neighbourhood)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                @if ($editNeighbourhoodId === $neighbourhood->neighbourhood_id)
                                    <td><x-input wire:model='editNeighbourhoodName' name='editNeighbourhoodName'
                                            divWidth='10'></x-input></td>
                                @else
                                    <td>{{ $neighbourhood->neighbourhood_name }}</td>
                                @endif

                                    <td>{{ $neighbourhood->region_name }}</td>
                             
                                @if ($editNeighbourhoodId === $neighbourhood->neighbourhood_id)
                                    <td>
                                        <x-select :options="$cities->pluck('city_name', 'city_id')" name="cityIdUpdate" wire:model="cityIdUpdate"
                                            divWidth='10'></x-select>
                                    </td>
                                @else
                                    <td>{{ $neighbourhood->city_name }}</td>
                                @endif



                                <td class="d-flex  justify-content-center align-items-center">



                                    @if (!($editNeighbourhoodId === $neighbourhood->neighbourhood_id))
                                        @can('neighbourhood.update')
                                            <x-actions edit
                                                wire:click.prevent='edit({{ $neighbourhood->neighbourhood_id }})'></x-actions>
                                        @endcan
                                        @can('neighbourhood.delete')
                                            <x-actions del
                                                wire:click.prevent='destroy({{ $neighbourhood->neighbourhood_id }})'></x-actions>
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
                {{ $neighbourhoods->links(data: ['scrollTo' => '#collapse-neighbourhood']) }}
            </div>


        </div>
    @endcan

    @push('js')
        <script src="{{ asset('assets/my-js/select2.min.js') }}"></script>

        <script>
            window.addEventListener('showModal', event => {
                $('#neighbourhoodModal').modal('show');
                $('.js-select2').select2({
                    width: '100%'
                });
            });
        </script>
    @endpush
</div>
