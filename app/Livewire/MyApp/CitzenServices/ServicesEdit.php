<?php

namespace App\Livewire\MyApp\CitzenServices;

use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithFileUploads;
use App\Models\CitzenServices;
use App\Traits\FlashMsgTraits;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Storage;
use App\Traits\MyApp\CitzenServicesTrait;
use Spatie\LivewireFilepond\WithFilePond;
use App\Services\MyApp\CitizenServicesRepository;

class ServicesEdit extends Component
{
    use WithFileUploads;
    use CitzenServicesTrait;
    use WithFilePond;
    use FlashMsgTraits;
    
    public $dataToupdate;
 
    public function mount(int $id): void
    {


        $this->editServicesId = $id;

        $getRepository= new CitizenServicesRepository();

        $x= $getRepository->getCachedCitizenServicesData();
    
        $data= $x->where('id',$this->editServicesId)->first();


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
        
       


    public function update(): mixed
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

        
        $dataColumn=[
            'id'=>$this->editServicesId,
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

        ];

         $getRepository = new CitizenServicesRepository();

         $getRepository->saveData($dataColumn);
        
         FlashMsgTraits::created('success','update');

       
         return to_route('app.citzen.services.index');
        
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
