<?php

namespace App\Livewire\HeroSection;

use App\Models\Posts;
use Livewire\Component;

class News extends Component
{
    public function render()
    {
        $news = Posts::all();
        return view('livewire.hero-section.news', ['news' => $news]);
    }
}
