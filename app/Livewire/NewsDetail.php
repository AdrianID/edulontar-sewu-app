<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Component;

class NewsDetail extends Component
{
    public $title;
    public $content;
    public $slug;
    public $featured_image;

    public function mount($slug){
        $postModel = Posts::where('slug',$slug)->first();
        $this->title = $postModel->title;
        $this->content = $postModel->content;
        $this->slug = $postModel->slug;
        $this->featured_image = $postModel->header_content_image;

    }
    public function relatedPosts()
{
    return Posts::where('slug', '!=', $this->slug)
                ->latest()
                ->take(3)
                ->get();
}

    public function render()
    {
        return view('livewire.news-detail')->layout('layouts.landing');
    }
}
