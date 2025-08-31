<?php

namespace App\Livewire\MyApp\CitzenServices;


use Livewire\Component;
use App\Enums\activeType;
use Illuminate\View\View;
use App\Models\CitzenServices;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Illuminate\Http\UploadedFile;
use Livewire\Attributes\Validate;
use App\Traits\UploadingFilesTrait;
use Spatie\LivewireFilepond\WithFilePond;

class ServicesCreate extends Component
{
    #[Validate('required|unique:citzen_services,num')]
    public int|null $num = null;
    #[Validate(['required'])]
    public string $name = "";
    public string|null $url = null;
    public string|null $responsible = null;
    public mixed $url_active_from_date = null;
    #[Validate(['required_with:url_active_from_date,after_or_equal:now'])]
    public mixed $url_active_to_date = null;
    public int $active = 1;
    #[Validate(['required'])]
    public string|null $description = null;
    public string|null $note = null;
    public string|null $conditions = null;
    #[Validate(['required'])]
    public int|null $home_page_order = null;
    public string|null $teal = null;
    public string|null $deactive_note = null;
    #[Validate(['required'])]
    #[Validate('regex:/^[a-zA-Z]*$/', message: 'حروف غير صالحة')]
    #[Validate('unique:citzen_services,route_name')]
    public string $route_name = "";
    #[Validate(['services_images.*' => 'nullable|image|max:1024'])]
    // @phpstan-ignore missingType.iterableValue
    public   array $services_images;
    #[Validate(['card_header' => 'nullable|image|max:1024'])]
    public UploadedFile|null $card_header = null;
    protected int $serviceId = 4;
    public int $maxNum = 0;
    public int $maxPageOrder = 0;


    use WithFilePond;

    public function mount(): void
    {
        $max = CitzenServices::max('num');
        $maxPageOrder = CitzenServices::max('home_page_order');


        // @phpstan-ignore binaryOp.invalid
        $this->maxNum = $max ?  $max + 1 : 1;
        $this->maxPageOrder = $maxPageOrder ? $maxPageOrder + 1 : 1;
    }

    public function rules(): mixed
    {
        return [
            'active' => ['required', Rule::enum(activeType::class)],
        ];
    }




    public function store(): void
    {
        $this->validate();

        $services_images = null;

        if ($this->services_images) {
            $services_images =  UploadingFilesTrait::uploadsFiles($this->services_images, 'services_images', 'public');
        }

        $card_header = null;

        if ($this->card_header) {
            $card_header =  UploadingFilesTrait::uploadSingleFile($this->card_header, 'card_header', 'public');
        }


        CitzenServices::create([
            'num' => $this->num,
            'name' => $this->name,
            'url' => $this->url,
            'responsible' => $this->responsible,
            'url_active_from_date' => $this->url_active_from_date,
            'url_active_to_date' => $this->url_active_to_date,
            'active' => $this->active,
            'description' => $this->description,
            'note' => $this->note,
            'conditions' => $this->conditions,
            'route_name' => $this->route_name,
            'home_page_order' => $this->home_page_order,
            'teal' => $this->teal,
            'deactive_note' => $this->deactive_note,
            'services_images' => $services_images,
            'card_header' => $card_header,


        ]);

        FlashMsgTraits::created();

        $this->dispatch('reload');
    }



    public function render(): View
    {
        $title = __('customTrans.services managment');
        $serviceActivation = CitzenServices::where('id', $this->serviceId)->where('active', true)->first();

        // if (empty($serviceActivation)) {
        //     abort(404);
        // }

        return view('livewire.my-app.citzen-services.services-form')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
