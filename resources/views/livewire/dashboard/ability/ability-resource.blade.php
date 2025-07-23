<div>


    <x-slot:crumb>

        <x-breadcrumb button data-target="#abilityCreateModel1" data-toggle="modal" :label="__('customTrans.create ability')">
           
                <li class="breadcrumb-item"><a href="{{route('user.index')}}" class="text-muted">{{__('customTrans.users')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('ability.index')}}" class="text-muted">{{__('customTrans.abilities')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('role.index')}}" class="text-muted">{{__('customTrans.role group')}} </a></li>
         
        </x-breadcrumb>

    </x-slot:crumb>



    <x-modal idName="abilityCreateModel1" width="xl" :title="__('customTrans.create ability')" footer>
        <livewire:dashboard.ability.ability-create></livewire:dashboard.ability.ability-create>

    </x-modal>


    <x-search-index-section>

        <x-select divWidth="3"  :options="$this->moduleNames->pluck('name', 'id')" wire:model.live="searchModuleId"
            ChoseTitle="all system"></x-select>

    </x-search-index-section>




    <div class="table-responsive">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th><span>#</span></th>

                        <x-table-th wire:click="setSortBy('ability_name')" name="ability_name"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('ability_description')" name="ability_description"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>


                        <x-table-th wire:click="setSortBy('activation')" name="activation" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>


                            <x-table-th wire:click="setSortBy('module_id')" name="module_id" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <th class="text-center">{{ __('customTrans.actions') }}</th>
                    </tr>
                </thead>
                <tbody>



                    @foreach ($this->abilities as $key => $ability)
                    <td>{{ ($this->abilities->currentPage() - 1) * $this->abilities->perPage() + $key + 1 }}</td>


                        <td>{{ $ability->ability_name }}</td>


                        @if ($editAbilityId === $ability->id)
                            <td>
                                <x-input wire:model='editAbilityDescription' name='editAbilityDescription'
                                    divWidth="12"></x-input>
                            </td>
                        @else
                            <td>{{ $ability->ability_description }}</td>
                        @endif



                        @if ($editAbilityId === $ability->id)
                            <td>

                                <select wire:model="editAbilityActivation" class="form-control bg-white">

                                    <option value="1">{{ __('customTrans.active') }}</option>
                                    <option value="0">{{ __('customTrans.not active') }}</option>
                                </select>
                                
                            </td>
                        @else
                            <td @class([
                                '',
                                'text-success' => $ability->activation == 1,
                                'text-danger' => $ability->activation == 0,
                            ])>
                                <div @class([
                                    'bg-success dot-label ' => $ability->activation == 1,
                                    'bg-danger dot-label ' => $ability->activation == 0,
                                ])></div>

                                {{ $ability->activation == 1 ? __('customTrans.active') : __('customTrans.not active') }}
                            </td>
                        @endif

                        @if ($editAbilityId === $ability->id)
                            <td>
                                <x-select wire:model="editAbilityModuleId" divWidth="12" :options="$this->moduleNames->pluck('name', 'id')" />
                            </td>
                        @else
                            <td>{{ $ability->module_name->name ?? '' }}</td>
                        @endif

                        @if (!($editAbilityId === $ability->id))
                            <td class="d-flex justify-content-center">
                                <x-actions preview data-target="#abilityPreview1" data-toggle="modal"></x-actions>

                                <x-actions edit wire:click.prevent='edit({{ $ability->id }})'></x-actions>

                                <x-actions del wire:click.prevent='destroy({{ $ability->id }})'></x-actions>

                                <x-modal idName="abilityPreview1">

                                    {{ __('customTrans.url') }} : {{ $ability->url }}</br>
                                    {{ __('customTrans.created_at') }} : {{ myDateStyle1($ability->created_at) }}

                                </x-modal>
                            </td>
                        @else
                            <td class="d-flex justify-content-center">

                                <x-actions preview data-target="#abilityPreview1" data-toggle="modal"></x-actions>

                                <x-modal idName="abilityPreview1">
                                    @if ($editAbilityId === $ability->id)
                                        <x-input wire:model='editAbilityUrl' label labelname="الرابط"
                                            name='editAbilityUrl' divWidth="12"></x-input>
                                    @endif
                                </x-modal>

                                <x-actions make wire:click.prevent='update'></x-actions>
                                <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>

                            </td>
                        @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $this->abilities->links() }}
        </div>

    </div>


</div>
