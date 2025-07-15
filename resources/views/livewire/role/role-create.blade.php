<div>



    <x-slot:crumb>
        <x-breadcrumb>
        
                <li class="breadcrumb-item"><a href="{{route('user.index')}}" class="text-muted">{{__('customTrans.users')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('ability.index')}}" class="text-muted">{{__('customTrans.abilities')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('role.index')}}" class="text-muted">{{__('customTrans.role group')}} </a></li>
          
        </x-breadcrumb>
    </x-slot:crumb>



    <form wire:submit='store'>

        <x-input name="name" placeholder="اسم المجموعة" :value="$roles->name ?? ''" wire:model="name"></x-input>

        <div class="card row p-3">
            <div class="col-6 border p-3">
                <div class="">

                    @foreach ($abilities_module as $module)
                        <p class="fw-bolder p-3 bg-secondary">{{ $module->modulename->name ?? '' }}</p>
                </div>


                <div class="col-12">
                    @foreach ($abilities->where('module_id', $module->module_id) as $ability)
                        <div class="form-check m-3 ">
                            <input type="checkbox" @if ($ability->activation == '0') disabled @endif
                                id="{{ $ability->id }}" name="abilities[]" wire:model='abilitiesId'
                                value="{{ $ability->ability_name }}" @class([
                                    'form-check-input my-checkbox-lg ',
                                    'is-invalid' => $errors->has('abilities'),
                                ])
                                {{ !is_null(old('abilities')) && in_array($ability->ability_name, old('abilities')) ? 'checked' : '' }}
                                @checked(in_array($ability->ability_name, $roles->abilities ?? []))>

                            <label for="{{ $ability->id }}" @class([
                                'form-check-label',
                                'mx-4',
                                'text-danger text-decoration-line-through ' => $ability->activation == '0',
                            ])>
                                {{ $ability->ability_description }}
                            </label>

                        </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>




        <x-button style="width: 100px; height: 38px; font-size:13px;"></x-button>

    </form>



</div>
