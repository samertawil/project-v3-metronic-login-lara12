 <div>
     <p class="card-header"> </p>

     @can('region.create')
         <div>


             <form wire:submit="store">

                 <div class="d-flex border  align-items-center p-2 ">

                     <x-input name="region_name" wire:model="region_name" label="yes"></x-input>


                 </div>

                 <x-saveClearbuttons></x-saveClearbuttons>

             </form>

         </div>
     @endcan
     @can('region.index')


         <div class="table-responsive ">
             <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                 <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable w-md-50  "
                     id="example2" role="grid" aria-describedby="example2_info">
                     <thead>
                         <th class="">#</th>
                         <th class="">{{ __('customTrans.region_name') }}</th>
                         <th>{{ __('customTrans.actions') }}</th>

                     </thead>
                     <tbody>

                         @foreach ($regions as $key => $region)
                             <tr>
                                 <td class="smallTd">{{ $key + 1 }}</td>
                                 @if ($regionId === $region->region_id)
                                     <td> <x-input wire:model='regionName' name='regionName' divWidth="8"></x-input></td>
                                 @else
                                     <td class="smallTd">{{ $region->region_name }}</td>
                                 @endif


                                 <td class="d-flex  justify-content-center smallTd">
                                     @if (!($regionId === $region->region_id))
                                         @can('region.update')
                                             <x-actions edit wire:click.prevent='edit({{ $region->region_id }})'></x-actions>
                                         @endcan
                                         @can('region.delete')
                                             <x-actions del wire:click.prevent='destroy({{ $region->region_id }})'></x-actions>
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
             </div>
         </div>

     @endcan
 </div>
