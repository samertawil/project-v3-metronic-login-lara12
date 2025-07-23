<?php

namespace  App\Livewire\UserModule ;

 
use App\Models\User; 
use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserIndex extends Component
{
    use SortTrait;
    use FlashMsgTraits;


    #[Url()]
    public $sortBy = 'created_at';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Url()]
    public $perPage = 5;

    #[Url()]
    public $searchUsertype = '';

    #[Url()]
    public $search = '';

    public $editUserId;

    //  #[Rule('required')]
    public $editName = '';

    public $edituserType = '';

    #[Rule('required|in:0,1')]
    public $editActiovation = '';


    public $editMobile = '';




    public function edit($id)
    {
        if(Gate::denies('user.all.resource')) {
            abort(403,__('customTrans.you have no access'));
         }
        $this->editUserId = $id;
        $data = User::find($id);

        $this->editName = $data->name;
        $this->editActiovation = $data->user_activation;
        $this->editMobile = $data->mobile;
        $this->edituserType = $data->user_type;
    }


    public function cancelEdit()
    {
       
        $this->reset('editUserId');
    }

    public function update()
    {

      
        $user = User::find($this->editUserId);

        $this->validate();


        $user->update([
            'name' => $this->editName,
            'user_activation' => $this->editActiovation,
            'mobile' => $this->editMobile,
            'user_type' => $this->edituserType,
        ]);



        $this->cancelEdit();

        $this->resetPage();
    }


    

    public function resetPass($id)
    {
        if(Gate::denies('user.all.resource')) {
            abort(403,__('customTrans.you have no access'));
         }

        $user = User::findOrfail($id);

        $user->update([

            'password' => Hash::make('12345'),
            'need_to_change' => 1,
        ]);


        FlashMsgTraits::created($msgType = 'success', $msg = ' تم طلب اعادة تعيين كلمة المرور - كلمة المرور المؤقتة هي 12345');
    }

    #[Layout('components.layouts.metronic7-simple-app')]
    public function render()
    {
		
        if(Gate::denies('user.all.resource')) {
            abort(403,__('customTrans.you have no access'));
         }

		 
        $title = __('customTrans.users') ;
        $pageTitle =  __('customTrans.users') ;

        $users = User::SearchName($this->search)
            ->SearchUserType($this->searchUsertype)
            ->orderBy($this->sortBy, $this->sortdir)
            ->paginate($this->perPage);

        return view('livewire.users.user-index', compact('users'))->layoutData(['title' => $title, 'pageTitle' => $pageTitle]);
    }
}
