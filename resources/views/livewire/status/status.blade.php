<div>
 
    <x-slot:crumb>

        <x-breadcrumb ></x-breadcrumb>

    </x-slot:crumb>

 
    <div class="row  m-auto">
        <div class="col-lg-12">
            <div class="card custom-card card-none-shadow">

                <div class="card-body ">

                    <section class="container my-2">

                        <a data-toggle="collapse" href="#collapse-system" aria-expanded="true"
                            aria-controls="collapse-system" id="heading-system" class="d-block ">
                            <i class="fa fa-chevron-down pull-right mx-2 "></i>
                            {{ __('customTrans.module_createion_name') }}
                        </a>

 
                              <livewire:StatusModule.SystemClass   ></livewire:StatusModule.SystemClass>
 
 
                        <form wire:submit="store">

                          

                            <div class="mt-4"></div>
                            <a data-toggle="collapse" href="#collapse-status" aria-expanded="true"
                                aria-controls="collapse-status" id="heading-status" class="d-block ">
                                <i class="fa fa-chevron-down pull-right mx-2 "></i>
                                {{ __('customTrans.create_new_status') }}
                            </a>
                            <div id="collapse-status" class="collapse show" aria-labelledby="heading-status">
                                <p class="card-header"> </p>

                                <div class="container row justify-content-evenly align-items-center  p-3 "
                                    style="border : 1px solid #dee2e6 ;   ">



                                    <x-input name="status_name" wire:model="status_name" label="yes"></x-input>


                                  
                                    <x-select name="p_id_sub"  label="yes"    wire:model='p_id_sub'
                                        :options="$this->statusesAll->whereNull('p_id_sub')->pluck('status_name', 'id')" ></x-select>
                                        
                        
                                    <x-select name="used_in_system_id" wire:model="used_in_system_id" label="yes"
                                         :options="$this->systems_data->pluck('system_name', 'id')"></x-select>


                                    <x-input name="description" wire:model="description" label="yes"></x-input>


                                    <x-input name="page_name" wire:model="page_name" label="yes"></x-input>


                                    <x-input name="route_system_name" wire:model="route_system_name" label="yes"
                                        ></x-input>


                                    <x-input name="route_name" wire:model="route_name" label="yes"
                                      ></x-input>

                                    <div id="scrollToHere"></div>
                                </div>
                                <div class="d-flex justify-content-start" dir="ltr">
                                    <x-button type="submit"></x-button>
                                 
                                </div>

                        </form>
                </div>

                </section>

                <x-search-index-section>
              
                    <div class="col-sm-12 col-md-3"  >
                        <x-select id="id1" :options="$this->statusesAll->whereNull('p_id_sub')->pluck('status_name', 'id')" 
                          
                             divWidth="12"
                            
                            wire:model.live='PidSearch' ></x-select>
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <x-select  name="SystemName" :options="$this->systems_data->pluck('system_name', 'id')" 
                           
                             divWidth="12"
                           
                            wire:model.live='SystemName'></x-select>
                    </div>

                </x-search-index-section>



                <div class="table-responsive" id="table">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable"
                            id="example2" role="grid" aria-describedby="example2_info">
                            <thead>
                                <th>#</th>

                                <x-table-th wire:click="setSortBy('status_name')"  
                                    name="status_name" sortBy={{ $sortBy }}
                                    sortdir={{ $sortdir }}></x-table-th>

                              
                                <x-table-th wire:click="setSortBy('p_id_sub')"  
                                    name="p_id_sub" sortBy={{ $sortBy }}
                                    sortdir={{ $sortdir }}></x-table-th>

                                <x-table-th wire:click="setSortBy('used_in_system_id')"  
                                    name="used_in_system_id" sortBy={{ $sortBy }}
                                    sortdir={{ $sortdir }}></x-table-th>

                                <th class="text-center">{{__('customTrans.actions')}}</th>
                            </thead>
                            <tbody>

                                @foreach ($this->statuses as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>

                                        @if ($editStatusId === $data->id)
                                            <td> <x-input wire:model='StatusName' name='StatusName'
                                                    divWidth="10"></x-input></td>
                                        @else
                                            <td>{{ $data->status_name }}</td>
                                        @endif


                                        {{-- <td>{{ $data->status_p_id->status_name ?? '//' }}</td> --}}

                                        @if ($editStatusId === $data->id)
                                            <td>
                                                <x-select wire:model='statusPid' :options="$this->statusesAll->whereNull('p_id_sub')
                                               ->pluck('status_name', 'id')"
                                                    divWidth="10"></x-select>

                                            </td>
                                        @else
                                            <td>{{ $data->status_p_id_sub->status_name ?? '//' }}</td>
                                        @endif

                                        @if ($editStatusId === $data->id)
                                            <td>
                                                <x-select wire:model='usedInSystem' :options="$this->systems_data->pluck('system_name', 'id')"
                                                    divWidth="10"></x-select>

                                            </td>
                                        @else
                                            <td>{{ $data->systemname->system_name ?? '' }}</td>
                                        @endif

                                        <td class="d-flex  justify-content-center">
                                            @if (!($editStatusId === $data->id))
                                                <x-actions edit
                                                    wire:click.prevent='edit({{ $data->id }})'></x-actions>
                                                <x-actions del
                                                    wire:click.prevent='destroy({{ $data->id }})'></x-actions>
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
                        {{ $this->statuses->links(data: ['scrollTo' => '#scrollToHere']) }}

                    </div>

                </div>
@push('js')
{{-- 
 <script src="{{asset('assets/my-js/select2.min.js')}}"></script> 
<script>
    $('#js-example-basic-single').select2({
        placeholder: 'اختار',

    });

    $('#js-example-basic-single').on('change',function(event) {
        console.log(event.target.value)
    })

</script> --}}

 
 
<script>
    window.addEventListener('new-system-addes', event => {
      location.reload();
    })
</script>
 
@endpush
            </div>
