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


                <x-saveClearbuttons clear ></x-saveClearbuttons>

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

                    @foreach ($this->systems_data as $system_data)
                        <tr>
                            <td>{{ $system_data->id }}</td>
                            <td>{{ $system_data->system_name }}</td>
                            <td @class ([
                                'text-success' => ($system_data->active = 1),
                                'text-danger' => ($system_data->active = 0),
                            ])>
                                {{ $system_data->active = 1 ? __('customTrans.active') : __('customTrans.not active') }}
                            </td>
                            <td>{{ $system_data->description }}</td>

                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
</div>
