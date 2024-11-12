<?php

namespace App\Livewire\TokoSection;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.toko-section.main')->layout('layouts.landing');
    }
}
