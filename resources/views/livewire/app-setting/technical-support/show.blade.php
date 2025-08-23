<div wire:cloak>


    <x-slot:crumb>
        <x-breadcrumb></x-breadcrumb>

    </x-slot:crumb>

  

    <!-- Notification Icon -->
    <div wire:poll.keep-alive.10s="refreshNotifications">
        <div>
            <button class="btn btn-primary" data-toggle="collapse" data-target="#demo">
                {{__('customTrans.Notifications')}} <span class="badge bg-danger">{{ $notifications->count() }}</span>
            </button>

            <!-- notification content here -->

            <div id="demo" class="collapse">
                <ul class="list-group mt-2 ">

                    @forelse ($notifications as $notification)
                        <li class="list-group-item d-flex  justify-content-between align-items-center">

                            <a href="{{ $notification->data['url'] ?? '#' }}"
                                wire:click.prevent="markAsRead('{{ $notification->id }}')">
                                {{ $notification->data['content'] ?? 'No content' }}
                            </a>
                            <button wire:click="markAsRead('{{ $notification->id }}')"
                                class="btn btn-sm btn-outline-secondary">Mark read</button>
                        </li>

                    @empty
                        <li class="list-group-item">No new notifications</li>
                    @endforelse
                </ul>

            </div>
        </div>
    </div>


    <x-search-index-section place="البحث باسم الحساب او صاحب الحساب">

        {{-- <div class="col-sm-12 col-md-2">
            <x-select :options="config('myConstants')['userType']" divWidth="12" :ChoseTitle="__('customTrans.user_type')" wire:model.live="searchUsertype"
                ChoseTitle="all"></x-select>
        </div> --}}


        <div class="col-5" wire:ignore>
            <x-select wire:model='searchStatusId' multiple="true" class="js-example-basic-multiple " id="searchStatusId"
                wire:ignore divWidth="12" :options="$this->statuses['sendrecieveSupportstatus']"></x-select>
        </div>



        <div class="col-5 mt-7" wire:ignore>
            <x-select wire:model='searchSubjectId' multiple="true" class="js-example-basic-multiple "
                id="searchSubjectId" wire:ignore divWidth="12" :options="$this->statuses['supportForLogin']"></x-select>
        </div>


        <div class="col-4 mt-7">
            <x-select wire:model.live='searchSupportTerminal' name="searchSupportTerminal" ChoseTitle="terminal_id"
                id="searchSupportTerminal" divWidth="12" :options="$this->statuses['supportTerminal']"></x-select>
        </div>



    </x-search-index-section>



    <div class="table-responsive">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th></th>
                        <th>#</th>
                        {{-- Table header with sorting --}}
                        <x-table-th wire:click="setSortBy('user_name')" name="user_name" :sortBy="$sortBy"
                            :sortdir="$sortdir" />
                        <x-table-th wire:click="setSortBy('subject_id')" name="subject_id" :sortBy="$sortBy"
                            :sortdir="$sortdir" />
                        <x-table-th wire:click="setSortBy('terminal_id')" name="terminal_id" :sortBy="$sortBy"
                            :sortdir="$sortdir" />
                        <x-table-th wire:click="setSortBy('status_id')" name="status_id" :sortBy="$sortBy"
                            :sortdir="$sortdir" />
                        <x-table-th wire:click="setSortBy('created_at')" name="created_at" :sortBy="$sortBy"
                            :sortdir="$sortdir" />

                        <th class="text-center">{{ __('customTrans.actions') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($this->allData as $key => $data)
                        {{-- "main-row --}}

                        <tr @class(['main-row', 'bg-light-danger' => $data->status_id == 62]) wire:key="data-{{ $data->id }}">

                            <td class="p-0 w-lg-1px">
                                <a href="#" class="btn btn-icon pulse pulse-success mr-5"
                                    onclick="toggleDetailsRow(this); return false;">
                                    <i class="fa fa-caret-right text-success"></i> <span class="pulse-ring"></span>
                                </a>
                            </td>


                            <td>{{ $this->allData->firstItem() + $key }}</td>

                            <td>
                                {{ $data->name }}<br>
                                <small class="text-muted">{{ $data->user_name }}</small>
                            </td>

                            <td>{{ $data->statusSubjectName->status_name ?? '-' }}</td>

                            <td>{{ $data->statusTerminalName->status_name ?? '-' }}</td>

                            <td>{{ $data->statusIdName->status_name ?? '-' }}</td>

                            <td>{{ myDateStyle1($data->created_at) }}</td>

                            <td class="text-center">
                                <x-actions preview data-target="#Userpreview{{ $data->id }}"
                                    data-toggle="modal"></x-actions>



                                <x-modal wire:key="modal-{{ $data->id }}" idName="Userpreview{{ $data->id }}"
                                    :title="$data->name" footer>
                                    <p class="col-12 text-left">{{ $data->issue_description ?? '-' }}</p>

                                    <x-textarea wire:model='replay' name="replay" divWidth="12" rows="4" label
                                        id="replay{{ $data->id }}" name="replay"></x-textarea>

                                    <x-select wire:model='status_id' name='status_id' label id="status_id"
                                        :options="$this->statuses['sendrecieveSupportstatus']"></x-select>

                                    <x-saveClearbuttons wire:click="store({{ $data->id }})" close />

                                </x-modal>

                            </td>
                        </tr>



                        {{-- Detail Row (hidden by default) --}}
                        <tr class="details-row" style="display: none;">
                            <td colspan="13">
                                <table class="mb-0">
                                    <tr>
                                        <td class="border-0">{{ __('customTrans.issue_description') }}</td>
                                        <td class="border-0"> {{ $data->issue_description ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('customTrans.replay') }}</td>
                                        <td>
                                            <span
                                                class="label label-lg label-light-info label-inline">{{ $data->replay ?? '-' }}</span>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>{{ __('customTrans.attchments') }}</td>
                                        <td>
                                            @if ($data->uploaded_files)
                                                @foreach ($data->uploaded_files as $file)
                                                    <a href="http://register-aid.local/storage/{{ $file }}"
                                                        target="_blank"> <img
                                                            src="http://register-aid.local/storage/{{ $file }}"
                                                            alt="Thumbnail" style="height: 100px; width:100px;"></a>
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                {{ __('No records found.') }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div>
                {{ $this->allData->links() }}
            </div>
        </div>
    </div>



    @push('js')
        <script>
            $(document).ready(function() {
                $(".js-example-basic-multiple").select2({

                    placeholder: "البحث بالحالة",
                    dir: "rtl" // 

                });

                $("#searchSubjectId").select2({

                    placeholder: "البحث بالدعم المطلوب",
                    dir: "rtl" // 

                });




                $('#searchStatusId').on('change', function(e) {
                    var data = $('#searchStatusId').select2("val");
                    @this.set('searchStatusId', data);
                });

                $('#searchSubjectId').on('change', function(e) {
                    var data = $('#searchSubjectId').select2("val");
                    @this.set('searchSubjectId', data);
                });


            });
        </script>




        <script>
            function toggleDetailsRow(trigger) {
                const tr = trigger.closest('tr');
                const nextRow = tr.nextElementSibling;
                const icon = trigger.querySelector('i');

                if (nextRow && nextRow.classList.contains('details-row')) {
                    nextRow.style.display = nextRow.style.display === 'none' ? 'table-row' : 'none';
                    icon.classList.toggle('fa-caret-right');
                    icon.classList.toggle('fa-caret-down');
                }
            }
        </script>
    @endpush

</div>
