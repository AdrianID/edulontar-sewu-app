<?php

namespace App\Livewire\Admin\Posts;

use App\Livewire\TrixEditor;
use App\Models\Posts;
use App\Utils\Toast;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $slug;
    public $featured_image;

    public $listeners = [
        TrixEditor::EVENT_VALUE_UPDATED
    ];
    protected $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:posts',
        'featured_image' => 'nullable',
    ];

    public function trix_value_updated($value){
        $this->content = $value;
    }

    public function store()
    {
        if (Posts::where('slug', $this->slug)->exists()) {
            Toast::warning($this, 'Slug sudah terdaftar pada sistem.');
            return;
        }
        $this->validate();

        $imagePath = null;

        if ($this->featured_image) {
            $imageName = uniqid() . '.' . $this->featured_image->getClientOriginalExtension();
            $imagePath = $this->featured_image->storeAs('images', $imageName, 'public');
        }

        $a = Posts::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'header_content_image' => $imagePath,
        ]);
        if($a){
            Toast::success($this, 'Post berhasil disimpan.');
            $this->reset();
            redirect()->route('post.index');
        }else{
            Toast::success($this, 'Post gagal disimpan.');
        }
    }
    public function render()
    {
        return view('livewire.admin.posts.post-create');
    }
}
