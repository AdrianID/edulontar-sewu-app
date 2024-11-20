<?php

namespace App\Livewire\Admin\Fasilitas;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Fasilitas;

class PostFasilitas extends Component
{
    use WithFileUploads;

    public $nama_fasilitas, $cover_image;
    public $isEditMode = false;
    public $id;

    protected $rules = [
        'nama_fasilitas' => 'required|string|max:255',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function render()
    {
        return view('livewire.admin.fasilitas.post-fasilitas');
    }

    /**
     * Store a new fasilitas entry.
     */
    public function store()
    {
        $this->validate();

        // Handle image upload
        $imagePath = null;
        if ($this->cover_image) {
            $imageName = time() . '_' . uniqid() . '.' . $this->cover_image->getClientOriginalExtension();
            $this->cover_image->storeAs('images', $imageName, 'public'); // Save to 'images' in 'public' disk
            $imagePath = $imageName; // Store relative path
        }

        // Save fasilitas to the database
        Fasilitas::create([
            'nama_fasilitas' => $this->nama_fasilitas,
            'cover_image' => $imagePath, // Save the image path to the database
        ]);

        session()->flash('message', 'Fasilitas berhasil disimpan.');
        $this->resetFields();
    }

    /**
     * Reset form fields.
     */
    public function resetFields()
    {
        $this->nama_fasilitas = null;
        $this->cover_image = null;
        $this->isEditMode = false;
        $this->id = null;
    }

    public function delete($id)
    {
        $fasiltias = Fasilitas::findOrFail($id);

        // Delete associated cover image
        if ($fasiltias->cover_image) {
            $filePath = public_path('app/public/images/' . $fasiltias->cover_image);
            if (file_exists($filePath)) {
                unlink($filePath); 
            }
        }

        $fasiltias->delete();

        session()->flash('message', 'Fasiltias berhasil dihapus.');
    }

}
