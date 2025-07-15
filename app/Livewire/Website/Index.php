<?php

namespace App\Livewire\Website;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Index extends Component
{
 

   #[Layout('components.layouts.website-master')]
    public function render()
    {
        return view('livewire.website.index');
 
    }
}
