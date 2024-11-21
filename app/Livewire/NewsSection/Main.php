<?php

namespace App\Livewire\NewsSection;

use App\Models\Posts;
use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        $news = Posts::all();
        return view('livewire.news-section.main', [ 'news' => $news ])->layout('layouts.landing');
    }
}
