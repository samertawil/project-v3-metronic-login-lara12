<?php

namespace App\Livewire\Dashboard\RoleModuleName;

use App\Models\Ability;
use Livewire\Component;
use App\Enums\activeType;
use App\Traits\SortTrait;
use App\Models\ModuleName;
use Livewire\WithPagination;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ModuleResource extends Component
{

    use WithPagination;
    use SortTrait;

    public $sortBy = 'created_at';
    public $perPage = 5;
    protected string $paginationTheme = 'bootstrap';
    public $search;

    public $name;
    public $description;
    public $active = "1";

    public $editId;
    public $data;


    protected $listeners = ['reload-module' => '$refresh'];

    public function edit($id)
    {

        $this->editId = $id;
        $this->data = $this->ModuleNames()->find($id);

        $this->name = $this->data->name;
        $this->active = $this->data->active;
        $this->description = $this->data->description;
    }

    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('module_names')->ignore($this->editId)],
            'active' => ['required', Rule::enum(activeType::class)],
        ];
    }

    public function update()
    {


        $this->validate();


        $this->data->update([
            'name' => $this->name,
            'active' => $this->active,
            'description' => $this->description,
        ]);

        $this->cancelEdit();
    }

    public function cancelEdit()
    {
        $this->reset('editId');
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            ModuleName::destroy($id);
            DB::commit();
        } catch (\Throwable $th) {

            $this->dispatch(
                'alert',
                type: 'error',
                title: 'بيانات مرتبطة',
                text: ' يوجد بيانات مرتبطة بالبيان الذي تحاول مسحه , نظام الصلاحيات ',
                confirmButtonText: 'اغلاق'
            );
        }
    }

    #[Computed]
    public function ModuleNames()
    {
        return ModuleName::SearchName($this->search)
            ->orderBy($this->sortBy, $this->sortdir)->paginate($this->perPage);
    }


    
    public function render()
    {

        
        if(Gate::denies('ability.all.resource')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
         }



        $title = __('customTrans.module_id');
        return view('livewire.dashboard.RoleModuleName.module-name')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
