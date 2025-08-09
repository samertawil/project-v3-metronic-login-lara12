<?php

namespace App\Livewire\CitzenServices;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CitzenServices;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class Details extends Component
{
    use WithFileUploads;


    public int $editServicesId;
    public string $conditions;
    public string $description;
    public string $note;
    #[Validate(['date_format:Y-m-d'])]
    public mixed $url_active_from_date;
    #[Validate(['after_or_equal:now', 'date_format:Y-m-d'])]
    public mixed $url_active_to_date;
    public string $url;
    public string $route_name;
    public string $Responsible;
    public mixed $logo1;
    #[Validate(['logo1_1.*' => 'image|max:2048'])]
    public mixed $logo1_1;
    public mixed $card_header;
    #[Validate(['card_header_1' => 'image|max:2048'])]
    public mixed $card_header_1;
    public int $goEdit = 0;
    public mixed $dataToEdit;
    public string $teal;
    public int $home_page_order;
    public string $deactive_note;
    public mixed $properties = [];
   



    public function mount(int $id): void
    {


        $this->editServicesId = $id;

        $data = ServicesIndex::services($this->editServicesId);

        $this->dataToEdit = $data;

        $this->conditions = $data->conditions;
        $this->description = $data->description;
        $this->note = $data->note;
        $this->url_active_from_date = $data->url_active_from_date;
        $this->url_active_to_date = $data->url_active_to_date;
        $this->url = $data->url;
        $this->route_name = $data->route_name;
        $this->Responsible = $data->Responsible;
        $this->logo1 = $data->logo1;
        $this->card_header = $data->card_header;
        $this->teal = $data->teal;
        $this->home_page_order = $data->home_page_order;
        $this->deactive_note = $data->deactive_note;
        $this->properties = $data->properties;
    }



    public function edit(): void
    {
        $this->goEdit = 1;


        $this->conditions = $this->dataToEdit->conditions;
        $this->description = $this->dataToEdit->description;
        $this->note = $this->dataToEdit->note;
        $this->url_active_from_date = $this->dataToEdit->url_active_from_date;
        $this->url_active_to_date = $this->dataToEdit->url_active_to_date;
        $this->url = $this->dataToEdit->url;
        $this->route_name = $this->dataToEdit->route_name;
        $this->Responsible = $this->dataToEdit->Responsible;
        $this->logo1 = $this->dataToEdit->logo1;
        $this->card_header = $this->dataToEdit->card_header;
        $this->home_page_order = $this->dataToEdit->home_page_order;
        $this->teal = $this->dataToEdit->teal;
        $this->deactive_note = $this->dataToEdit->deactive_note;
        // $this->properties = $this->dataToEdit->properties;
    }

    public static function rules(mixed $id = ''): mixed
    {
        return [

            "route_name" => ['required', Rule::unique('citzen_services')->ignore($id)],


        ];
    }

    public function update(): void
    {

        //    $this->validate($this->rules($this->editServicesId));

        $this->validate([
            "route_name" => ['required', Rule::unique('citzen_services')->ignore($this->editServicesId)],
            'card_header_1' => 'nullable|image|max:1024',
            'logo1_1.*' => 'nullable|image|max:1024',
            'url_active_from_date' => 'nullable|date_format:Y-m-d',
            'url_active_to_date' => 'nullable|after_or_equal:now|date_format:Y-m-d',
        ]);

        $logo1 = $this->dataToEdit->logo1;


        if ($this->logo1_1) {

            $logo1 =  UploadingFilesTrait::uploadsFiles($this->logo1_1, 'logo1', 'public');

            if ($this->dataToEdit->logo1) {
                $logo1 = array_merge($logo1, $this->dataToEdit->logo1);
            }
        }

        $card_header_1 = $this->card_header;

        if ($this->card_header_1) {

            $card_header_1 =  UploadingFilesTrait::uploadSingleFile($this->card_header_1, 'card_header', 'public');
        }

        $this->dataToEdit->update([
            'conditions' => $this->conditions,
            'description' => $this->description,
            'note' => $this->note,
            'url_active_from_date' => $this->url_active_from_date,
            'url_active_to_date' => $this->url_active_to_date,
            'url' => $this->url,
            'route_name' => $this->route_name,
            'Responsible' => $this->Responsible,
            'home_page_order' => $this->home_page_order,
            'teal' => $this->teal,
            'deactive_note' => $this->deactive_note,
            'logo1' => $logo1,
            'card_header' =>   $card_header_1,

        ]);

        $this->cancelEdit();
    }

    public function cancelEdit(): void
    {

        $this->goEdit = 0;
    }


    public function deleteAttchment(mixed $key): void
    {

        $data = CitzenServices::Where('id', $this->editServicesId)->first();

        if($data) {

        $array =  $data->logo1;

        $deleteFromDisk = $array[$key]??[];

        unset($array[$key]);

        $data->update([
            'logo1' => $array,
        ]);

        Storage::disk('public')->delete($deleteFromDisk);

        $this->cancelEdit();
    }

    }


    public function deleteCard_header(): void
    {

        $data = CitzenServices::Where('id', $this->editServicesId)->first();

        if($data) {

        
          $deleteFromDisk = $data->card_header??[];

        $data->update([
            'card_header' => null,
        ]);

        Storage::disk('public')->delete($deleteFromDisk);

        $this->cancelEdit();
    }
    }


    public function render(): View
    {

        $title = __('customTrans.services managment');
        return view('livewire.citzen-services.details')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
