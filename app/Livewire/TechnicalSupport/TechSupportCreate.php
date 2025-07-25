<?php

namespace App\Livewire\TechnicalSupport;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\TechnicalSupport;
use Illuminate\View\View;

class TechSupportCreate extends Component
{
    #[Validate(['required'])]
    public string $name;
    public string $user_name='';
    #[Validate(['nullable','numeric','min_digits:10','max_digits:15'])]
    public string $mobile;
    #[Validate(['required'])]
    public int $subject_id;
    #[Validate(['required'])]
    public string $issue_description;
    public string $captcha;

    public function create(): void
    {
       $this->validate();
       
       $this->validate([
        'captcha'=>['required','captcha']
       ]);

            
        $data = TechnicalSupport::create([
            'name' => $this->name,
            'user_name' => $this->user_name,
            'mobile' => $this->mobile,
            'subject_id' => $this->subject_id,
            'subject' => $this->subject_id,
            'issue_description' => $this->issue_description,
        ]);
        
        $this->reset();

        $this->dispatch(
            'alert',
            type: 'success',
            title: 'رسالة دعم فني',
            text: ' تم الارسال ' ,
            confirmButtonText: 'اغلاق'
        );
    }

    #[Layout('components.layouts.uilogin-app')]
    public function render(): View
    {
        (string) $title=__('customTrans.technical support');
        return view('livewire.technical-support.create')->layoutData(['title'=>$title,'pagetitle'=>$title]);
    }
}
