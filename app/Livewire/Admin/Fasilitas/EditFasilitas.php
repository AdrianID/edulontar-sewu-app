<?php

namespace App\Livewire\Admin\Fasilitas;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Fasilitas;

class EditFasilitas extends Component
{
    use WithFileUploads;

    public $nama_fasilitas, $cover_image = [], $id;
    public $existingImages = []; // Gambar yang sudah ada
    public $imagesToRemove = []; // Gambar yang akan dihapus

    protected $rules = [
        'nama_fasilitas' => 'required|string|max:255',
        'cover_image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function mount($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $this->id = $fasilitas->id;
        $this->nama_fasilitas = $fasilitas->nama_fasilitas;

        // Ambil gambar yang sudah ada
        if ($fasilitas->cover_image) {
            $this->existingImages[] = $fasilitas->cover_image;
        }
    }

    public function removeImageFromUpdate($imageName)
    {
        // Tandai gambar untuk dihapus
        if (!in_array($imageName, $this->imagesToRemove)) {
            $this->imagesToRemove[] = $imageName;
        }

        // Hapus gambar dari daftar sementara untuk tampilan
        $this->existingImages = array_filter($this->existingImages, function ($image) use ($imageName) {
            return $image !== $imageName;
        });
    }

    public function update()
    {
        $this->validate();

        $fasilitas = Fasilitas::findOrFail($this->id);

        // Update data fasilitas
        $fasilitas->update([
            'nama_fasilitas' => $this->nama_fasilitas,
        ]);

        // Hapus gambar yang ditandai untuk dihapus
        if (!empty($this->imagesToRemove)) {
            foreach ($this->imagesToRemove as $imageName) {
                if (\Storage::disk('public')->exists($imageName)) {
                    \Storage::disk('public')->delete($imageName);
                }
            }
            $fasilitas->update(['cover_image' => null]); // Hapus referensi dari database
        }

        // Jika ada gambar baru, simpan ke tabel `fasilitas`
        if (!empty($this->cover_image)) {
            foreach ($this->cover_image as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->extension();
                $image->storeAs('fasilitas_images', $imageName, 'public'); // Simpan file gambar
                $fasilitas->update(['cover_image' => 'fasilitas_images/' . $imageName]);
            }
        }

        session()->flash('message', 'Fasilitas berhasil diperbarui.');
        return redirect()->route('view.fasilitas');
    }

    public function render()
    {
        return view('livewire.admin.fasilitas.edit-fasilitas');
    }
}
