<?php

namespace App\Livewire\Role;

 
use App\Models\Role;
use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;

class RoleResource extends Component
{
    public $sortBy='created_at';
    use SortTrait;

    use WithPagination;

    protected $paginationTheme ='bootstrap';


    public $search='';


    public $perPage=5;


    public function destroy($id) 
    {
        // if(Gate::denies('role.delete')) {
        //     abort(403,'ليس لديك الصلاحية اللازمة');
        //  }


        Role::destroy($id);
    
    }

    public function edit($id) 
    {
       
      $roles= Role::find($id);

    
       return redirect()->route('dashboard.home') 
       ->with( ['roles' => $roles] );
 
    }


    public function render()
    {

        if (Gate::denies('abilities.groups.all.resource')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }

  
        $title= __('customTrans.role group');

        $roles= Role::
        SearchName($this->search)
        ->orderBy($this->sortBy,$this->sortdir)
        ->paginate($this->perPage);
 
        return view('livewire.role.role-resource',compact('roles')) 
        ->layoutData(['title' => $title, 'pageTitle'=>$title]);
    }
}
