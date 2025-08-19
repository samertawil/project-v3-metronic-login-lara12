<?php

namespace  App\Livewire\AppSetting\UserModule;


use App\Models\User;
use Livewire\Component;
use App\Enums\activeType;
use App\Traits\SortTrait;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class UserIndex extends Component
{
    use SortTrait;
    use FlashMsgTraits;
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    #[Url()]
    public string $sortBy = 'created_at';

    #[Url()]
    public int $perPage = 5;

    #[Url()]
    public mixed  $searchUsertype = '';

    #[Url()]
    public string $search = '';

    public int $editUserId;
    public string $editName = '';
    public string|int $edituserType;
    public  mixed  $user_activation;
    /**
     * @property string $profile_image
     */
    public mixed  $profile_image;
    public string $editMobile = '';


    #[Computed()]
    public function users(): LengthAwarePaginator
    {
        return  User::SearchName($this->search)
            ->SearchUserType($this->searchUsertype)
            ->orderBy($this->sortBy, $this->sortdir)
            ->paginate($this->perPage);
    }


    public function edit(int $id): void
    {
        if (Gate::denies('user.all.resource')) {
            abort(403, __('customTrans.you have no access'));
        }
        $this->editUserId = $id;
        $data = User::find($id);
        if ($data) {


            $this->editName = $data->name;
            $this->user_activation = $data->user_activation;
            $this->editMobile = $data->mobile;
            $this->edituserType = $data->user_type;
            $this->profile_image = $data->profile_image;
        }
    }


    public function cancelEdit(): void
    {

        $this->reset('editUserId');
    }

    public function update(): void
    {


        $user = User::find($this->editUserId);

        $this->validate([
            'user_activation' => ['required', Rule::enum(ActiveType::class)],
        ]);

        if($user) {

        $user->update([
            'name' => $this->editName,
            'user_activation' => $this->user_activation,
            'mobile' => $this->editMobile,
            'user_type' => $this->edituserType,
        ]);
    }



        $this->cancelEdit();

        $this->resetPage();
    }




    public function resetPass(int $id): void
    {
        if (Gate::denies('user.all.resource')) {
            abort(403, __('customTrans.you have no access'));
        }

        $user = User::findOrfail($id);

        $user->update([

            'password' => Hash::make('12345'),
            'need_to_change' => 1,
        ]);


        FlashMsgTraits::created($msgType = 'success', $msg = ' تم طلب اعادة تعيين كلمة المرور - كلمة المرور المؤقتة هي 12345');
    }





    #[Layout('components.layouts.metronic7-simple-app')]
    public function render(): View
    {

        if (Gate::denies('user.all.resource')) {
            abort(403, __('customTrans.you have no access'));
        }


        $title = __('customTrans.users');
        $pageTitle =  __('customTrans.users');


        return view('livewire.app-setting.users.user-index')->layoutData(['title' => $title, 'pageTitle' => $pageTitle]);
    }
}
