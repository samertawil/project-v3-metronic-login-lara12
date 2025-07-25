<?php

namespace App\Livewire\Website;

use Livewire\Component;
use Illuminate\View\View;

class TopNavbar extends Component
{
    public function render(): View
    {
        return view('livewire.website.partials.top-navbar');
    }
}
