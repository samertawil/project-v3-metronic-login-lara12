<?php

namespace App\Livewire\AddressesModule;


use App\Models\City;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\AddressNameVw;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use App\Http\Requests\CityRequest;
use Illuminate\Support\Facades\DB;
use App\Services\CacheModelServices;

use Illuminate\Support\Facades\Gate;
use function PHPUnit\Framework\returnSelf;

class CityResource extends Component
{
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    protected $listeners = ['refresh-region' => '$refresh'];

    public $city_name;

    public $region_name;

    public $region_id;

    public $cityId='';

    public $editCityName;

    #[Url(history: true)]
    public $perPage = 5;

    #[Url(history: true)]
    public $regionIdSearch;

    #[Url(history: true)]
    public $search;

    public $regionIdUpdate;

    public function store()
    {
        if (Gate::denies('city.create')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }

        $this->validate([
            'region_id' => ['required'],
            'city_name' => [
                'required',
                Rule::unique('cities')->where(function ($query) {
                    return $query->where('region_id', $this->region_id);
                }),

            ]
        ]);


        City::create($this->all());

        $this->reset('city_name');

        $this->dispatch('refresh-city');
    }

    public function edit($id)
    {
        if (Gate::denies('city.update')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }

        $this->cityId = $id;
        $data = City::findOrfail($id);
        $this->editCityName = $data->city_name;
        $this->regionIdUpdate = $data->region_id;
    }


    public function update()
    {
        if (Gate::denies('city.update')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }

        $this->validate([
            'regionIdUpdate' => ['required'],
            'editCityName' => [
                'required',
                Rule::unique('cities', 'city_name')->where(function ($query) {
                    return $query->where('region_id', $this->regionIdUpdate);
                }),

            ]
        ]);

        $data = City::findOrfail($this->cityId);
        $data->update([
            'city_name' => $this->editCityName,
            'region_id' => $this->regionIdUpdate,
        ]);

        $this->cancelEdit();

        $this->dispatch('refresh-city');
    }

    public function destroy($id)
    {
        if (Gate::denies('city.delete')) {
            abort(403, 'ليس لديك الصلاحية اللازمة');
        }

        DB::beginTransaction();

        try {
            City::destroy($id);
            DB::commit();
            $this->dispatch('refresh-city');
        } catch (\Exception $e) {
            FlashMsgTraits::created($msgType = 'error', $msg = 'لا يمكن حذف قيمة مرتبطة ببيانات اخرى');
            DB::rollBack();
        }
    }

    public function cancelEdit()
    {
        $this->reset('cityId');
    }
    public function render()
    {

        $cities = AddressNameVw::groupby('city_id')
            ->orderBy('city_id', 'DESC')
            ->NameSearch($this->search)
            ->RegionListSearch($this->regionIdSearch)
            ->paginate($this->perPage);

        $regions =  CacheModelServices::getRegionVwData();


        return view('livewire.addresses-module.city-resource', compact('regions', 'cities'));
    }
}
