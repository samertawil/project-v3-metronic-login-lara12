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
use Illuminate\View\View;
use Livewire\Attributes\Computed;

class AddressesIndex extends Component
{

    protected $listeners = ['refresh-region' => '$refresh','refresh-city' => '$refresh','refresh-neighbourhood'=>'$refresh'];
    
    use SortTrait;

    #[Url()]
    public $sortBy = 'location_id';

    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

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

        $address =  AddressNameServices::getCityVwDataApi($groupBy='', $model, $value);

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
    
    #[Computed()]
    public function regions()
    {
        return   CacheModelServices::getRegionVwData();
    }

    #[Computed()]
    public function cities()
    {
        return    CacheModelServices::getCityVwData();
    }


    #[Computed()]
    public function neighbourhoods()
    {
        return   CacheModelServices::getNeighbourhoodVwData();
    }



    #[Computed()]
    public function locations()
    {
        return     AddressNameVw::groupby('location_id')
        ->orderBy($this->sortBy, $this->sortdir)
        ->LocationNameSearch($this->search)
        ->RegionListSearch($this->regionIdSearch)
        ->CityListSearch($this->cityIdSearch)
        ->NeighbourhoodListSearch($this->neighbourhoodIdSearch)

        ->paginate($this->perPage);
    }


    #[Title('اجزاء العنوان')]
    public function render(): View
    {

        $TitlePage = 'اجزاء العنوان';



        return view('livewire.addresses-module.address-index')->layoutData(['pageTitle' => $TitlePage,]);
    }
}
