<?php

namespace App\Livewire\contact;



use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Spatie\LivewireFilepond\WithFilePond;
use App\Services\CacheStatusModelServices;
use App\Services\CacheSettingModelServices;

class ContactCreate extends Component
{
   protected  $listeners = ['address-property' => 'getAddressProp' ];
 
    use UploadingFilesTrait;
    use WithFileUploads;
    use WithFilePond;

    public $profile_image ;
    public $contact_type=17;
    public $full_name;
    public $identity_number;
    public $fname;
    public $sname;
    public $tname;
    public $lname;
    public $phone_primary;
    public $phone_secondary;
    public $email;
    public $website;
    public $connect_ways =[] ;
    public $address_type;
    public $region_id;
    public $city_id;
    public $neighbourhood_id;
    public $location_id;


    // public $short_description;
    // public $responsible;
    // public $address_name;
    // public $note;
    // public $ContactTypeToshow = 1236;

     
    public $contactImage;

    public $personalSide=true;

 
    public function getAddressProp($value)
    {

        dd($value);
        $this->region_id = ($value['region_id']);
        $this->city_id = ($value['city_id']);
        $this->neighbourhood_id = ($value['neighbourhood_id']);
        $this->location_id = ($value['location_id']);
        $this->address_specific = ($value['address_specific']);
        $this->notes = ($value['notes']);
        $this->address_type = ($value['address_type']);
    }

    public function updatedContactType($prop){
       if($prop==17) {
        $this->personalSide=true;
       } else {
        $this->personalSide=false;
       }
    }

    public function store()
    {
        dd($this->all());

        $this->validate([
          
          
            'fname' => ['required'],
            'lname' => ['required'],
            'phone_primary' => ['required', 'min_digits:10', 'max_digits:15', 'numeric'],
            'profile_image' => 'nullable|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
        ]);
 
     Contact::create([
                'contact_type' => 16,
                'identity_number' => $this->identity_number,
                'full_name' => $this->full_name,
                'fname' => $this->fname,
                'sname' => $this->sname,
                'tname' => $this->tname,
                'lname' => $this->lname,
               
                'phone_primary' => $this->phone_primary,
                'phone_secondary' => $this->phone_secondary,
             
            ]);    

            FlashMsgTraits::created();

            $this->reset();
       
    }



    public function chkExists($value, $property)
    {

        $existedData = $this->Contacts->where($property, $value)->first();

        if ($property === 'phone_primary' && $existedData) {


            $this->dispatch(
                'alert',
                type: 'question',
                title: 'هاتف مكرر',
                text: ' الرقم ' . $this->phone_primary . ' موجود مسبقا ومسجل باسم '  .  $existedData->full_name,
                confirmButtonText: 'اغلاق'
            );
        } elseif ($property === 'full_name' && $existedData) {


            $this->dispatch(
                'alert',
                type: 'question',
                title: ' الاسم مكرر ',
                text: ' الاسم موجود مسبقا  '  .  $existedData->full_name,
                confirmButtonText: 'اغلاق'
            );
        }
    }

    

    #[Computed]
    public  function Contacts()
    {

        return Contact::get();
    }

    public function render()
    {
         
        $pageTitle = 'جهات الاتصال';

       $statuses= CacheStatusModelServices::getData();
       $settings=CacheSettingModelServices::getData();

        return view('livewire.contact.contact-create',compact('statuses','settings'))->layoutData(['pageTitle' => $pageTitle, 'title' => $pageTitle]);
    }
}
