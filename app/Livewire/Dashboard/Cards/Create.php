<?php

namespace App\Livewire\Dashboard\Cards;

use App\Models\Card;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Traits\UploadingFilesTrait;
use Spatie\LivewireFilepond\WithFilePond;

class Create extends Component
{
    use  WithFileUploads;
    use  WithFilePond;

 
 
    #[Validate(['required'])]
    public $card_title;
    public $card_text ;
    #[Validate(['required'])]
    public $active = 1;
    public $status_id;
    public $card_url  ;
     public $file;
    public $upload;


    public static function rules(): array
    {
        return [
            'file' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
        ];
    }

    public function updatedFile()
    {
        $this->validate($this->rules());

      
    }


    public function store()
    {
         $this->validate();
      
       $file=  UploadingFilesTrait::uploadSingleFile($this->file,'cards','website');
         Card::create([
            'card_title' => $this->card_title,
            'card_text' => $this->card_text,
            'card_img' => $file,
            'active' => $this->active,
            'status_id' => $this->status_id,
            'card_url' => $this->card_url,
        ]);
       
         $this->dispatch('pondReset');

    }



    public function render()
    {
        return view('livewire.dashboard.cards.create');
    }
}
