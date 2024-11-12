<?php

namespace App\Livewire\PromoSection;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.promo-section.main')->layout('layouts.landing');
    }
}
