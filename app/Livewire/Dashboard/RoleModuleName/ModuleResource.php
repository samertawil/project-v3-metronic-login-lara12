<?php

namespace App\Livewire\Dashboard\RoleModuleName;

use Livewire\Component;
use App\Enums\activeType;
use App\Traits\SortTrait;
use Illuminate\View\View;
use App\Models\ModuleName;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\LengthAwarePaginator;

class ModuleResource extends Component
{

    use WithPagination;
    use SortTrait;

    public string $sortBy = 'created_at';
    public int $perPage = 5;
    protected string $paginationTheme = 'bootstrap';
    public string $search;

    public string $name;
    public string $description;
    public mixed $active = "1";
    public int $editId;
    public mixed $data;

// @phpstan-ignore-next-line
    protected $listeners = ['reload-module' => '$refresh'];

    public function edit(int $id):void
    {

        $this->editId = $id;
        $this->data = $this->ModuleNames()->find($id);

        $this->name = $this->data['name'];
        $this->active = $this->data['active'];
        $this->description = $this->data['description'];
    }

    public function rules(): mixed
    {
        return [
            'name' => ['required', Rule::unique('module_names')->ignore($this->editId)],
            'active' => ['required', Rule::enum(activeType::class)],
        ];
    }

    public function update(): void
    {


        $this->validate();


        $this->data->update([
            'name' => $this->name,
            'active' => $this->active,
            'description' => $this->description,
        ]);

        $this->cancelEdit();
    }

    public function cancelEdit(): void
    {
        $this->reset('editId');
    }

    public function destroy(int $id): void
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
    public function ModuleNames(): mixed
    {
        return ModuleName::SearchName($this->search)
            ->orderBy($this->sortBy, $this->sortdir)->paginate($this->perPage);
    }


    
    public function render(): View
    {

        
        if(Gate::denies('ability.all.resource')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
         }



        $title = __('customTrans.module_id');
        return view('livewire.dashboard.RoleModuleName.module-name')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
