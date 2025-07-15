<?php

namespace App\Livewire\Dashboard\Cards;

use App\Models\Card;
use App\Models\Status;
use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Storage;
use Spatie\LivewireFilepond\WithFilePond;

class Resource extends Component
{
    use SortTrait;
    use WithPagination;
    use WithFileUploads;
    use  WithFilePond;

    public  $sortBy = 'created_at';
    protected $paginationTheme = 'bootstrap';
    public $editCardId;
    #[Url()]
    public $perPage = 10;
    #[Url()]
    public $search = '';
    #[Validate(['required'])]
    public $card_title = '';
    public $card_text = '';
    public $card_url = '';
    #[Validate(['required'])]
    public $card_img;
    #[Validate(['required'])]
    public $active = 1;
    public $status_id;
    public $file;


    #[Computed()]
    public  function cards()
    {
        return Card::with('statusname')
            ->orderBy($this->sortBy, $this->sortdir)
            ->paginate($this->perPage);
    }

    #[Computed()]
    public static function status()
    {
        return Status::get();
    }

    public function edit($id)
    {

        $this->editCardId = $id;
        $data = $this->Cards->find($id);

        $this->card_title = $data->card_title;
        $this->card_text = $data->card_text;
        $this->card_url = $data->card_url;
        $this->card_img = $data->card_img;
        $this->active = $data->active;
        $this->status_id = $data->status_id;
    }


    public function updatedFile()
    {
        $this->validate(Create::rules());
    }

    public function update()
    {


        $this->validate();

        $data = $this->Cards->find($this->editCardId);

        $file =  UploadingFilesTrait::uploadSingleFile($this->file, 'cards', 'website');

        $data->update([
            'card_title' => $this->card_title,
            'card_text' => $this->card_text,
            'card_url' => $this->card_url,
            'active' => $this->active,
            'status_id' => $this->status_id,
            'card_img' => $file,
        ]);
    }

    public function destroy($id)
    {
        $data = $this->Cards->find($id);

        if ( $data->card_img ) {
           
            Storage::disk('website')->delete($data->card_img);
            
        }

       $data->delete();
    }

    public function render()
    {
    
        return view('livewire.dashboard.cards.resource');
    }
}
