<?php

namespace App\Livewire\Dashboard\Cards;

use App\Models\Card;
use Livewire\Component;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Spatie\LivewireFilepond\WithFilePond;
use App\Services\CacheStatusModelServices;
use Illuminate\View\View;

class Create extends Component
{
    use  WithFilePond;


    public string $card_title;
    public mixed $card_img;
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

        $image =  UploadingFilesTrait::uploadSingleFile($this->card_img, 'cards', 'public');

        Card::create([
            'card_title' => $this->card_title,
            'card_text' => $this->card_text,
            'card_img' => $image,
            'active' => $this->active,
            'card_use_in' => $this->card_use_in,
            'card_url' => $this->card_url,
            'publish_date' => $this->publish_date,
        ]);


        $this->dispatch('reload');

        FlashMsgTraits::created();
    }



    #[Computed()]
    public  function statuses(): mixed
    {
        $data = CacheStatusModelServices::getData();
        $data = $data->select('status_name', 'id', 'p_id_sub')->Where('p_id_sub', config('StatusConstants.galarySystem'));
        return $data;
    }

    public function render(): View
    {
        return view('livewire.dashboard.cards.create');
    }
}
