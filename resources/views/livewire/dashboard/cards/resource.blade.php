<div>


    <x-slot:crumb>
        <x-breadcrumb button data-target="#CardCreateModel1" data-toggle="modal" :label="__('customTrans.add new')">

        </x-breadcrumb>

    </x-slot:crumb>


    <x-modal idName="CardCreateModel1" :title="__('customTrans.add new')" footer>

        <livewire:Dashboard.Cards.Create></livewire:Dashboard.Cards.Create>


    </x-modal>

    <x-search-index-section></x-search-index-section>



    <div class="table-responsive">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th><span></span></th>
                        <th><span>#</span></th>
                        <x-table-th wire:click="setSortBy('card_title')" name="card_title" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('card_use_in')" name="card_use_in" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('active')" name="activation" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('publish_date')" name="publish_date"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('created_at')" name="created_at" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>




                        <th class="text-center">{{ __('customTrans.actions') }}</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($this->cards as $key => $card)
                        {{-- Main Row --}}
                        <tr class="main-row" wire:key="card-{{ $card->id }}">
                            <td class="p-0">
                                <a href="#" class="btn btn-icon pulse pulse-success mr-5" onclick="toggleDetailsRow(this); return false;">
                                    <i class="fa fa-caret-right text-success"></i> <span class="pulse-ring"></span>
                                </a>
                            </td>



                            <td>{{ ($this->cards->currentPage() - 1) * $this->cards->perPage() + $key + 1 }}</td>

                            <td>{{ $card->card_title }}</td>


                            <td>{{ $card->status->status_name ?? '' }}</td>
                            <td class="{{ $card->active ? 'text-success' : 'text-danger' }}">
                                <div class="{{ $card->active ? 'bg-success' : 'bg-danger' }} dot-label"></div>
                                {{ $card->active ? __('customTrans.active') : __('customTrans.deactivated') }}
                            </td>
                            <td>{{ myDateStyle1($card->publish_date) }}</td>
                            <td>{{ myDateStyle1($card->created_at) }}</td>


                            <td class="d-flex ">

                                <a href="{{ asset('storage/' . $card->card_img) }}" target="_blank"
                                    class="btn btn-lg text-primary " title="{{ __('customTrans.preview pic') }}">

                                    <i class="ti-eye text-primary"></i>

                                </a>

                                <x-actions edit wire:click.prevent='edit({{ $card->id }})'
                                    data-target="#CardEditPreview" data-toggle="modal"></x-actions>


                                <x-modal idName="CardEditPreview" :title="__('customTrans.edit')" footer>

                                    <x-input wire:model='card_title' name='card_title' divWidth="10" label></x-input>

                                    <x-input wire:model='card_text' name='card_text' divWidth="10" label></x-input>

                                    <x-input wire:model='card_url' name='card_url' divWidth="10" label></x-input>

                                    <x-select wire:model='card_use_in' name="card_use_in" :options="$this->statuses->pluck('status_name', 'id')"
                                        divWidth="10" label></x-select>


                                    <div class="form-group mb-3 col-md-4 col-lg-10 ">
                                        <label for="">{{ __('customTrans.activation') }}</label>
                                        <select wire:model="active" class="form-control bg-white">
                                            <option value="1">{{ __('customTrans.active') }}</option>
                                            <option value="0">{{ __('customTrans.deactivated') }}</option>
                                        </select>
                                    </div>


                                    <div class="my-5">
                                        <a href="{{ asset('storage/' . $this->card_img_show) }}" target="_blank"> 
                                            <img  src="{{ asset('storage/' . $this->card_img_show) }}"
                                            style="width: 150px; height: 60px; font-size:13px;">
                                              </a>

                                    </div>

                                    <x-filepond::upload wire:model="file" name="file" required='true'
                                        wire:model='card_img' allowFileSizeValidation maxFileSize='1024KB'
                                        class="@error('file') is-invalid   @enderror" />
                                    @include('partials.general._show-error', ['field_name' => 'file'])


                                    <x-saveClearbuttons close wire:click.prevent='update'></x-saveClearbuttons>
                                    @include('layouts._show_errors_all')
                                </x-modal>




                                <x-actions del wire:click.prevent='destroy({{ $card->id }})'></x-actions>



                            </td>
                        </tr>

                        {{-- Detail Row (hidden by default) --}}
                        <tr class="details-row" style="display: none;">
                            <td colspan="13">
                                <table class="mb-0">
                                    <tr>
                                        <td>{{ __('customTrans.card_text') }}</td>
                                        <td>{{ $card->card_text }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ __('customTrans.card_url') }}</td>
                                        <td>
                                            <span
                                                class="label label-lg label-light-info label-inline">{{ $card->card_url }}</span>

                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            {{ $this->cards->links() }}
        </div>

    </div>




 
@push('js')
    {{-- <script src="{{ asset('template-assets/metronic7/js/pages/crud/ktdatatable/advanced/row-details.min.js') }}"></script> --}}
    

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


    <script>
        window.addEventListener('closeModel', event => {
            $('#CardEditPreview').modal('hide');
        })
    </script>
@endpush


</div>
