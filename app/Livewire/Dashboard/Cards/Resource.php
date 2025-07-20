<?php

namespace App\Livewire\Dashboard\Cards;

use App\Models\Card;
 use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
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
    protected $paginationTheme = 'bootstrap';



    #[Url()]
    public $perPage = 10;
    #[Url()]
    public $search = '';
    public $card_title = '';
    public $card_text = '';
    public $card_url = '';
    public $card_img;
    public $card_img_show;
    public $active = 1;
    public $status_id;
    public $file;
    public $data;
    public $editCardId;

    public function rules(): array
    {
        $rules = [

            'card_img' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
            'card_title' => ['required'],
            'active' => ['required'],

        ];

        if (empty($this->card_img) &&  $this->data['card_img']) {
           
            unset($rules['card_img']); // Remove the email validation rule

        }
        
        return $rules;
    }


    #[Computed()]
    public  function cards()
    {
        return Card::with('statusname')
            ->orderBy($this->sortBy, $this->sortdir)
            ->paginate($this->perPage);
    }


    public function edit($id)
    {

        $this->editCardId = $id;
        $this->data = $this->Cards->find($id);

        $this->card_title = $this->data->card_title;
        $this->card_text = $this->data->card_text;
        $this->card_url = $this->data->card_url;
        $this->card_img_show = $this->data->card_img;
        $this->active = $this->data->active;
        $this->status_id = $this->data->status_id;
    }


    
    public function update()
    {

     
         $this->validate();
      
        // $data = $this->Cards->find($this->editCardId);


        if ($this->card_img) {
            $image =  UploadingFilesTrait::uploadSingleFile($this->card_img, 'cards', 'website');
        } else {
            $image = $this->data['card_img'];
        }

       

        $this->data->update([
            'card_title' => $this->card_title,
            'card_text' => $this->card_text,
            'card_url' => $this->card_url,
            'active' => $this->active,
            'status_id' => $this->status_id,
            'card_img' => $image,
        ]);

        $this->dispatch('closeModel');
    }

    public function destroy($id)
    {
        $data = $this->Cards->find($id);

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
