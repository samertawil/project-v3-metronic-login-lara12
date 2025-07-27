<?php

namespace App\Livewire\AddressesModule;



use Exception;
use App\Models\Region;
use Livewire\Component;
use App\Traits\FlashMsgTraits;
use Illuminate\Support\Facades\DB;
use App\Services\CacheModelServices;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class RegionResource extends Component
{


    public string $region_name;

    public int $regionId;

    public string $regionName;

    public function store(): void
    {

        
        if( Gate::denies('region.create')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
        }


        $this->validate([
            'region_name' => ['required', 'unique:regions,region_name'],
        ]);


        Region::create($this->all());

        $this->dispatch('refresh-region');
      
        $this->reset('region_name');
       
    }

    public function edit(int $id): void
    {
        if( Gate::denies('region.update')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
        }


        $this->regionId = $id;

        $data = Region::findOrfail($id);

        $this->regionName = $data->region_name;
    }

    public function update(): void
    {

        if( Gate::denies('region.update')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
        }

        $data = Region::findOrfail($this->regionId);

        $this->validate([
            'regionName' => ['required', 'unique:regions,region_name'],
        ]);

        $data->update([
            'region_name'=>$this->regionName,
        ]);
        
         $this->dispatch('refresh-region');

         $this->cancelEdit();
    }

    public function cancelEdit(): void
    {

        $this->reset('regionId');
    }

    public function destroy(int $id): void
    {

        if( Gate::denies('region.delete')) {
            abort(403,'ليس لديك الصلاحية اللازمة');
        }


        DB::beginTransaction();
        try {

            Region::destroy($id);

            DB::commit();

            $this->dispatch('refresh-region');

        } catch (Exception $e) {

            if ($e->getCode()  == 23000) {

                FlashMsgTraits::created($msgType = 'error', $msg = 'لا يمكن حذف قيمة مرتبطة ببيانات اخرى');
            } else {

                FlashMsgTraits::created($msgType = 'error', $msg =$e->getMessage());
            }

            DB::rollBack();
        }
    }

    public function render(): View
    {


        $regions =  CacheModelServices::getRegionVwData();

        return view('livewire.addresses-module.region-resource', compact('regions'));
    }
}
