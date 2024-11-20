<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Posts;
use App\Utils\Toast;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostEdit extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $slug;
    public $featured_image;
    public $postId;

    protected $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:posts,slug',
        'featured_image' => 'nullable|image|max:1024', // Validate the image size (optional)
    ];

    public function mount($slug)
    {
        // Fetch the post data by slug
        $post = Posts::where('slug', $slug)->firstOrFail();

        $this->postId = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->slug = $post->slug;
        $this->featured_image = $post->featured_image;
    }

    public function update()
    {
        $this->validate();

        $post = Posts::find($this->postId);
        
        if ($this->featured_image) {
            // Handle image upload if new image is selected
            $imageName = uniqid() . '.' . $this->featured_image->getClientOriginalExtension();
            $imagePath = $this->featured_image->storeAs('images', $imageName, 'public');
            $post->header_content_image = $imagePath;
        }

        $post->title = $this->title;
        $post->slug = $this->slug;
        $post->content = $this->content;
        $post->save();

        Toast::success($this, 'Post berhasil diperbarui.');
        redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.admin.posts.post-edit');
    }
}
