<?php

namespace App\Livewire\RoleModuleName;

use Livewire\Component;
use App\Models\ModuleName;
use App\Traits\FlashMsgTraits;
use App\Traits\SortTrait;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;

class ModuleResource extends Component
{
 
    use WithPagination;
    use SortTrait;
    public $sortBy = 'created_at';
    public $perPage=5;
    protected $paginationTheme = 'bootstrap';
    public $search;

    #[Validate(['required','unique:module_names,name','string'])]
    public $name;

    public $description;

    #[Validate(['required','in:"0","1"'])]
    public $active="1";

    public $editId;
    public $editName;
    public $editActive;
    public $editDescription;

    public function Store() {

        $this->validate();

        ModuleName::create([
            'name'=>$this->name,
            'description'=>$this->description,
            'active'=>$this->active,
        ]);
 
        FlashMsgTraits::created();
        
        $this->reset();

    }

    public function edit($id) {
        $this->editId=$id;
        $data = $this->ModuleNames()->find($id) ;

        $this->editName=$data->name;
        $this->editActive=$data->active;
        $this->editDescription=$data->description;
    }

    public function update() { 
       
      $this->validate();

       $data= ModuleName::find($this->editId);
       
       $data->update([
            'name'=>$this->editName,
            'active'=>$this->editActive,
            'description'=>$this->editDescription,
        ]);

        $this->cancelEdit();
         
    }

    public function cancelEdit()
    {
        $this->reset('editId');
    }

    public function destroy($id) {
      
         ModuleName::destroy($id);
    }

    #[Computed]
    public function ModuleNames() {
        return ModuleName::
         SearchName($this->search)
        ->orderBy($this->sortBy, $this->sortdir)->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.RoleModuleName.module-name');
    }
}
