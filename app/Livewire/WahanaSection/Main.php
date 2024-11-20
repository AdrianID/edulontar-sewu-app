<?php

namespace App\Livewire\WahanaSection;

use App\Models\Wahana;
use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        $wahana = Wahana::all();
        return view('livewire.wahana-section.main', ['wahana' => $wahana])->layout('layouts.landing');
    }
}
