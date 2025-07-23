<div>


    <x-slot:crumb>

        <x-breadcrumb button :route="route('role.create')" :label="__('customTrans.create new role')">
         
                <li class="breadcrumb-item"><a href="{{route('dashboard.user.index')}}" class="text-muted">{{__('customTrans.users')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('ability.index')}}" class="text-muted">{{__('customTrans.abilities')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('role.index')}}" class="text-muted">{{__('customTrans.role group')}} </a></li>
        

        </x-breadcrumb>

    </x-slot:crumb>



    <div wire:offline>
        <div class="alert" role="alert" style="background-color: #fefe5c;">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>تحذير!</strong> انت الان خارج نطاق الانترنت.
        </div>
    </div>


    <x-search-index-section> </x-search-index-section>

    {{-- @can('role.index') --}}


    <div class="table-responsive">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th>#</th>

                        <x-table-th wire:click="setSortBy('name')" name="name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.group name')" ></x-table-th>

                        <th >{{ __('customTrans.abilities') }}</th>

                        <th class="text-center">{{ __('customTrans.actions') }}</th>
                    </tr>
                </thead>
                <tbody >


                    <tr>
                        @foreach ($roles as $key => $role)
                            <td >{{ $key + 1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td >{{ implode(',', $role->abilities_description) }}</td>


                            <td class="d-flex align-items-center justify-content-center">

                                <x-actions preview data-target="#roleGroupPreview{{ $role->id }}"
                                    data-toggle="modal"></x-actions>
                                {{-- @can('role.update') --}}
                                <x-actions edit :route="route('role.edit', $role->id)"></x-actions>
                                {{-- @endcan --}}

                                <x-modal idName="roleGroupPreview{{ $role->id }}"
                                    modalType="modal-dialog-scrollable" :title="$role->name">
                                   {{__('customTrans.created_at')}} : {{ myDateStyle1($role->created_at) }} </br>
                                    </br>
                                    @foreach ($role->abilities as $abilities)
                                        <li class="m-1">{{ $abilities }}</li>
                                    @endforeach
                                    <div class="dropdown-divider m-0"></div>
                                    @foreach ($role->abilities_description as $abilities_description)
                                        <li class="m-1">{{ $abilities_description }}</li>
                                    @endforeach

                                </x-modal>

                                {{-- @can('role.delete') --}}
                                <x-actions del wire:click="destroy({{ $role->id }})"></x-actions>
                                {{-- @endcan --}}


                            </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $roles->links() }}

        </div>

    </div>

    {{-- @endcan --}}


</div>


 
