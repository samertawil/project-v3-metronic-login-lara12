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


class LocationResource extends Component
{


    use SortTrait;

    #[Url(history: true)]
    public $sortBy = 'location_id';

    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public $neighbourhood_name;

    public $neighbourhood_id;

    #[Url(history: true)]
    public $neighbourhoodIdSearch;

    public $location_name;

    public $city_id;

    public $region_id;

    #[Url(history: true)]
    public $perPage = 5;

    #[Url(history: true)]
    public $regionIdSearch;

    #[Url(history: true)]
    public $cityIdSearch;

    #[Url(history: true)]
    public $search;

    public $editNeighbourhoodId;

    public $editNeighbourhoodName;

    public $editLocationId;

    public $editLocationName;

    public $editRegionId;

    public $editCityId;

    public $value;

    public function store()
    {

        if(Gate::denies('location.create')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
        }


        $this->validate([
            'location_name' => [
                'required',
                Rule::unique('locations')->where(function ($query)  {
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

    public function edit($id)
    {
        
        if(Gate::denies('location.update')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
        }

        $this->editLocationId = $id;
        $data = AddressNameVw::where('location_id', $id)->first();

        $this->editLocationName = $data->location_name;
        $this->editNeighbourhoodId = $data->neighbourhood_id;
    }


    public function update() {

     
        if(Gate::denies('location.update')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
        }

        $data= Location::findOrfail($this->editLocationId);

        $this->validate([
            'editLocationName' => [
                'required',
                Rule::unique('locations','location_name')->where(function ($query)  {
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




    public function cancelEdit()
    {
        $this->reset('editLocationId');
    }

    public function destroy($id)
    {
        if(Gate::denies('location.delete')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
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


    public function render()
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
