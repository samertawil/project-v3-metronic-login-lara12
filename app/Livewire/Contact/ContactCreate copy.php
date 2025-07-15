<?php

namespace App\Livewire\contact;


use App\Models\Status;
use App\Models\Address;
use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Modelable;
use App\Traits\UploadingFilesTrait;
use App\Services\CacheModelServices;
use Illuminate\Support\Facades\Auth;
use App\Services\CacheStatusModelServices;
use Spatie\LivewireFilepond\WithFilePond;

class ContactCreate extends Component
{

    protected  $listeners = ['address-property' => 'getAddressProp'];
    use UploadingFilesTrait;
    use WithFileUploads;
    use WithFilePond;

    public $full_name;
    public $short_description;
    public $phone_primary;
    public $phone_secondary;
    public $work_phone_primary;
    public $work_phone_secondary;
    public $identity_number;
    public $nick_name;
    public $fname;
    public $sname;
    public $tname;
    public $lname;
    public $responsible;
    public $address_name;
    public $note;
    public $image1 = 'http://127.0.0.1:8000/template-assets/valex/img/faces/5.jpg';

    public  $region_id = [];
    public  $city_id;
    public  $neighbourhood_id;
    public  $location_id;
    public $address_type;
    public $address_specific;
    public $notes;
    public $description;
    public $ContactTypeToshow = 1236;
    public $contact_type = 17;
    public $contactImage;

    public $attributeColumn = [];   // dropdown value
    public $all_templates;
    public $attributeValue = [''];
    public $saved = FALSE;
    public $properties;
    public $profile_image;

    // public $attributeValue0;
    // public $attributeValue1;
    // public $attributeValue2;
    // public $attributeValue3;
    // public $attributeValue4;


    public function getAddressProp($value)
    {


        $this->region_id = ($value['region_id']);
        $this->city_id = ($value['city_id']);
        $this->neighbourhood_id = ($value['neighbourhood_id']);
        $this->location_id = ($value['location_id']);
        $this->address_specific = ($value['address_specific']);
        $this->notes = ($value['notes']);
        $this->address_type = ($value['address_type']);
    }

    public function mount()
    {

        $this->all_templates = Status::where('p_id_sub', config('myConstants.attributeColumn'))->get();
    }

    // public function updatedFname($prop)
    // {
    //     if(empty( $this->full_name)) {
    //         dd($prop);
    //     }


    // }

    public function store()
    {

        $x1=[];
       

        $this->validate([
          
            'contact_type' => ['required', 'exists:statuses,id'],
            'fname' => ['required_if:contact_type,16'],
            'lname' => ['required_if:contact_type,16'],
            'phone_primary' => ['required', 'min_digits:10', 'max_digits:15', 'numeric'],
            'full_name' => ['required'],
            'profile_image' => 'nullable|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
        ]);
 
        $attchments =  UploadingFilesTrait::uploadSingleFile($this->profile_image, 'contactProfile', 'public');

        // if ($this->attributeColumn) {

        //     foreach ($this->attributeColumn as $key => $value) {


        //         if ($value == 'Email') {


        //             $this->attributeValue0 = $this->attributeValue[$key];
        //             $this->attributeValue1 = $this->attributeValue[$key];
        //             $this->attributeValue2 = $this->attributeValue[$key];
        //             $this->attributeValue3 = $this->attributeValue[$key];
        //             $this->attributeValue4 = $this->attributeValue[$key];

        //             $this->validate(["attributeValue" . $key => ['required', 'email'],]);  //ok

        //         }
        //     }


        //     foreach ($this->attributeColumn as $key => $value) {
        //         $x1[$value] =  $this->attributeValue[$key];
        //     }
        // }

        DB::beginTransaction();
        try {

            $contactId =  Contact::create([
                'contact_type' => $this->contact_type,
                'identity_number' => $this->identity_number,
                'full_name' => $this->full_name,
                'nick_name' => $this->nick_name,
                'fname' => $this->fname,
                'sname' => $this->sname,
                'tname' => $this->tname,
                'lname' => $this->lname,
                'responsible' => $this->responsible,
                'short_description' => $this->short_description,
                'description' => $this->description,
                'phone_primary' => $this->phone_primary,
                'phone_secondary' => $this->phone_secondary,
                'work_phone_primary' => $this->work_phone_primary,
                'work_phone_secondary' => $this->work_phone_secondary,
                'note' => $this->note,
                'attchments' => $attchments,
                'properties' =>  $x1,


            ]);

            // foreach ($this->region_id as $key => $value) {
            //     Address::create([
            //         'region_id' => $this->region_id[$key],
            //         'city_id' => $this->city_id[$key],
            //         'neighbourhood_id' => $this->neighbourhood_id[$key] ?? null,
            //         'location_id' => $this->location_id[$key] ?? null,
            //         'address_specific' => $this->address_specific[$key] ?? null,
            //         'address_name' => 'عنوان',
            //         'address_type' => $this->address_type[$key],
            //         'user_id' => Auth::id(),
            //         'notes' => $this->notes[$key] ?? null,
            //         'contact_id' => $contactId->id,

            //     ]);
            // }

            DB::commit();

            FlashMsgTraits::created();

            $this->reset();
        } catch (\Exception $e) {

            DB::rollBack();

            FlashMsgTraits::created($msgType = 'error', $msg = $e->getMessage());

            return $e;
        }
    }
    public function contactType()
    {
        $this->ContactTypeToshow = $this->contact_type;
    }



    public function addQuestion()
    {
        $this->attributeValue[] = '';
    }



    public function removeQuestion($index)
    {
        unset($this->attributeValue[$index]);
        $this->attributeValue = array_values($this->attributeValue);
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
        $statuses = CacheStatusModelServices::getData();
        $regions =  CacheModelServices::getRegionVwData();


        return view('livewire.contact.contact-create', compact('statuses', 'regions',))->layoutData(['pageTitle' => $pageTitle, 'title' => $pageTitle]);
    }
}
