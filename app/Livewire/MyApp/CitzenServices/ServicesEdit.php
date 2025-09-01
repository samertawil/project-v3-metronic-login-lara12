<?php

namespace App\Livewire\MyApp\CitzenServices;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\CitzenServices;
use App\Traits\MyApp\CitzenServicesTrait;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Spatie\LivewireFilepond\WithFilePond;

class ServicesEdit extends Component
{
    use WithFileUploads;
    use CitzenServicesTrait;
    use WithFilePond;

    public $dataToupdate;
 
    public function mount(int $id): void
    {


        $this->editServicesId = $id;

         $getData=new ServicesIndex();
         $data= $getData->services($this->editServicesId);
         $this->dataToupdate=$data;
        
        $this->num = $data->num;
        $this->name = $data->name;
        $this->active = $data->active;
        $this->conditions = $data->conditions;
        $this->description = $data->description;
        $this->note = $data->note;
        $this->url_active_from_date = $data->url_active_from_date;
        $this->url_active_to_date = $data->url_active_to_date;
        $this->url = $data->url;
        $this->route_name = $data->route_name;
        $this->responsible = $data->responsible;
        $this->services_images_path = $data->services_images??[];
        $this->card_header_path = $data->card_header??'';
        $this->teal = $data->teal;
        $this->home_page_order = $data->home_page_order;
        $this->deactive_note = $data->deactive_note;
        
    }

 


    public function update(): void
    {
       
          $this->validate();
        
         

        if (is_array($this->services_images) && !empty($this->services_images)) {

            $services_images =  UploadingFilesTrait::uploadsFiles($this->services_images, 'services_images', 'public');

            $services_images = array_merge($services_images, $this->services_images_path);
            
        } else {
            $services_images=$this->services_images_path;
        }

        

        if (!empty($this->card_header)) {
          
            $card_header =  UploadingFilesTrait::uploadSingleFile($this->card_header, 'card_header', 'public');
        } else {
            $card_header = $this->card_header_path;
        }


        $this->dataToupdate->update([
            'name'=>$this->name,
            'num'=>$this->num,
            'active'=>$this->active,
            'conditions' => $this->conditions,
            'description' => $this->description,
            'note' => $this->note,
            'url_active_from_date' => $this->url_active_from_date,
            'url_active_to_date' => $this->url_active_to_date,
            'url' => $this->url,
            'route_name' => $this->route_name,
            'responsible' => $this->responsible,
            'home_page_order' => $this->home_page_order,
            'teal' => $this->teal,
            'deactive_note' => $this->deactive_note,
            'services_images' => $services_images,
            'card_header' =>  $card_header,

        ]);
        
    }

 

    public function deleteServicesImages(mixed $key): void
    {
     
          if ((!empty($this->services_images_path)) &&  $this->services_images_path[$key]  ) {

       
           Storage::disk('public')->delete($this->services_images_path[$key]);

           unset($this->services_images_path[$key]);
          
           CitzenServices::findOrfail($this->editServicesId)->update([
            'services_images' =>$this->services_images_path,
           ]);

          }
   
    }


    public function deleteCardHeader(): void
    {

       
        if ( !empty($this->card_header_path) ) {

           
            Storage::disk('public')->delete($this->card_header_path);

            CitzenServices::findOrfail($this->editServicesId)->update([
                'card_header' =>null,
               ]);

   
        }
    }


    public function render(): View
    {

        $title = __('customTrans.services managment');
        return view('livewire.my-app.citzen-services.services-edit')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
