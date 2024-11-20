<?php

namespace App\Livewire\PromoSection;

use App\Models\Promo;
use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        $promo = Promo::all();
        return view('livewire.promo-section.main',[ 'promos' => $promo ])->layout('layouts.landing');
    }
}
