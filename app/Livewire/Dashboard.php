<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Dashboard extends Component
{

    public function render(): View
    {
       (string) $title= __('customTrans.dashboard');
        return view('livewire.dashboard')->layoutData(['title'=>$title,'pageTitle'=>$title]);
    }
}
