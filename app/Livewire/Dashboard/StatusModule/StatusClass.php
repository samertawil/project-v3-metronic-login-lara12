<?php

namespace App\Livewire\Dashboard\StatusModule;



use App\Models\Status;
use Livewire\Component;
use App\Traits\SortTrait;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Gate;
use App\Services\CacheSystemSettingServices;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class  StatusClass extends Component
{
    use SortTrait;
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    #[Url()]
    public string $sortBy = 'created_at';
    public string|null $status_name='';
    // @phpstan-ignore-next-line
    public  $p_id_sub;
    public int $used_in_system_id;
    public string $page_name;
    public string $route_system_name;
    public string $route_name;

    #[Url()]
    public string|int $search = '';
    #[Url()]
    public int $perPage = 10;
    #[Url()]
    public string|int $PidSearch = '';
    #[Url()]
    public string|int $SystemName='';
    public int $editStatusId;
    public string $StatusName;
    public string $description;
    public int|null $statusPid=null;
    public mixed $usedInSystem;
// @phpstan-ignore-next-line
    protected   $listeners = ['refresh-system' => '$refresh'];
// @phpstan-ignore-next-line
    public  function rules($p_id_sub): mixed
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

    public function store(): void
    {

        if (Gate::denies('status_view')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');;
        }

        $this->validate($this->rules($this->p_id_sub));

        status::create($this->all());

        FlashMsgTraits::created();

        $this->reset();
    }


    public function edit(int $id): void
    {
        if (Gate::denies('status_view')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');;
        }
        $this->editStatusId = $id;
        $data = Status::find($id);

        if($data) {
            $this->StatusName = $data->status_name??'';
            $this->statusPid = $data->p_id_sub;
            $this->usedInSystem = $data->used_in_system_id;
        }
       
    }

    public function update(): void
    {

        $data = Status::find($this->editStatusId);

        if($data) {
            
        $data->update([
            'status_name' => $this->StatusName,
            'p_id_sub' => $this->statusPid,
            'used_in_system_id' => $this->usedInSystem,
        ]);
    }
        $this->cancelEdit();
    }

    public function destroy(int $id): void
    {

        if (Gate::denies('status_view')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');;
        }

        Status::destroy($id);
    }


    public function cancelEdit(): void
    {

        $this->reset('editStatusId');
    }


    #[Computed()]
    public function statusesAll(): mixed
    {
        return Status::with(['systemname:id,system_name', 'status_p_id_sub:id,p_id_sub,status_name', 'status_p_id:id,p_id,status_name'])
            ->select('status_name', 'id',   'p_id_sub', 'used_in_system_id');
    }


    #[Computed()]
    public function statuses(): LengthAwarePaginator
    {
        return $this->statusesAll()
            ->SearchName($this->search)
            ->SearchpId($this->PidSearch)
            ->SearchSystemName($this->SystemName)
            ->orderBy($this->sortBy, $this->sortdir)
            ->paginate($this->perPage);
    }

    #[Computed()]
    public function systems_data(): Collection
    {
        return CacheSystemSettingServices::getData();
    }



    public function render(): View
    {
        if (Gate::denies('status_view')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');;
        }

        $pageTitle =  __('customTrans.status system');

        return view('livewire.dashboard.status.status')->layoutData(['title' => $pageTitle, 'pageTitle' => $pageTitle]);
    }
}
