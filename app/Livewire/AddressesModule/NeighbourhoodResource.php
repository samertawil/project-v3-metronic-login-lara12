<?php

namespace App\Livewire\AddressesModule;


use App\Models\Region;
use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\AddressNameVw;
use App\Models\Neighbourhood;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Services\CacheModelServices;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class NeighbourhoodResource extends Component
{
    use SortTrait;
    use WithPagination;
    #[Url()]
    public string $sortBy = 'neighbourhood_id';
    protected string $paginationTheme = 'bootstrap';
    public string $neighbourhood_name;
    public int $neighbourhood_id;
    public int $city_id;
    #[Url(history: true)]
    public int $perPage = 5;
    #[Url(history: true)]
    public string $regionIdSearch='';
    #[Url(history: true)]
    public string $cityIdSearch='';
    #[Url(history: true)]
    public string $search='';
    #[Url(history: true)]
    public string $neighbourhoodIdSearch;
    public mixed $editNeighbourhoodId;
    public mixed $editNeighbourhoodName;
    public mixed $regionIdUpdate;
    public mixed $cityIdUpdate;

    // @phpstan-ignore-next-line
    protected  $listeners = ['refresh-city' => '$refresh',];

    public function store(): void
    {

        if (Gate::denies('neighbourhood.create')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }

        $this->validate([
            'neighbourhood_name' => [
                'required',
                Rule::unique('neighbourhoods')->where(function ($query) {
                    return $query->where('city_id', $this->city_id);
                }),
            ],
            'city_id' => ['required'],

        ]);

        Neighbourhood::create([
            'neighbourhood_name' => $this->neighbourhood_name,
            'city_id' => $this->city_id,
        ]);

        $this->reset(['city_id', 'neighbourhood_name']);

        $this->dispatch('refresh-neighbourhood');
    }

    public function edit(int $id): void
    {
        if (Gate::denies('neighbourhood.update')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }

        $this->editNeighbourhoodId = $id;
        $data = Neighbourhood::findOrfail($id);

        $this->editNeighbourhoodName = $data->neighbourhood_name;
        // $this->regionIdUpdate = $data->region_id;
        $this->cityIdUpdate = $data->city_id;
    }


    public function update(): void
    {

        if (Gate::denies('neighbourhood.update')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }

        $this->validate([
            'editNeighbourhoodName' => [
                'required',
                Rule::unique('neighbourhoods', 'neighbourhood_name')->where(function ($query) {
                    return $query->where('city_id', $this->cityIdUpdate);
                }),
            ],
            'cityIdUpdate' => ['required'],

        ]);

        Neighbourhood::whereIn('id', $this->editNeighbourhoodId)
            ->update([
                'neighbourhood_name' => $this->editNeighbourhoodName,
                'city_id' => $this->cityIdUpdate,
            ]);

        $this->dispatch('refresh-neighbourhood');

        $this->cancelEdit();
    }

    public function destroy(int $id): void
    {
        if (Gate::denies('neighbourhood.delete')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }


        DB::beginTransaction();

        try {
            Neighbourhood::destroy($id);
            DB::commit();

            $this->dispatch('refresh-neighbourhood');
        } catch (\Exception $e) {
            FlashMsgTraits::created($msgType = 'error', $msg = 'لا يمكن حذف قيمة مرتبطة ببيانات اخرى');
            DB::rollBack();
        }
    }

    public function cancelEdit(): void
    {
        $this->reset('editNeighbourhoodId');
    }



    public function render(): View
    {


        $regions = Region::get();

        $cities =  CacheModelServices::getCityVwData();

        $neighbourhoods = AddressNameVw::groupby('neighbourhood_id')
            ->orderBy($this->sortBy, $this->sortdir)
            ->NeighbourhoodNameSearch($this->search)
            ->RegionListSearch($this->regionIdSearch)
            ->CityListSearch($this->cityIdSearch)
            ->paginate($this->perPage);

        return view('livewire.addresses-module.neighbourhood-resource', compact('cities', 'regions', 'neighbourhoods'));
    }
}
