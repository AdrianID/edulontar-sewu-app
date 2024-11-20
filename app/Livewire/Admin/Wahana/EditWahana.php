<?php

namespace App\Livewire\Admin\Wahana;

use App\Models\Wahana;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditWahana extends Component
{
    use WithFileUploads;

    public $judul_wahana, $deskripsi_wahana, $gambar_wahana;
    public $existingImage; // Untuk gambar yang sudah ada di database
    public $id;

    protected $rules = [
        'judul_wahana' => 'required|string|max:255',
        'deskripsi_wahana' => 'nullable|string',
        'gambar_wahana' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function mount($id)
    {
        $wahana = Wahana::findOrFail($id);

        $this->id = $wahana->id;
        $this->judul_wahana = $wahana->judul_wahana;
        $this->deskripsi_wahana = $wahana->deskripsi_wahana;
        $this->existingImage = $wahana->gambar_wahana;
        $this->gambar_wahana = $wahana->gambar_wahana;
    }

    /**
     * Update the wahana details.
     */
    public function update()
    {
        $this->validate();

        $wahana = Wahana::findOrFail($this->id);

        // Handle gambar baru jika diunggah
        $imagePath = $this->existingImage; // Tetap gunakan gambar lama jika tidak ada gambar baru
        if ($this->gambar_wahana) {
            // Hapus gambar lama jika ada
            if ($this->existingImage && file_exists(public_path('storage/images/wahana/' . $this->existingImage))) {
                unlink(public_path('storage/images/wahana/' . $this->existingImage));
            }

            $imageName = time() . '_' . uniqid() . '.' . $this->gambar_wahana->getClientOriginalExtension();
            $this->gambar_wahana->storeAs('images/wahana', $imageName, 'public');
            $imagePath = $imageName;
        }

        // Update data wahana
        $wahana->update([
            'judul_wahana' => $this->judul_wahana,
            'deskripsi_wahana' => $this->deskripsi_wahana,
            'gambar_wahana' => $imagePath,
        ]);

        session()->flash('message', 'Wahana berhasil diperbarui.');
        return redirect()->route('view.wahana'); // Redirect setelah update
    }

    /**
     * Delete the wahana.
     */
    public function delete()
    {
        $wahana = Wahana::findOrFail($this->id);

        // Hapus gambar fisik jika ada
        if ($wahana->gambar_wahana && file_exists(public_path('app/public/images/' . $wahana->gambar_wahana))) {
            unlink(public_path('app/public/images/' . $wahana->gambar_wahana));
        }

        $wahana->delete();

        session()->flash('message', 'Wahana berhasil dihapus.');
        return redirect()->route('view.wahana'); // Redirect setelah penghapusan
    }

    /**
     * Reset input fields.
     */
    public function resetFields()
    {
        $this->judul_wahana = '';
        $this->deskripsi_wahana = '';
        $this->gambar_wahana = null;
        $this->existingImage = null;
        $this->id = null;
    }

    public function render()
    {
        return view('livewire.admin.wahana.edit-wahana');
    }
}
