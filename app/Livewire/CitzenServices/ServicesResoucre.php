<?php

namespace App\Livewire\CitzenServices;

use App\Models\Status;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CitzenServices;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Validate;
use App\Traits\UploadingFilesTrait;
use Illuminate\View\View;

class ServicesResoucre extends Component
{

    public $num;
    #[Validate(['required'])]
    public $name;
    public $url;
    public $status_id;
    public $Responsible;

    public $url_active_from_date;
    #[Validate(['after_or_equal:now', 'date_format:Y-m-d'])]
    public $url_active_to_date;

    public $active_from_date;
    #[Validate(['after_or_equal:now', 'date_format:Y-m-d'])]
    public $active_to_date;
    #[Validate(['required'])]
    public $active = 1;
    public $description;
    public $note;
    public $conditions;
    #[Validate(['unique:citzen_services,route_name'])]
    public $route_name;

    #[Validate(['logo1.*' => 'image|max:2048'])]
    public $logo1 = [];

    public $home_page_order;
    public $teal;
    public $deactive_note;
    protected $serviceId = 4;
    public $Card_header;



    use WithFileUploads;


    public function store()
    {

        $logo1 =  UploadingFilesTrait::uploadsFiles($this->logo1, 'logo1', 'public');
        $Card_header =  UploadingFilesTrait::uploadSingleFile($this->Card_header, 'Card_header', 'public');

        CitzenServices::create([
            'num' => $this->num,
            'name' => $this->name,
            'url' => $this->url,
            //  'status_id'=> $this->status_id,
            'Responsible' => $this->Responsible,
            'url_active_from_date' => $this->url_active_from_date,
            'url_active_to_date' => $this->url_active_to_date,
            'active_from_date' => $this->active_from_date,
            'active_to_date' => $this->active_to_date,
            'active' => $this->active,
            'description' => $this->description,
            'note' => $this->note,
            'conditions' => $this->conditions,
            'route_name' => $this->route_name,
            'home_page_order' => $this->home_page_order,
            'teal' => $this->teal,
            'deactive_note' => $this->deactive_note,
            'logo1' => $logo1,
            'card_header' => $Card_header,


        ]);

        FlashMsgTraits::created();

        $this->reset();
    }



    public function render(): View
    {
        $title = __('customTrans.services managment');
        $serviceActivation = CitzenServices::where('id', $this->serviceId)->where('active', true)->first();

        // if (empty($serviceActivation)) {
        //     abort(404);
        // }

        return view('livewire.citzen-services.services-resoucre')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
