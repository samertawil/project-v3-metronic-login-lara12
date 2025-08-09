<?php

namespace App\Livewire\AddressesModule;

use Livewire\Component;
use App\Models\Location;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\AddressNameVw;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Services\CacheModelServices;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\LocationRequest;
use Illuminate\View\View;

class LocationResource extends Component
{


    use SortTrait;
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    #[Url(history: true)]
    public string $sortBy = 'location_id';
    public string $neighbourhood_name;
    public string $neighbourhood_id;
    #[Url(history: true)]
    public string $neighbourhoodIdSearch;
    public string $location_name;
    public int $city_id;
    public int $region_id;
    #[Url(history: true)]
    public int $perPage = 5;
    #[Url(history: true)]
    public mixed $regionIdSearch = '';
    #[Url(history: true)]
    public string $cityIdSearch = '';
    #[Url(history: true)]
    public string $search = '';

    public int $editNeighbourhoodId;

    public int $editNeighbourhoodName;

    public int $editLocationId;

    public string $editLocationName;

    public int $editRegionId;

    public int $editCityId;

    public string $value;

    public function store(): void
    {

        if (Gate::denies('location.create')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }


        $this->validate([
            'location_name' => [
                'required',
                Rule::unique('locations')->where(function ($query) {
                    return $query->where('neighbourhood_id', $this->neighbourhood_id);
                }),
            ],

            'neighbourhood_id' => ['required'],

        ]);

        Location::create([
            'location_name' => $this->location_name,
            'neighbourhood_id' => $this->neighbourhood_id,
        ]);

        $this->reset();

        $this->dispatch('reset-items');
    }

    public function edit(int $id): void
    {

        if (Gate::denies('location.update')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }

        $this->editLocationId = $id;

        $data = AddressNameVw::where('location_id', $id)->first();

        if ($data) {

            $this->editLocationName = $data->location_name;
            $this->editNeighbourhoodId = $data->neighbourhood_id;
        }
    }


    public function update(): void
    {


        if (Gate::denies('location.update')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }

        $data = Location::findOrfail($this->editLocationId);

        $this->validate([
            'editLocationName' => [
                'required',
                Rule::unique('locations', 'location_name')->where(function ($query) {
                    return $query->where('neighbourhood_id', $this->editNeighbourhoodId);
                }),
            ],

            'editNeighbourhoodId' => ['required'],

        ]);


        $data->update([
            'location_name' => $this->editLocationName,
            'neighbourhood_id' => $this->editNeighbourhoodId,
        ]);

        $this->cancelEdit();
    }




    public function cancelEdit(): void
    {
        $this->reset('editLocationId');
    }

    public function destroy(int $id): void
    {
        if (Gate::denies('location.delete')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }


        DB::beginTransaction();

        try {
            Location::destroy($id);
            DB::commit();
        } catch (\Exception $e) {
            FlashMsgTraits::created($msgType = 'error', $msg = 'لا يمكن حذف قيمة مرتبطة ببيانات اخرى');
            DB::rollBack();
        }
    }


    public function render(): View
    {

        $regions =  CacheModelServices::getRegionVwData();
        $cities  =   CacheModelServices::getCityVwData();

        $locations = AddressNameVw::groupby('location_id')
            ->orderBy($this->sortBy, $this->sortdir)
            ->LocationNameSearch($this->search)
            ->RegionListSearch($this->regionIdSearch)
            ->CityListSearch($this->cityIdSearch)
            ->paginate($this->perPage);

        $neighbourhoods = CacheModelServices::getNeighbourhoodVwData();

        return view('livewire.addresses-module.location-resource', compact('cities', 'locations', 'regions', 'neighbourhoods'));
    }
}
