<?php

namespace App\Traits\MyApp;

use Illuminate\Http\UploadedFile;
use Livewire\Attributes\Validate;
use App\Enums\activeType;
use Illuminate\Validation\Rule;

trait CitzenServicesTrait
{

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


    public string $route_name = "";

    #[Validate(['services_images.*' => 'nullable|image|max:1024'])]
    // @phpstan-ignore missingType.iterableValue
    public   array $services_images;

    #[Validate(['card_header' => 'nullable|image|max:1024'])]
    public  UploadedFile|null $card_header = null;

    public string|null $card_header_path = null;

    public array|null $services_images_path = null;

    protected int $serviceId = 4;

    public int $maxNum = 0;

    public int $maxPageOrder = 0;

    public int|null $editServicesId = null;

    public function rules(): mixed
    {
        return [
            'active' => ['required', Rule::enum(activeType::class)],
            "route_name" => ['required', Rule::unique('citzen_services')->ignore($this->editServicesId),'regex:/^[a-zA-Z-.]*$/' ],
            'num'=>['required',Rule::unique('citzen_services','num')->ignore($this->editServicesId)],
        ];
    }
 

    public function messages(): mixed
    {
        return [
           
            "route_name.regex" => 'حروف غير صالحة',
        ];
    }
}


 