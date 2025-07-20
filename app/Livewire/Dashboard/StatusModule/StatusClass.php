<?php

namespace App\Livewire\Dashboard\StatusModule;



use App\Models\Status;
use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Gate;
use App\Services\CacheSystemSettingServices;





class  StatusClass extends Component
{
    use SortTrait;

    #[Url()]
    public $sortBy = 'created_at';

    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $status_name;
    public $p_id_sub;
    public $used_in_system_id;
    public $page_name;
    public $route_system_name;
    public $route_name;

    #[Url()]
    public $search = null;

    #[Url()]
    public $perPage = 10;

    #[Url()]
    public $PidSearch;

    #[Url()]
    public $SystemName;

    public $editStatusId;
    public $StatusName;
    public $statusPid;
    public $usedInSystem;

    protected $listeners=['refresh-system'=>'$refresh'];

    public  function rules($p_id_sub): array
    {
        return [
            'status_name' => [
                'required',
                Rule::unique('statuses')->where(function ($query) use ($p_id_sub) {
                    return $query->where('p_id_sub', $p_id_sub);
                }),
            ],
        ];
    }

    public function store()
    {

        if (Gate::denies('status_view')) {
            abort(403,'ليس لديك الصلاحية اللازمة');;
        }
        
        $this->validate($this->rules($this->p_id_sub));

        status::create($this->all());

        FlashMsgTraits::created();

        $this->reset();
    }


    public function edit($id)
    {
        if (Gate::denies('status_view')) {
            abort(403,'ليس لديك الصلاحية اللازمة');;
        }
        $this->editStatusId = $id;
        $data = Status::find($id);

        $this->StatusName = $data->status_name;
        $this->statusPid = $data->p_id_sub;
        $this->usedInSystem = $data->used_in_system_id;
    }

    public function update()
    {
       

        $data = Status::find($this->editStatusId);

        $data->update([
            'status_name' => $this->StatusName,
            'p_id_sub' => $this->statusPid,
            'used_in_system_id' => $this->usedInSystem,
        ]);

        $this->cancelEdit();
    }

    public function destroy($id)
    {

        if (Gate::denies('status_view')) {
            abort(403,'ليس لديك الصلاحية اللازمة');;
        }

        Status::destroy($id);
    }


    public function cancelEdit()
    {

        $this->reset('editStatusId');
    }


    #[Computed()]
    public function statusesAll()
    {
        return Status::with(['systemname', 'status_p_id_sub', 'status_p_id'])
            ->select('status_name', 'id',   'p_id_sub', 'used_in_system_id');
           
    }


    #[Computed()]
    public function statuses()
    {
        return $this->statusesAll()
             ->SearchName($this->search)
            ->SearchpId($this->PidSearch)
            ->SearchSystemName($this->SystemName)
            ->orderBy($this->sortBy, $this->sortdir)
            ->paginate($this->perPage);
    }
    
    #[Computed()]
    public function systems_data()
    {
        return CacheSystemSettingServices::getData();
    }



    public function render()
    {
        if (Gate::denies('status_view')) {
            abort(403,'ليس لديك الصلاحية اللازمة');;
        }

        $pageTitle =  __('customTrans.status system');

        return view('livewire.dashboard.status.status')->layoutData(['title' => $pageTitle, 'pageTitle' => $pageTitle]);
    }
}
