<?php

namespace App\Livewire\WahanaSection;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.wahana-section.main')->layout('layouts.landing');
    }
}
