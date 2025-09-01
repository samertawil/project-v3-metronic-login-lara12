<?php

namespace App\Livewire\MyApp\CitzenServices;

use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\CitzenServices;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ServicesIndex extends Component
{

    use SortTrait;
    use FlashMsgTraits;


    #[Url()]
    public string $sortBy = 'created_at';
    use WithPagination;
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
    public  function services(int|null $id = null)
    {
        if ($id) {
            $data = CitzenServices::find($id);
            return $data;
        }
        $data = CitzenServices::get();
        return $data;
    }


    public function destroy(int $id): void
    {

        $data = self::services($id);
        if ($data->logo1) {
            foreach ($data->logo1 as $file) {
                Storage::disk('public')->delete($file);
            }
        }

        $data->delete();
    }



    public function render(): View
    {
        
        $title = __('customTrans.services managment');
        return view('livewire.my-app.citzen-services.services-index')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
