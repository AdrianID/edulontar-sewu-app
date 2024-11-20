<?php

namespace App\Livewire\Admin;

use App\Models\CmsContents;
use Livewire\Component;
use Livewire\WithFileUploads;

class Home extends Component
{
    use WithFileUploads;

    public $isModalOpen = false;
    public $idKonten;
    public $title;
    public $description;
    public $image;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    public function openModal($id){
        $this->idKonten = $id;
        $this->isModalOpen = true;
    }
    public function closeModal(){
        $this->idKonten = null;
        $this->isModalOpen = false;
    }

    public function save(){
        $this->validate();

        $imagePath = null;

        if ($this->image) {
            $imageName = uniqid() . '.' . $this->image->getClientOriginalExtension();
            $imagePath = $this->image->storeAs('images', $imageName, 'public');
        }

        // Simpan data ke database
        $a = CmsContents::create([
            'title' => $this->title,
            'content' => $this->description,
            'type_id' => $this->idKonten,
            'image' => $imagePath
        ]);

        $this->reset(['title', 'description', 'image']);

        session()->flash('success', 'Item berhasil disimpan!');
        
    }

    


    public function render()
    {
        return view('livewire.admin.home');
    }
}
