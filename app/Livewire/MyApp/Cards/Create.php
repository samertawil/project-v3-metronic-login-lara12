<?php

namespace App\Livewire\MyApp\Cards;

use App\Models\Card;
use Livewire\Component;
use Illuminate\View\View;
use App\Traits\FlashMsgTraits;
use Illuminate\Http\UploadedFile;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Spatie\LivewireFilepond\WithFilePond;
use App\Services\CacheStatusModelServices;
use Illuminate\Database\Eloquent\Collection;

class Create extends Component
{
    use  WithFilePond;


    public string $card_title;
    public UploadedFile|null $card_img = null;
    public string $card_text;
    public mixed $active = true;
    public int $card_use_in;
    public string $card_url;
    public mixed $publish_date;


    public function mount(): void
    {
        $this->publish_date = \Carbon\Carbon::now()->format('Y-m-d');
    }

    public  function rules(): mixed
    {
        return [
            'card_img' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
            'active' => ['required'],
            'card_title' => ['required'],
            'card_use_in' => ['required'],
            'publish_date' => ['required', 'date', 'date_format:Y-m-d'],
        ];
    }


    public function store(): void
    {

        $this->validate();

        $image = "";

        if ($this->card_img) {
            $image =  UploadingFilesTrait::uploadSingleFile($this->card_img, 'cards', 'public');
        }



        Card::create([
            'card_title' => $this->card_title,
            'card_text' => $this->card_text,
            'card_img' => $image ?? "",
            'active' => $this->active,
            'card_use_in' => $this->card_use_in,
            'card_url' => $this->card_url,
            'publish_date' => $this->publish_date,
        ]);


        $this->dispatch('reload');

        FlashMsgTraits::created();
    }



    #[Computed()]
    public  function statuses(): Collection
    {

        $data = new CacheStatusModelServices();
        
        /** @var int $galarySystem */
          $galarySystem = config('myConstants.galarySystem');

        return $data->statusesPSubId($galarySystem);
    }

    public function render(): View
    {
        return view('livewire.my-app.cards.create');
    }
}
