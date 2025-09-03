<?php

namespace App\Livewire\MyApp\CitzenServices;

use Livewire\Component;
use App\Traits\SortTrait;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;
use App\Services\MyApp\CitizenServicesRepository;

class ServicesIndex extends Component
{

    use SortTrait;
    use FlashMsgTraits;
    use WithPagination;

    #[Url()]
    public string $sortBy = 'created_at';
    
    protected string $paginationTheme = 'bootstrap';

    #[Url()]
    public int $perPage = 10;
    #[Url()]
    public string $search;
    public int $editServicesId;
    #[Validate('required')]
    public string $name = '';
    #[Validate('required')]
    public int $home_page_order;
    #[Validate('required|in:0,1')]
    public mixed $active = '';
    #[Validate(['date_format:Y-m-d'])]
    public mixed $active_from_date;
    #[Validate(['after_or_equal:now', 'date_format:Y-m-d'])]
    public mixed $active_to_date;
 

    #[Computed()]
    public  function services(): mixed
    {
        $getRepository= new CitizenServicesRepository();

        $data = $getRepository->getCachedCitizenServicesData() ;

        return $data;
 
    }


    public function destroy(int $id): void
    {

        $getRepository=new CitizenServicesRepository();

        $data=$getRepository->getCitizenServicesData($id);

        
        if ( ! empty($data->services_images)) {
            foreach ($data->services_images as $file) {
                Storage::disk('public')->delete($file);
            }
        }

         
        if ( $data->card_header) {
            
                Storage::disk('public')->delete($data->card_header);
           
        }

        $data->delete();
    }



    public function render(): View
    {

        $title = __('customTrans.services managment');
        return view('livewire.my-app.citzen-services.services-index')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
