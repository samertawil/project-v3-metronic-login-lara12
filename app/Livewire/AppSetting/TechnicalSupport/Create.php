<?php

namespace App\Livewire\AppSetting\TechnicalSupport;


use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use App\Models\TechnicalSupport;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use App\Services\CacheStatusModelServices;

class Create extends Component
{
    #[Validate(['required'])]
    public string $name;
    #[Validate(['required'])]
    #[Validate('exists:users,user_name', message:'اسم المستخدم غير صحيح')]
    public string $user_name = '';
    #[Validate(['nullable', 'numeric', 'min_digits:10', 'max_digits:15'])]
    public string $mobile;
    #[Validate(['required'])]
    public int $subject_id;
    #[Validate(['required'])]
    public string $issue_description;
    public string $captcha;

    public function rules(): mixed
    {
        return [
            'captcha' => ['required', 'captcha'],
   
        ];
    }

    public function create(): void
    {
       
        $this->validate();

        $data = TechnicalSupport::create([
            'name' => $this->name,
            'user_name' => $this->user_name,
            'mobile' => $this->mobile,
            'subject_id' => $this->subject_id,
            'issue_description' => $this->issue_description,
            'terminal_id'=>45,
            'status_id'=>61,
             
        ]);

        $this->reset();

        $this->dispatch(
            'alert',
            type: 'success',
            title: 'رسالة دعم فني',
            text: ' تم الارسال ',
            confirmButtonText: 'اغلاق'
        );
    }

    #[Computed()] 
    public function statuses() {
        $statusData=new CacheStatusModelServices();
      return  $statusData->statusesPSubId(config('myConstants.supportForLogin'));
    }

    #[Layout('components.layouts.uilogin-admin-app')]
    public function render(): View
    {
 
        (string) $title = __('customTrans.technical support');
        return view('livewire.app.setting.technical-support.create')->layoutData(['title' => $title, 'pagetitle' => $title]);
    }
}
