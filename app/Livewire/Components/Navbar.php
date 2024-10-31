<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    // public function showSection($section)
    // {
    //     $this->dispatch('sectionChanged', $section);
    // }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
