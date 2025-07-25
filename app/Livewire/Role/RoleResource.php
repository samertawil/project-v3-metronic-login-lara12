<?php

namespace App\Livewire\Role;

 
use App\Models\Role;
use Livewire\Component;
use App\Traits\SortTrait;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;

class RoleResource extends Component
{
    use SortTrait;
    use WithPagination;
    protected string $paginationTheme ='bootstrap';

    public string $sortBy='created_at';
    #[url()]
    public string $search='';
    #[url()]
    public int $perPage=5;


    public function destroy(int $id): void 
    {
       
        Role::destroy($id);
    
    }

    public function edit(int $id): RedirectResponse 
    {
       
      $roles= Role::find($id);

    
       return redirect()->route('dashboard.home') 
       ->with( ['roles' => $roles] );
 
    }


    public function render(): View
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
