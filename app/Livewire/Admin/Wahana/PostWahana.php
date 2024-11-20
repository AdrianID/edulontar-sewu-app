<?php

namespace App\Livewire\Admin\Wahana;

use App\Models\Wahana;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostWahana extends Component
{
    use WithFileUploads;

    public $judul_wahana, $deskripsi_wahana, $gambar_wahana;
    public $id;

    protected $rules = [
        'judul_wahana' => 'required|string|max:255',
        'deskripsi_wahana' => 'nullable|string',
        'gambar_wahana' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    /**
     * Render the component view.
     */
    public function render()
    {
        return view('livewire.admin.wahana.post-wahana');
    }

    /**
     * Store a new wahana.
     */
    public function store()
    {
        $this->validate();

        // Handle image upload
        $imagePath = null;
        if ($this->gambar_wahana) {
            $imageName = time() . '_' . uniqid() . '.' . $this->gambar_wahana->getClientOriginalExtension();
            $this->gambar_wahana->storeAs('images', $imageName, 'public');
            $imagePath = $imageName;
        }

        // Save wahana to the database
        Wahana::create([
            'judul_wahana' => $this->judul_wahana,
            'deskripsi_wahana' => $this->deskripsi_wahana,
            'gambar_wahana' => $imagePath,
        ]);

        session()->flash('message', 'Wahana berhasil disimpan.');
        $this->resetFields();
    }

    /**
     * Delete a wahana.
     */
    public function delete($id)
    {
        $wahana = Wahana::findOrFail($id);

        // Delete associated image
        if ($wahana->gambar_wahana) {
            $filePath = public_path('app/public/images/' . $wahana->gambar_wahana);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $wahana->delete();

        session()->flash('message', 'Wahana berhasil dihapus.');
    }

    /**
     * Reset the input fields.
     */
    public function resetFields()
    {
        $this->judul_wahana = '';
        $this->deskripsi_wahana = '';
        $this->gambar_wahana = null;
        $this->id = null;
    }
}
