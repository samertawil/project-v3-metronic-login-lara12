<?php

namespace App\Livewire\Website;

use Illuminate\View\View;
use Livewire\Component;

class Products extends Component
{
    public function render(): View
    {
        return view('livewire.website.website-home-sections.products');
    }
}
