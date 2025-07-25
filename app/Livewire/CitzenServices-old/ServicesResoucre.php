<?php

namespace App\Livewire\CitzenServices;

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
    public $url_active_to_date;
    public $active_from_date;
    public $active_to_date;
    #[Validate(['required'])]
    public $active = 1;
    public $description;
    public $note;
    public $conditions;
    public $route_name;

    #[Validate(['logo1.*' => 'image|max:2048'])]
    public $logo1 = [];
    #[Validate(['logo2.*' => 'image|max:2048'])]
    public $logo2 = [];
    public $home_page_order;
    public $teal;
    public $deactive_note;
    protected $serviceId = 4;
    public $proparty;

    use WithFileUploads;

 

    protected  $listeners = ['citzen-services-properties' => 'getProp'];

    public function getProp($value)
    {

        $this->proparty = ($value['proparty']);
    }

    public function store()
    {
       
        $this->validate();
        $logo1 =  UploadingFilesTrait::uploadsFiles($this->logo1, 'logo1', 'public');
        $logo2 =  UploadingFilesTrait::uploadsFiles($this->logo2, 'logo2', 'public');

 
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
            'logo2' => $logo2,
            'properties' => $this->proparty,




        ]);

        FlashMsgTraits::created();
    }
    public function render(): View
    {
        $serviceActivation = CitzenServices::where('id', $this->serviceId)->where('active', true)->first();

        if (empty($serviceActivation)) {
            abort(404);
        }
        return view('livewire.citzen-services.services-resoucre');
    }
}
