<?php

namespace App\Livewire\Website;

use Illuminate\View\View;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Footer extends Component
{
 
    public function render(): View
    {
        return view('livewire.website.partials.footer');
    }
}
