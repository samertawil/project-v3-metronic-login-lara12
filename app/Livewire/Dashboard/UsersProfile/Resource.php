<?php

namespace App\Livewire\Dashboard\UsersProfile;


use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Resource extends Component
{
    use WithFileUploads;

    public object $userData;
    /**
     * @property object $profile_image
     */
    public mixed $profile_image=''  ;


    public function mount(): void
    {

        $this->userData =  User::findOrfail(Auth::user()->id);
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

        return view('partials.metronic7._user-profile');
    }
}
