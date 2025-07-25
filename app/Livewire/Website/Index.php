<?php

namespace App\Livewire\Website;

use Illuminate\View\View;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Index extends Component
{
 

   #[Layout('components.layouts.website-master')]
    public function render(): View
    {
        return view('livewire.website.index');
 
    }
}
