<?php

namespace App\Livewire\Dashboard\UsersProfile;


use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Auth;

class Resource extends Component
{
    use WithFileUploads;

    public mixed $userData='';
    /**
     * @property object $profile_image
     */
    public mixed $profile_image = '';


    public function mount(): void
    {
        if (Auth::user()) {
            $this->userData =  User::findOrfail(Auth::user()->id);
        }
    }


    public function updatedProfileImage(mixed $attr): void
    {

        $image = '';

        $this->validate([
            'profile_image' => 'image|mimes:jpg,jpeg,png|max:1024',
        ]);



        if ($this->profile_image) {

            $image = UploadingFilesTrait::uploadSingleFileResize($this->profile_image, 'profiles', 'public', 250, 250);
        }

        $this->userData->update([
            'profile_image' => $image,
        ]);

        $this->dispatch('reload');
    }

   
    public function render(): View
    {
      
        $title=__('passwords.reset');
        return view('partials.metronic7._user-profile')->layoutData(['pageTitle'=>$title,'Title'=>$title]);
    }
}
