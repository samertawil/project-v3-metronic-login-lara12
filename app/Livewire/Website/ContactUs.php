<?php

namespace App\Livewire\Website;

use App\Models\User;
use Livewire\Component;
use App\Mail\SupportMail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Mail;
use App\Notifications\CustomNotification;

class ContactUs extends Component
{
 
    #[Validate('required')]
    public $message;
    public $name;
    public $phone;
    public $email;

    public function sendEmail() {
      
        $this->validate();

        $data = [
             'name' => $this->name,
             'phone' => $this->phone,
             'email' => $this->email,
              
             'message' => $this->message,
        ];
     
       Mail::to('eng.samertawil@gmail.com')->send(new SupportMail($data));
       
       toastr()->success('تم ارسال الايميل بنجاح');

       $user=User::find(1);
       
       $user->notify(new CustomNotification());
       
       $this->reset();

    }
    
    #[Layout('components.layouts.website-master')]
    public function render()
    {
        return view('livewire.website.contact-us');
    }
}
