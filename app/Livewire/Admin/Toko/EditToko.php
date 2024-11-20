<?php

namespace App\Livewire\Admin\Toko;

use App\Models\Produk;
use App\Models\GambarProduk;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditToko extends Component
{
    use WithFileUploads;

    public $nama_produk, $harga_produk, $kategori_produk, $gambar_produk = [], $deskripsi_produk, $satuan_produk, $no_wa, $produkId;
    public $existingImages = []; // Gambar yang sudah ada
    public $imagesToRemove = []; // Gambar yang akan dihapus

    protected $rules = [
        'nama_produk' => 'required|string|max:255',
        'harga_produk' => 'required|numeric',
        'kategori_produk' => 'required|string|max:255',
        'gambar_produk.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'deskripsi_produk' => 'nullable|string',
        'satuan_produk' => 'required|string|max:255',
        'no_wa' => 'required|string|max:255',
    ];

    public function mount($id)
    {
        $product = Produk::findOrFail($id);

        $this->produkId = $product->id;
        $this->nama_produk = $product->nama_produk;
        $this->harga_produk = $product->harga_produk;
        $this->kategori_produk = $product->kategori_produk;
        $this->deskripsi_produk = $product->deskripsi_produk;
        $this->satuan_produk = $product->satuan_produk;
        $this->no_wa = $product->no_wa;

        // Ambil gambar yang sudah ada
        $this->existingImages = $product->gambarProduk->pluck('path_gambar')->toArray();
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

        $product = Produk::findOrFail($this->produkId);

        // Update data produk
        $product->update([
            'nama_produk' => $this->nama_produk,
            'harga_produk' => $this->harga_produk,
            'kategori_produk' => $this->kategori_produk,
            'deskripsi_produk' => $this->deskripsi_produk,
            'satuan_produk' => $this->satuan_produk,
            'no_wa' => $this->no_wa,
        ]);

        // Hapus gambar yang ditandai untuk dihapus
        if (!empty($this->imagesToRemove)) {
            foreach ($this->imagesToRemove as $imageName) {
                $gambar = GambarProduk::where('path_gambar', $imageName)->where('produk_id', $this->produkId)->first();
                if ($gambar) {
                    // Hapus file fisik
                    if (file_exists(storage_path('app/public/images/' . $imageName))) {
                        unlink(storage_path('app/public/images/' . $imageName));
                    }
                    $gambar->delete();
                }
            }
        }

        // Jika ada gambar baru, simpan ke tabel `gambar_produk`
        if (!empty($this->gambar_produk)) {
            foreach ($this->gambar_produk as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->extension();
                $image->storeAs('images', $imageName, 'public'); // Simpan file gambar

                GambarProduk::create([
                    'produk_id' => $product->id,
                    'path_gambar' => $imageName,
                ]);
            }
        }

        session()->flash('message', 'Produk berhasil diperbarui.');
        return redirect()->route('view.toko');
    }

    public function render()
    {
        return view('livewire.admin.toko.edit-toko');
    }
}
