<?php

namespace App\Livewire\Website;

use App\Models\User;
use Livewire\Component;
use App\Mail\SupportMail;
use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Mail;
use App\Notifications\CustomNotification;
use Illuminate\View\View;

class ContactUs extends Component
{

    #[Validate('required')]
    public string $message;
    public string $name;
    public string $phone;
    public string $email;

    public function sendEmail(): void
    {
 
        $this->validate();

        $data = [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message,
        ];

        Mail::to('eng.samertawil@gmail.com')->send(new SupportMail($data));

        toastr()->success('تم ارسال الايميل بنجاح');


        $usersToNotify = Setting::where('key', 'userRecieveNotifications')->value('value_array');


        if (is_array($usersToNotify) && count($usersToNotify) > 0) {

            $users = User::whereIn('user_name', $usersToNotify)->get();

            foreach ($users as $user) {
                $user->notify(new CustomNotification());
            }
        } else {
            return;
        }

        $this->reset();
    }




    #[Layout('components.layouts.website-master')]
    public function render(): View
    {
        return view('livewire.website.contact-us');
    }
}
