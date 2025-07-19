<?php

namespace App\Livewire\AddressesModule;

use App\Models\City;
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
use App\Http\Requests\neighbourhoodRequest;

class NeighbourhoodResource extends Component
{
    use SortTrait ;

    #[Url()]
    public $sortBy='neighbourhood_id';

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $neighbourhood_name;
    
    public $neighbourhood_id;

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

    #[Url(history: true)]
    public $neighbourhoodIdSearch;
    

    public $editNeighbourhoodId;

    public $editNeighbourhoodName;

    public $regionIdUpdate;

    public $cityIdUpdate;

    protected $listeners=['refresh-city'=>'$refresh',];

    public function store()
    {

        if(Gate::denies('neighbourhood.create')) {
          abort(403,'ليس لديك الصلاحية اللازمة');
        }
        
        $this->validate([
            'neighbourhood_name' => [
                'required',
                Rule::unique('neighbourhoods')->where(function ($query)  {
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

    public function edit($id)
    {
        if(Gate::denies('neighbourhood.update')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
          }

        $this->editNeighbourhoodId = $id;
        $data = Neighbourhood::findOrfail($id);
      
        $this->editNeighbourhoodName = $data->neighbourhood_name;
        $this->regionIdUpdate = $data->region_id;
        $this->cityIdUpdate = $data->city_id;
      
    }


    public function update()
    {

        if(Gate::denies('neighbourhood.update')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
          }

          $this->validate([
            'editNeighbourhoodName' => [
                'required',
                Rule::unique('neighbourhoods','neighbourhood_name')->where(function ($query)  {
                    return $query->where('city_id', $this->cityIdUpdate);
                }),
            ],
            'cityIdUpdate' => ['required'],
          
        ]);

        $data = Neighbourhood::findOrfail($this->editNeighbourhoodId);

        $data->update([
            'neighbourhood_name'=>$this->editNeighbourhoodName,
            'city_id' => $this->cityIdUpdate,
         
        ]);

        $this->dispatch('refresh-neighbourhood');

        $this->cancelEdit();
    }

    public function destroy($id)
    {
        if(Gate::denies('neighbourhood.delete')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
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

    public function cancelEdit()
    {
        $this->reset('editNeighbourhoodId');
    }



    public function render()
    {
        
 
        $regions =Region::get(); 
      
        $cities =  CacheModelServices::getCityVwData();

        $neighbourhoods = AddressNameVw::groupby('neighbourhood_id')
        ->orderBy($this->sortBy,$this->sortdir)
            ->NeighbourhoodNameSearch($this->search)
            ->RegionListSearch($this->regionIdSearch)
            ->CityListSearch($this->cityIdSearch)
            ->paginate($this->perPage);

        return view('livewire.addresses-module.neighbourhood-resource', compact('cities', 'regions', 'neighbourhoods'));
    }
}
