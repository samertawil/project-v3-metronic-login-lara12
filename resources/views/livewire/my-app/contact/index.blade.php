<div>

   
    <x-slot:crumb>
      <x-breadcrumb button :label="__('customTrans.add new')" :route="route('app.contact.create')" >

        <li class="breadcrumb-item"><a href="" class="text-muted">{{__('customTrans.contacts list')}}</a></li>

      </x-breadcrumb>
    </x-slot:crumb> 




    @push('css')
        <script src="https://cdn.tailwindcss.com"></script>
    @endpush

    {{-- 
    <x-modal idName="UserCreateModel1" :title="__('customTrans.create new account')">


        @livewire('UserModule.register-form')

    </x-modal> --}}




 
    <x-search-index-section>

         
    </x-search-index-section>  


    <div class="table-responsive">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th>#</th>
                        <x-table-th wire:click="setSortBy('identity_number')" name="idc"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>


                        <x-table-th wire:click="setSortBy('full_name')" name="full_name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('phone_primary')" name="mobile1"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('phone_secondary')" name="mobile2"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>


                    </tr>
                </thead>
                <tbody>
                    @forelse ($this->Contacts as $key => $Contact)
                        <tr>

                            <td>{{ ($this->Contacts->currentPage() - 1) * $this->Contacts->perPage() + $key + 1 }}</td>

                            <td>{{ $Contact->identity_number }}</td>
                            <td>{{ $Contact->full_name }}</td>
                            <td>{{ $Contact->phone_primary }}</td>
                            <td>{{ $Contact->phone_secondary }}</td>

                        </tr>
                    @empty
                        <p>لا يوجد بيانات</p>
                    @endforelse
                </tbody>
            </table>
            {{ $this->contacts->links() }}
        </div>

    </div>
</div>
 