<div>
    <div id="collapse-system" class="collapse show" aria-labelledby="heading-system">
        <p class="card-header"> </p>


        <div>


            <form wire:submit="systemStore">
                <div class="d-flex border h-0 align-items-center p-2 ">

                    <x-input name="system_name" wire:model="system_name" label="yes"
                        title="اسماء الانظمة الرئيسية المشغولة بهذا النظام"></x-input>
                    <x-input name="description" wire:model="description" label="yes"
                        title="شرح بسيط عن النظام"></x-input>

                </div>


                <x-saveClearbuttons clear></x-saveClearbuttons>

            </form>

        </div>



        <div class="container">
            <table class="table  my-5">
                <thead>
                    <th>#</th>
                    <th>{{ __('customTrans.module_name') }}</th>
                    <th>{{ __('customTrans.active_status') }} </th>
                    <th>{{ __('customTrans.description') }}</th>
                </thead>
                <tbody>

                    @foreach ($this->systems as $data)
                        <tr>
                            <td>{{ $data->id }}</td>

                            @if ($editId == $data->id)
                                <td> <x-input name="system_name" wire:model="system_name" divWidth="8"></x-input></td>
                            @else
                                <td>{{ $data->system_name }}</td>
                            @endif

                            <td @class ([
                                'text-success' => ($data->active = 1),
                                'text-danger' => ($data->active = 0),
                            ])>
                                {{ $data->active = 1 ? __('customTrans.active') : __('customTrans.not active') }}
                            </td>

                            @if ($editId == $data->id)
                                <td> <x-input name="description" wire:model="description" divWidth="8"></x-input></td>
                            @else
                                <td>{{ $data->description }}</td>
                            @endif

                            <td class="d-flex  justify-content-center">
                                            @if (!($editId === $data->id))
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
        </div>
    </div>
</div>
