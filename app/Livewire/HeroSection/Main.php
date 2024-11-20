<?php

namespace App\Livewire\HeroSection;

use App\Models\CmsContents;
use Livewire\Component;

class Main extends Component
{
    public $backgroundCarousel;

    public function mount(){
        $carousel = CmsContents::where('type_id',1)->whereNull('deleted_at')->pluck('image');
        $carousel = array_map(function($item) {
            return $item ? asset('storage/' . $item) : url('images/logo.png');
        }, $carousel->toArray());
        
        $this->backgroundCarousel = $carousel;
    }

    public function render()
    {
        return view('livewire.hero-section.main')->layout('layouts.landing');
        // return view('landing-page.hero-page');
    }
}
