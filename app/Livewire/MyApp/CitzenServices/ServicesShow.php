<?php

namespace App\Livewire\MyApp\CitzenServices;

use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use App\Services\MyApp\CitizenServicesRepository;

class ServicesShow extends Component
{
    public int|null $servicesId = null;

    public function mount($id)
    {
        $this->servicesId = $id;
    }

    #[Computed()]
    public function services()
    {
        $getRepository= new CitizenServicesRepository();

        $data= $getRepository->getCachedCitizenServicesData();

       return $data->findOrfail($this->servicesId);

       
    }

    public function render(): View
    {
        $title="عرض تفصيل الخدمة";
        return view('livewire.my-app.citzen-services.services-show')->layoutData(['title'=>$title,'pageTitle'=>$title]);
    }
}
