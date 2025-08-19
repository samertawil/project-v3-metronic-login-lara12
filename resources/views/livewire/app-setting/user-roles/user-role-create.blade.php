<div>


    <x-slot:crumb>
        <x-breadcrumb>
            
                <li class="breadcrumb-item"><a href="{{route('appsetting.user.index')}}" class="text-muted">{{__('customTrans.users')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('ability.index')}}" class="text-muted">{{__('customTrans.abilities')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('role.index')}}" class="text-muted">{{__('customTrans.role group')}} </a></li>
           
        </x-breadcrumb>
    </x-slot:crumb>

    <form wire:submit="store">

        <x-input :value="$user_name" wire:model={{ $userID }} disabled></x-input>

        <br>


        <div class="form-check mx-4">
            @foreach ($roles_group as $role_group)
                <input type="checkbox" value="{{ $role_group->id }}" wire:model='rolesId' id="{{ $role_group->id }}"
                    class="form-check-input  my-checkbox-lg">



                <label for="{{ $role_group->id }}" class="form-check-label mx-4 ">
                    {{ $role_group->name }}</label>
            @endforeach

        </div>


        <br>
        <br>

        <x-button divlclass="mx-3"></x-button>


    </form>

</div>
