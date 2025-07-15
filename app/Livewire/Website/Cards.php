<?php

namespace App\Livewire\Website;

use App\Models\Card;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Cards extends Component
{

    #[Computed()]
    public function cards() {

       return Card::select('card_title', 'card_text', 'card_img')->whereNotNull('card_img')->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.website.website-home-sections.cards');
    }
}
