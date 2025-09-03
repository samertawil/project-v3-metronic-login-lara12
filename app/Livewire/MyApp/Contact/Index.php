<?php

namespace App\Livewire\MyApp\Contact;

use Livewire\Component;
use App\Traits\SortTrait;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use App\Services\MyApp\ContactsServicesRepository;

class Index extends Component
{
    use SortTrait;
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    #[Url()]
    public int $perPage = 10;
    #[Url()]
    public string|null $search=''  ;
   
    public string $sortBy='full_name';


    #[Computed()]
    public function Contacts() 
    {

        $getRepository=new ContactsServicesRepository();
        
        return $getRepository->getContactData($this->search, $this->perPage);
     
    }

    public function render(): View
    {

        $pageTitle = 'جهات الاتصال';
        return view('livewire.my-app.contact.index')->layoutData(['title' => $pageTitle, 'pageTitle' => $pageTitle]);
    }
}
