<div>


    <x-search-index-section></x-search-index-section>

    <div id="collapse-system" class="collapse show" aria-labelledby="heading-system">
        <p class="card-header"> </p>





        <div class="container">
            <table class="table  my-5">
                <thead>
                    <th>#</th>

                    <x-table-th wire:click="setSortBy('name')" name="name" sortBy={{ $sortBy }}
                        sortdir={{ $sortdir }}>{{ __('customTrans.module_name') }}</x-table-th>

                    <x-table-th wire:click="setSortBy('active')" name="active" sortBy={{ $sortBy }}
                        sortdir={{ $sortdir }}>{{ __('customTrans.activation') }}</x-table-th>

                    <th>{{ __('customTrans.description') }}</th>
                    <th class="text-center">{{ __('customTrans.actions') }}</th>

                </thead>
                <tbody>

                    @foreach ($this->ModuleNames as $key => $module_data)
                        <tr class="align-items-center">
                            <td>{{ $key + 1 }}</td>
                            @if ($this->editId == $module_data->id)
                                <td> <x-input wire:model='name' name='name' divWidth="8"></x-input></td>
                            @else
                                <td>{{ $module_data->name }}</td>
                            @endif


                            @if ($this->editId == $module_data->id)
                                <td>
                                    <select wire:model="active" name='active' class="form-control bg-white mt-3">

                                        <option value="1">{{ __('customTrans.active') }}</option>
                                        <option value="0">{{ __('customTrans.not active') }}</option>
                                    </select>
                                    <label for="">

                                    </label>
                                </td>
                            @else
                                <td @class ([
                                    'text-success' => ($module_data->active == '1'),
                                    'text-danger' => ($module_data->active == "0"),
                                ])>
                                    {{ $module_data->active == '1' ? __('customTrans.active') : __('customTrans.not active') }}
                                </td>
                            @endif

                            @if ($this->editId == $module_data->id)
                                <td>
                                    <x-input wire:model='description' name='description' divWidth="8"></x-input>
                                </td>
                            @else
                                <td>{{ $module_data->description }}</td>
                            @endif
                            
                        @if (!($this->editId === $module_data->id))
                            <td class="d-flex  justify-content-center">

                                <x-actions edit wire:click.prevent='edit({{ $module_data->id }})'></x-actions>
                                <x-actions del wire:click.prevent='destroy({{$module_data->id}})'></x-actions>

                            </td>
                            @else
                            <td class="d-flex justify-content-center">

                                                     
                                <x-actions make wire:click.prevent='update'></x-actions>
                                <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>

                            </td>
                            @endif

                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
   
</div>
