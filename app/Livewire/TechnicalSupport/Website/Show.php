<?php

namespace App\Livewire\TechnicalSupport\Website;

use Livewire\Component;
use App\Traits\SortTrait;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Traits\FlashMsgTraits;
use App\Models\TechnicalSupport;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Services\CacheStatusModelServices;
use Illuminate\Pagination\LengthAwarePaginator;

class Show extends Component
{
    use SortTrait;
    use FlashMsgTraits;
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    #[Url()]
    public string $sortBy = 'created_at';

    #[Url()]
    public int $perPage = 10;


    #[Url()]
    public string $search = '';

    public $replay;
    public $status_id;

 public function store($id) {
    
    TechnicalSupport::findOrFail($id)->update([
        'replay'=>$this->replay,
        'replay_date'=>now(),
        'response_employee_id'=>Auth::id(),
        'status_id'=>$this->status_id,
    ]);

    $this->reset(['replay','status_id']);
    $this->dispatch('closeModel');
 
    
 }
 
 

    #[Computed()]
    public function allData(): LengthAwarePaginator
    {
        return TechnicalSupport::with(['statusSubjectName:id,status_name', 'statusTerminalName:id,status_name','statusIdName:id,status_name'])->paginate($this->perPage);
    }

    #[Computed()] 
    public function statuses() {
        $statusData=new CacheStatusModelServices();
      return  $statusData->statusesPSubId(config('myConstants.sendrecieveSupportstatus'));
    }


    public function render(): View
    {

        (string) $title = __('customTrans.technical support list');
        return view('livewire.technical-support.website.show')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
