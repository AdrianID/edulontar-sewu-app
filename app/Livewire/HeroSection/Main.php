<?php

namespace App\Livewire\HeroSection;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.hero-section.main')->layout('layouts.landing');
        // return view('landing-page.hero-page');
    }
}
