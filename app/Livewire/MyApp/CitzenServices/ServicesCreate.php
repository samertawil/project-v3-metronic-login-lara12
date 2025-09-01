<?php

namespace App\Livewire\MyApp\CitzenServices;


use Livewire\Component;

use Illuminate\View\View;
use App\Models\CitzenServices;
use App\Traits\FlashMsgTraits;
use App\Traits\MyApp\CitzenServicesTrait;
use App\Traits\UploadingFilesTrait;
use Spatie\LivewireFilepond\WithFilePond;

class ServicesCreate extends Component
{
    use CitzenServicesTrait;
    use WithFilePond;

    public function mount(): void
    {
        $max = CitzenServices::max('num');
        $maxPageOrder = CitzenServices::max('home_page_order');


        // @phpstan-ignore binaryOp.invalid
        $this->maxNum = $max ?  $max + 1 : 1;
        $this->maxPageOrder = $maxPageOrder ? $maxPageOrder + 1 : 1;
    }





    public function store(): void
    {
        $this->validate();

        $services_images = null;

        if ($this->services_images) {
            $services_images =  UploadingFilesTrait::uploadsFiles($this->services_images, 'services_images', 'public');
        }

        $card_header = null;

        if ($this->card_header) {
            $card_header =  UploadingFilesTrait::uploadSingleFile($this->card_header, 'card_header', 'public');
        }


        CitzenServices::create([
            'num' => $this->num,
            'name' => $this->name,
            'url' => $this->url,
            'responsible' => $this->responsible,
            'url_active_from_date' => $this->url_active_from_date,
            'url_active_to_date' => $this->url_active_to_date,
            'active' => $this->active,
            'description' => $this->description,
            'note' => $this->note,
            'conditions' => $this->conditions,
            'route_name' => $this->route_name,
            'home_page_order' => $this->home_page_order,
            'teal' => $this->teal,
            'deactive_note' => $this->deactive_note,
            'services_images' => $services_images,
            'card_header' => $card_header,


        ]);

        FlashMsgTraits::created();

        $this->dispatch('reload');
    }



    public function render(): View
    {
        $title = __('customTrans.services managment');
        $serviceActivation = CitzenServices::where('id', $this->serviceId)->where('active', true)->first();

        // if (empty($serviceActivation)) {
        //     abort(404);
        // }

        return view('livewire.my-app.citzen-services.services-create')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
