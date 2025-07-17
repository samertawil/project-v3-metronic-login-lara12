<?php

namespace App\Livewire\AddressesModule;


use Exception;
use Livewire\Component;
use App\Models\Location;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\AddressNameVw;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use App\Services\CacheModelServices;
use App\Services\AddressNameServices;

class AddressesIndex extends Component
{

    use SortTrait;

    #[Url()]
    public $sortBy = 'location_id';

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    #[Url()]
    public $search;

    #[Url()]
    public $perPage = 5;

    #[Url()]
    public $regionIdSearch;

    #[Url()]
    public $cityIdSearch;

    #[Url()]
    public $neighbourhoodIdSearch;

    public function  api_create_short_address($value = '', $model = '')
    {

        if ($model === 'region_id') {
            $groupBy = 'city_id';
        } elseif ($model === 'city_id') {
            $groupBy = 'neighbourhood_id';
        }

        $address =  AddressNameServices::getCityVwDataApi($groupBy, $model, $value);

        return response($address, 200);
    }


    public function destroy($id)
    {

        DB::beginTransaction();

        try {

            Location::destroy($id);
            DB::commit();
        } catch (\Exception $e) {
            FlashMsgTraits::created($msgType = 'error', $msg = 'لا يمكن حذف قيمة مرتبطة ببيانات اخرى');
            DB::rollBack();
        }
    }


    #[Title('اجزاء العنوان')]
    public function render()
    {
         
        $TitlePage = 'اجزاء العنوان';

        $regions =   CacheModelServices::getRegionVwData();
        $cities  =   CacheModelServices::getCityVwData();

        $locations = AddressNameVw::groupby('location_id')
            ->orderBy($this->sortBy, $this->sortdir)
            ->LocationNameSearch($this->search)
            ->RegionListSearch($this->regionIdSearch)
            ->CityListSearch($this->cityIdSearch)
            ->NeighbourhoodListSearch($this->neighbourhoodIdSearch)

            ->paginate($this->perPage);

        $neighbourhoods = CacheModelServices::getNeighbourhoodVwData();



        return view('livewire.addresses-module.address-index', compact('cities', 'locations', 'regions', 'neighbourhoods'))
            ->layoutData(['pageTitle' => $TitlePage,]);
    }
}
