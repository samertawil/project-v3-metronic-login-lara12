<?php

namespace App\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\Computed;

class ContactList extends Component
{
    public $val;

    public function goContactDetail($value) {

    $this->dispatch('list-contact-id',  id: $value);

     }

    public function updateFavorite($id, $newValue)
    {
         
        $data = $this->Contacts->findOrfail($id);

        $data->update([
            'isFavorite' => $newValue,
        ]);
        
    }


    #[Computed()]
    public function Contacts()
    {
        return Contact::get();
    }

    public function render()
    {

        $pageTitle = 'جهات الاتصال';
        return view('livewire.contact.contact-list')->layoutData(['title' => $pageTitle, 'pageTitle' => $pageTitle]);
    }
}
