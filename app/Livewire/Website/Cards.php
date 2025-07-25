<?php

namespace App\Livewire\Website;

use App\Models\Card;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Illuminate\Database\Eloquent\Collection;

class Cards extends Component
{

    #[Computed()]
    public function cards(): Collection
    {

       return Card::select('card_title', 'card_text', 'card_img')->whereNotNull('card_img')->orderBy('created_at', 'desc')->get();
    }

    public function render(): View
    {
        return view('livewire.website.website-home-sections.cards');
    }
}
