<?php

namespace App\Livewire\Ability;

use App\Models\Role;
use App\Models\Ability;
use Livewire\Component;
use App\Traits\SortTrait;
use App\Models\ModuleName;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Gate;


class AbilityResource extends Component
{
    public $sortBy = 'created_at';

    use  SortTrait;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['Refresh_Ability_Index' => '$refresh'];

  #[Url('history:true')]
    public $search = '';
    public $searchModuleId;
    public $editAbilityId = '';

    #[Validate('required|string')]
    public $editAbilityName = '';

    #[Validate(['required', 'string'])]
    public $editAbilityDescription = '';

    #[Validate(['required', 'in:"0","1"'])]
    public $editAbilityActivation = '';

    public $editAbilityUrl = '';
    public $editDescription = '';
    public $editAbilityModuleId='';

    public $perPage = 10;



    public function edit($id)
    {
 

        $this->editAbilityId = $id;
        $data = Ability::withoutGlobalScope('not-active')->find($id);


        $this->editAbilityName = $data->ability_name;
        $this->editAbilityDescription = $data->ability_description;
        $this->editAbilityUrl = $data->url;
        $this->editAbilityActivation = $data->activation;
        $this->editAbilityModuleId = $data->module_id;
        $this->editDescription = $data->description;
    }

    public function update()
    {

  
        $data = Ability::withoutGlobalScope('not-active')->find($this->editAbilityId);

        $this->validate();

        $data->update([
            'ability_description' => $this->editAbilityDescription,
            'url' => $this->editAbilityUrl,
            'activation' => $this->editAbilityActivation,
            'module_id'=>$this->editAbilityModuleId,


        ]);

        $this->cancelEdit();
    }




    public function destroy($id)
    {

 

        $abilities = Ability::find($id);

        $roles = Role::select('abilities', 'id', 'abilities_description')->where('abilities', 'like', "%$abilities->ability_name%")->get();


        foreach ($roles as $key => $ability) {

            $role = Role::find($ability->id);

            // ,""
            // حذف صلاحية من المجموعة بناء على حذف هذه الصلاحية من جدول الصلاحيات 
            // اولا حذف الصلاحية كاسم فعلي للصلاحية
            $x2 = implode(",", $role->abilities);
            $x3 = str_replace($abilities->ability_name, '', $x2);
            $x4 = explode(",", $x3);

            // ثانيا حذف اسم الصلاحية اللي بالعربي abilities_description
            $x5 = implode(",", ($role->abilities_description));
            $x6 = str_replace($abilities->ability_description, '', $x5);
            $x7 = explode(",", $x6);


            $role->update([
                'abilities' => $x4,
                'abilities_description' => $x7,
            ]);
        }

        $abilities->delete();
    }



    public function cancelEdit()
    {

        $this->reset('editAbilityId');
    }

    public function placeholder()
    {
        return view('livewire.placeholder');
    }

    
    #[Computed]
    public function ModuleNames() {
        return ModuleName::get();
        
    }

    public function render()
    {
        
         if(Gate::denies('ability.all.resource')) {
             abort(403,'ليس لديك الصلاحية اللازمة');
         }

        $pageTitle = __('customTrans.create ability');
        $title = $pageTitle;

        $abilities = Ability::with('module_name')
            ->SearchName($this->search)
            ->searchModuleId($this->searchModuleId)
            ->withoutGlobalScope('not-active')->orderBy($this->sortBy, $this->sortdir)->paginate($this->perPage);

        return view('livewire.ability.ability-resource', compact('abilities'))->layoutData(['title' => $title, 'pageTitle' => $pageTitle]);
    }
}
