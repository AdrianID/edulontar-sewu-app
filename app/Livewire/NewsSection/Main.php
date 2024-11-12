<?php

namespace App\Livewire\NewsSection;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.news-section.main')->layout('layouts.landing');
    }
}
