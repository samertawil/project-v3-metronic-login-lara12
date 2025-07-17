<?php

namespace App\Livewire\contact;



use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use App\Services\CacheModelServices;
use Spatie\LivewireFilepond\WithFilePond;
use App\Services\CacheStatusModelServices;
use App\Services\CacheSettingModelServices;

class ContactCreate extends Component
{
 
 
    use UploadingFilesTrait;
    use WithFileUploads;
    use WithFilePond;

    public $profile_image ="";
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
    public $contactImage;

    public $personalSide=true;

   
    public function updatedregionId($prop)
    {
        
        $this->region_id = $prop;
    }

    public function updatedCityId($prop)
    {

        $this->city_id = $prop;
    }


    public function updatedNeighbourhoodId($prop)
    {

        $this->neighbourhood_id = $prop;
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
        
        // dd($this->all());

        $this->validate([
           
            'fname' => ['required'],
            'lname' => ['required'],
            'phone_primary' => ['required', 'min_digits:10', 'max_digits:15', 'numeric'],
            'profile_image' => 'nullable|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
        ]);

        // 

        $image='';
        if($this->profile_image) {
            $image=UploadingFilesTrait::uploadSingleFile($this->profile_image,'contactProfile','public' );
        }
      
        
     Contact::create([
                'contact_type' => 16,
                'identity_number' => $this->identity_number,
                'full_name' => $this->full_name,
                'fname' => $this->fname,
                'sname' => $this->sname,
                'tname' => $this->tname,
                'lname' => $this->lname,
                'profile_image'=>$image,
                'phone_primary' => $this->phone_primary,
                'phone_secondary' => $this->phone_secondary,
                'region'=>$this->region_id,
                'city'=>$this->city_id,
                'niberhood'=>$this->neighbourhood_id,
                'location'=>$this->location_id,

             
            ]);    

            FlashMsgTraits::created();

            $this->reset();
       
    }

 
    public function chkExists($value, $property)
    {
     
        
        $existedData = Contact::where($property, $value)->first();
       
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

    

    // #[Computed]
    public  function Contacts()
    {

          Contact::get();
    }

    public function render()
    {
         
        $pageTitle = 'جهات الاتصال';

       $statuses= CacheStatusModelServices::getData();
       $settings=CacheSettingModelServices::getData();

     
       $regions = CacheModelServices::getRegionVwData();
       $cities  = CacheModelServices::getCityTableData();
       $neighbourhoods = CacheModelServices::getNeighbourhoodTableData();
       $locations = CacheModelServices::getLocationTableData();
 

        return view('livewire.contact.contact-create',compact('statuses','settings','regions', 'cities', 'neighbourhoods' ,'locations'))->layoutData(['pageTitle' => $pageTitle, 'title' => $pageTitle]);
    }
}
