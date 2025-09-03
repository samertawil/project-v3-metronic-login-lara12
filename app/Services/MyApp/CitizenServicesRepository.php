<?php

namespace App\Services\MyApp;

use App\Models\CitzenServices;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Collection;


class CitizenServicesRepository
{

    public  function getCitizenServicesData(int|null $id = null)
    {
        if ($id) {
            $data = CitzenServices::findOrfail($id);
            return $data;
        }
        $data = CitzenServices::get();
        return $data;
    }


    public function getCachedCitizenServicesData(): Collection
    {

        $data = Cache::rememberForever('citizen-services-data', function () {
            return  CitzenServices::get();
        });

        /** @var Collection $data */
        return $data;
    }

    public function saveData(array $data)
    {

        if (isset($data['id'])) {

            $service = CitzenServices::find($data['id']);
            $service->update($data);

        } else {
            CitzenServices::create($data);
        }
    }
}
