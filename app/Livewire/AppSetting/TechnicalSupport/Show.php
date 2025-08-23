<?php

namespace App\Livewire\AppSetting\TechnicalSupport;

use App\Models\User;
use Livewire\Component;
use App\Traits\SortTrait;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Traits\FlashMsgTraits;
use App\Models\TechnicalSupport;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Auth;
use App\Services\CacheStatusModelServices;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Notifications\TechnicalSupportNotification;

class Show extends Component
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
    public string $search = '';

    public $replay;
    public $status_id;
    public $user_name;
    public $searchStatusId;
    public mixed $statusArray = [];
    public mixed $searchSubjectId;
    public   $searchSupportTerminal;

    public $notifications;
    public bool $polling = false;

    public function mount()
    {
        $this->loadNotifications();
    }

    public function loadNotifications()
    {

        $user = auth()->user();
        if ($user) {
            $this->notifications = $user->unreadNotifications()->get();
        } else {
            $this->notifications = collect();
        }
    }

    public function markAsRead(string $id)
    {
        $user = auth()->user();

        if ($user) {

            $notification = $user->unreadNotifications()->find($id);

            if ($notification) {
                $notification->markAsRead();
                $this->loadNotifications(); // Refresh notifications
            }
        } else {
            $this->notifications = collect();
        }
    }

    public function refreshNotifications()
    {
        $user = auth()->user();
        if($user) {
            $this->notifications = $user->unreadNotifications()->get();
        }else {
            $this->notifications = collect();
        }
       
    }

 

    public function store($id)
    {

        $data = TechnicalSupport::findOrFail($id);

        $data->update([
            'replay' => $this->replay,
            'replay_date' => now(),
            'response_employee_id' => Auth::id(),
            'status_id' => $this->status_id ?? 63,
        ]);

        $user = User::where('user_name', 'samer')->first();


        $user->notify(new TechnicalSupportNotification('Your custom content here', url('/some/path'), $user->user_name));

        $this->reset(['replay', 'status_id']);
        $this->dispatch('closeModel');
    }


    #[Computed()]
    public function allData(): LengthAwarePaginator
    {

        $query = TechnicalSupport::with([
            'statusSubjectName:id,status_name',
            'statusTerminalName:id,status_name',
            'statusIdName:id,status_name'
        ]);

        if (!empty($this->search)) {
            $query = $query->searchName($this->search);
        }

        if (!empty($this->searchStatusId)) {
            $query = $query->SearchStatusId($this->searchStatusId);
        }

        if (!empty($this->searchSubjectId)) {
            $query = $query->SearchSubjectId($this->searchSubjectId);
        }

        if (!empty($this->searchSupportTerminal)) {
            $query = $query->SearchSupportTerminal($this->searchSupportTerminal);
        }

        return $query->orderBy($this->sortBy, $this->sortdir)->paginate($this->perPage);
    }


    #[Computed()]
    public function statuses()
    {
        $statusData = new CacheStatusModelServices();
        $sendrecieveSupportstatus = $statusData->statusesPSubId(config('myConstants.sendrecieveSupportstatus'));
        $supportForLogin = $statusData->statusesPSubId(config('myConstants.supportForLogin'));
        $supportTerminal = $statusData->statusesPSubId(config('myConstants.supportTerminal'));

        return [
            'sendrecieveSupportstatus' => collect($sendrecieveSupportstatus)->pluck('status_name', 'id')->toArray(),
            'supportForLogin' => collect($supportForLogin)->pluck('status_name', 'id')->toArray(),
            'supportTerminal' => collect($supportTerminal)->pluck('status_name', 'id')->toArray(),
        ];
    }

    public function render(): View
    {

        $user = User::find(1);
        (string) $title = __('customTrans.technical support list');
        return view('livewire.app-setting.technical-support.show', compact('user'))->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
