<?php

namespace App\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;
use App\Traits\SortTrait;
use Illuminate\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

class Index extends Component
{
    use SortTrait;
    use WithPagination;
    protected string $paginationTheme = 'bootstrap';

    #[Url()]
    public $perPage = 10;
    #[Url()]
    public $search = '';
    public $sortBy='full_name';


    #[Computed()]
    public function Contacts()
    {
        return Contact::
        SearchName($this->search)
        ->orderby($this->sortBy,$this->sortdir)
        ->paginate($this->perPage);
    }

    public function render(): View
    {

        $pageTitle = 'جهات الاتصال';
        return view('livewire.contact.index')->layoutData(['title' => $pageTitle, 'pageTitle' => $pageTitle]);
    }
}
