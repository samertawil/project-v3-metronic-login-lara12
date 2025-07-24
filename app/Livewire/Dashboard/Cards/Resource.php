<?php

namespace App\Livewire\Dashboard\Cards;

use App\Models\Card;
 use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Storage;
use Spatie\LivewireFilepond\WithFilePond;
use App\Services\CacheStatusModelServices;

class Resource extends Component
{
    use SortTrait;
    use WithPagination;
    use WithFilePond;

    public  $sortBy = 'created_at';
    protected string $paginationTheme = 'bootstrap';



    #[Url()]
    public $perPage = 10;
    #[Url()]
    public $search = '';
    public $card_title = '';
    public $card_text = '';
    public $card_url = '';
    public $card_img;
    public $card_img_show;
    public $active;
    public $card_use_in;
    public $file;
    public $data;
    public $editCardId;

    protected $listeners=['refresh-card'=>'$refresh'];

    public function rules(): array
    {
        $rules = [

            'card_img' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
            'active' => ['required'],
            'card_title' => ['required'],
            'card_use_in' => ['required'],

        ];

        if (empty($this->card_img) &&  $this->data['card_img']) {
           
            unset($rules['card_img']); // Remove the email validation rule

        }
        
        return $rules;
    }


    #[Computed()]
    public  function cards()
    {
        return Card::with(['status:id,status_name'])
        
            ->orderBy($this->sortBy, $this->sortdir)
            ->paginate($this->perPage);
    }


    public function edit($id)
    {

        $this->editCardId = $id;
        $this->data = $this->Cards()->find($id);

        $this->card_title = $this->data->card_title;
        $this->card_text = $this->data->card_text;
        $this->card_url = $this->data->card_url;
        $this->card_img_show = $this->data->card_img;
        $this->active = $this->data->active;
        $this->card_use_in = $this->data->card_use_in;
    }


    
    public function update()
    {

     
         $this->validate();
      

        if ($this->card_img) {
            $image =  UploadingFilesTrait::uploadSingleFile($this->card_img, 'cards', 'public');
        } else {
            $image = $this->data['card_img'];
        }

       

        $this->data->update([
            'card_title' => $this->card_title,
            'card_text' => $this->card_text,
            'card_url' => $this->card_url,
            'active' => $this->active,
            'card_use_in' => $this->card_use_in,
            'card_img' => $image,
        ]);

      
        $this->dispatch('closeModel');

        FlashMsgTraits::created($msgType = 'success', $msg = 'update');

       
    }

    public function destroy($id)
    {
        $data = $this->Cards()->find($id);
       
        if ( $data->card_img ) {
           
            Storage::disk('website')->delete($data->card_img);
            
        }

       $data->delete();
    }

 

    

    #[Computed()]
    public  function statuses() {
        $data= CacheStatusModelServices::getData();
        $data=$data->select('status_name','id','p_id_sub')->Where('p_id_sub',config('StatusConstants.galarySystem'));
        return $data;
    }


    public function render()
    {
        $title=__('customTrans.Galary');
        $pageTitle=__('customTrans.Galary picture list') ;
        return view('livewire.dashboard.cards.resource')->layoutData(['title'=>$title,'pageTitle'=>$pageTitle]);
    }
}
