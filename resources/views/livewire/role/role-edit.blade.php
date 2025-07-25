<div>


    
    <x-slot:crumb>
        <x-breadcrumb>
          
                <li class="breadcrumb-item"><a href="{{route('dashboard.user.index')}}" class="text-muted">{{__('customTrans.users')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('ability.index')}}" class="text-muted">{{__('customTrans.abilities')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('role.index')}}" class="text-muted">{{__('customTrans.role group')}} </a></li>
           
        </x-breadcrumb>
    </x-slot:crumb>


 
    <form wire:submit.prevent='update'>

        <x-input name="name" placeholder="اسم المجموعة" :value="$roles->name ?? ''" wire:model="name"></x-input>

        <div class="card row p-3">
            <div class="col-12 border p-3">
                <div>

                    @foreach ($abilities_module as $module)
                        <p class="  fw-bolder p-3 bg-secondary">{{ $module->module_name->name??'' }}</p>
                </div>


                <div class="">
                    @foreach ($abilities->where('module_id', $module->module_id) as $ability)
                        <div class="form-check m-3 ">
                            <input type="checkbox" id="{{ $ability->id }}"  @if ( $ability->activation == '0')
                            disabled
                            @endif  name="abilities[]" wire:model='abilitiesId'
                                value="{{ $ability->ability_name }}" @class([
                                    'form-check-input my-checkbox-lg',
                                    'is-invalid' => $errors->has('abilities'),
                                ])
                                {{ !is_null(old('abilities')) && in_array($ability->ability_name, old('abilities')) ? 'checked' : '' }}
                                @checked(in_array($ability->ability_name, $roles->abilities ?? []))>

                            <label for="{{ $ability->id }}" @class([
                                'form-check-label',
                                'mx-4',
                                'text-danger text-decoration-line-through' =>
                                $ability->activation == '0',
                            ])>
                                {{ $ability->ability_description }} </label>
                        </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>


      
        <x-saveClearbuttons></x-saveClearbuttons>

    </form>

</div>
