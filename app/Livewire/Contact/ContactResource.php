<?php

namespace App\Livewire\contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Computed;
use App\Services\CacheStatusModelServices;
use Livewire\Attributes\Lazy;

class ContactResource extends Component
{

    public $ContactTypeToshow = 1236;
    public $contact_type;
    public $contactObject;
    public $address_specific;
    public $notes;
    public $description;
    public $note;



    public $editContact;



    public function contactType()
    {
        $this->ContactTypeToshow = $this->contact_type;
    }



     #[On('list-contact-id')]
    public function mount($id=null)
    {
       
        if(is_null($id)) {
            $id=$this->Contacts->first()->id ;
            
         }
        $contact = Contact::with(['contactTypeName'])->findOrfail($id);

        $this->contactObject = $contact;

        
    }

    
    #[Computed()]
    public function Contacts() {
       return Contact::get();
    }


    #[Computed()]
    public function Statuses() {
       return CacheStatusModelServices::getData();
    }



    public function render()
    {

    
        return view('livewire.contact.contact-resource');
    }
}
