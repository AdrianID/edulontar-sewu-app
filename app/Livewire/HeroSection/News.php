<?php

namespace App\Livewire\HeroSection;

use App\Models\Posts;
use Livewire\Component;

class News extends Component
{
    public $news;
    public function mount(){
        $news = Posts::latest()->take(10)->get();
        if($news){

            $this->news = $news->toArray();
        }

    }
    public function render()
    {
        return view('livewire.hero-section.news');
    }
}
