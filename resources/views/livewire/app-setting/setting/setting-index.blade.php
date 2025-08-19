<div>

    <x-slot:crumb>

        <x-breadcrumb button data-target="#SettingCreateModel1" data-toggle="modal" :label="__('customTrans.create_new_setting')">

            <li class="breadcrumb-item"><a href="" class="text-muted">Apps </a></li>
            <li class="breadcrumb-item"><a href="" class="text-muted">profile </a></li>

        </x-breadcrumb>

    </x-slot:crumb>


    @push('css')
    @endpush

    <x-modal idName="SettingCreateModel1" :title="__('customTrans.create_new_setting')" footer>
        <livewire:app-setting.Setting.setting-create />
    </x-modal>



    <div class="table-responsive">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th><span>#</span></th>

                        <x-table-th wire:click="setSortBy('key')" name="key" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('value')" name="value" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <th name="value_array">{{ __('customTrans.value_array') }}</th>

                        <th name="description">{{ __('customTrans.description') }}</th>

                        <th name="notes">{{ __('customTrans.notes') }}</th>


                        <th class="text-center">{{ __('customTrans.actions') }}</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($settings as $key => $setting)
                        <td>{{ $key + 1 }} </td>


                        @if ($editSettingId === $setting->id)
                            <td>
                                <input wire:model='key' placeholder="..." class="form-control bg-white">
                            </td>
                        @else
                            <td>{{ $setting->key }}</td>
                        @endif

                        @if ($editSettingId === $setting->id)
                            <td>
                                <input wire:model='value' placeholder="..." class="form-control bg-white">
                            </td>
                        @else
                            <td>{{ $setting->value }}</td>
                        @endif

                        @if ($setting->value_array)
                            <td  class="">
                               
                                    @foreach ($setting->value_array as $key=>$value)
                                    <div class="d-flex align-items-center">
                                        <div>{{ $value }}</div>
                                       
                                        <x-actions del wire:loading.attr='disabled'
                                        wire:click.prevent='destroyValueArray({{ $setting->id }},{{$key}})'></x-actions>
                                    </div>
                                    @endforeach
                              
                            </td>
                        @else
                            <td class="">----</td>
                        @endif




                        @if ($editSettingId === $setting->id)
                            <td>
                                <input wire:model='description' placeholder="..." class="form-control bg-white">
                            </td>
                        @else
                            <td>{{ $setting->description }}</td>
                        @endif


                        @if ($editSettingId === $setting->id)
                            <td>
                                <input wire:model='notes' placeholder="..." class="form-control bg-white">
                            </td>
                        @else
                            <td>
                                {{ $setting->notes }}</td>
                            </td>
                        @endif

                        <td class="d-flex  justify-content-center">
                            @if (!($editSettingId === $setting->id))
                                <x-actions edit wire:loading.attr='disabled'
                                    wire:click.prevent='edit({{ $setting->id }})'></x-actions>

                                <x-actions del wire:loading.attr='disabled'
                                    wire:click.prevent='destroy({{ $setting->id }})'></x-actions>
                            @else
                                <x-actions make wire:loading.attr='disabled' wire:click.prevent='update'></x-actions>
                                <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>
                            @endif



                        </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- {{ $settings->links() }} --}}
        </div>

    </div>


</div>
