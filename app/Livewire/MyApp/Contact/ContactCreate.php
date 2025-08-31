<?php

namespace App\Livewire\MyApp\contact;



use App\Models\Contact;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithFileUploads;
use App\Traits\FlashMsgTraits;
use Illuminate\Http\UploadedFile;
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

    public UploadedFile|null $profile_image=null;
    public int $contact_type=17;
    public string|null $full_name=null;
    public int $identity_number;
    public string $fname='';
    public string|null $sname=null;
    public string|null $tname=null;
    public string $lname='';
    public string $phone_primary='';
    public string|null $phone_secondary=null;
    public string|null $email=null;
    public string|null $website=null;
    public mixed $connect_ways =[] ;
    public int|null $address_type=null;
    public int|null $region_id=null;
    public int|null $city_id=null;
    public int|null $neighbourhood_id=null;
    public int|null $location_id=null;
    public mixed $contactImage;

    public bool $personalSide=true;

   
    public function updatedregionId(int $prop): void
    {
        
        $this->region_id = $prop;
    }

    public function updatedCityId(int $prop): void
    {

        $this->city_id = $prop;
    }


    public function updatedNeighbourhoodId(int $prop): void
    {

        $this->neighbourhood_id = $prop;
    }

 
   
    public function updatedContactType(int $prop): void{
       if($prop==17) {
        $this->personalSide=true;
       } else {
        $this->personalSide=false;
       }
    }



    public function store(): void
    {
        
     
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

 
    public function chkExists(mixed $value, string $property): void
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
    public  function Contacts(): void
    {

          Contact::get();
    }

    public function render(): View
    {
         
        $pageTitle = 'جهات الاتصال';

       $statuses= CacheStatusModelServices::getData();
       $settings=CacheSettingModelServices::getData();

     
       $regions = CacheModelServices::getRegionVwData();
       $cities  = CacheModelServices::getCityTableData();
       $neighbourhoods = CacheModelServices::getNeighbourhoodTableData();
       $locations = CacheModelServices::getLocationTableData();
 

        return view('livewire.my-app.contact.contact-create',compact('statuses','settings','regions', 'cities', 'neighbourhoods' ,'locations'))->layoutData(['pageTitle' => $pageTitle, 'title' => $pageTitle]);
    }
}
