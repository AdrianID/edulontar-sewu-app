<?php

namespace App\Livewire\Admin\Carousel;

use App\Models\CmsContents;
use App\Utils\Toast;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithFileUploads;

class CarouselCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $image;

    protected $rules = [
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ];

    public function save(){
        $this->validate();

        $imagePath = null;

        if ($this->image) {
            $imageName = uniqid() . '.' . $this->image->getClientOriginalExtension();
            $imagePath = $this->image->storeAs('images', $imageName, 'public');
        }

        $a = CmsContents::create([
            'title' => $this->title,
            'type_id' => 1,
            'image' => $imagePath
        ]);

        if($a){
            Toast::success($this,'Carousel berhasil ditambahkan.');
            $this->reset(['title', 'description', 'image']);
            Redirect()->route('carousel.index');
        }else{
            Toast::warning($this,'Carousel gagal ditambahkan.');
        }
    }

    public function render()
    {
        return view('livewire.admin.carousel.carousel-create');
    }
}

