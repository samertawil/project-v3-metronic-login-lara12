<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public function render()
    {
       (string) $title= __('customTrans.dashboard');
        return view('livewire.dashboard')->layoutData(['title'=>$title,'pageTitle'=>$title]);
    }
}
