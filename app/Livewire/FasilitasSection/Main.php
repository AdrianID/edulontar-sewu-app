<?php

namespace App\Livewire\FasilitasSection;

use App\Models\Fasilitas;
use Livewire\Component;

class Main extends Component
{
    public function render() 
    {
        $fasilitas = Fasilitas::all();
        return view('livewire.fasilitas-section.main', [ 'fasilitas' => $fasilitas ])->layout('layouts.landing');
    }
}
