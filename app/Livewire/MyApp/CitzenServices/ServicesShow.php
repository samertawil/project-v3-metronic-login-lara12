<?php

namespace App\Livewire\MyApp\CitzenServices;

use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Computed;

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
      
        $getIndex=new ServicesIndex();
        $data= $getIndex->services($this->servicesId);
        return $data;
    }

    public function render(): View
    {
        $title="عرض تفصيل الخدمة";
        return view('livewire.my-app.citzen-services.services-show')->layoutData(['title'=>$title,'pageTitle'=>$title]);
    }
}
