<?php

namespace App\Livewire\TechnicalSupport;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\TechnicalSupport;

class TechSupportCreate extends Component
{
    #[Validate(['required'])]
    public  $name;
    public  $user_name;
    #[Validate(['nullable','numeric','min_digits:10','max_digits:15'])]
    public $mobile;
    #[Validate(['required'])]
    public $subject_id;
    #[Validate(['required'])]
    public $issue_description;

    public $captcha;

    public function create()
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
    }

    #[Layout('components.layouts.uilogin-app')]
    public function render()
    {
        return view('livewire.technical-support.create');
    }
}
