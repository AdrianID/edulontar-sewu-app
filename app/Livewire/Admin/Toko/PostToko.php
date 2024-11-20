<?php

namespace App\Livewire\Admin\Toko;

use App\Models\Produk;
use App\Models\GambarProduk; // Import model GambarProduk
use Livewire\Component;
use Livewire\WithFileUploads;

class PostToko extends Component
{
    use WithFileUploads;

    public $nama_produk, $harga_produk, $kategori_produk, $gambar_produk = [], $deskripsi_produk, $satuan_produk, $no_wa, $produkId;
    public $isEditMode = false;

    protected $rules = [
        'nama_produk' => 'required|string|max:255',
        'harga_produk' => 'required|numeric',
        'kategori_produk' => 'required|string|max:255',
        'gambar_produk.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'deskripsi_produk' => 'nullable|string',
        'satuan_produk' => 'required|string|max:255',
        'no_wa' => 'required|string|max:255',
    ];

    public function render()
    {
        return view('livewire.admin.toko.post-toko');
    }

    public function store()
    {
        $this->validate();

        // Simpan data produk ke tabel `produk`
        $product = Produk::create([
            'nama_produk' => $this->nama_produk,
            'harga_produk' => $this->harga_produk,
            'kategori_produk' => $this->kategori_produk,
            'deskripsi_produk' => $this->deskripsi_produk,
            'satuan_produk' => $this->satuan_produk,
            'no_wa' => $this->no_wa,
        ]);

        // Jika ada gambar, simpan ke tabel `gambar_produk`
        if (!empty($this->gambar_produk)) {
            foreach ($this->gambar_produk as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->extension();
                $image->storeAs('images', $imageName, 'public'); // Menyimpan ke folder 'images' di disk 'public'

                // Simpan path gambar ke tabel `gambar_produk`
                GambarProduk::create([
                    'produk_id' => $product->id,
                    'path_gambar' => $imageName,
                ]);
            }
        }

        session()->flash('message', 'Produk berhasil dipublikasikan.');
        $this->resetFields();
    }

    public function resetFields()
    {
        $this->nama_produk = '';
        $this->harga_produk = '';
        $this->kategori_produk = '';
        $this->gambar_produk = [];
        $this->deskripsi_produk = '';
        $this->satuan_produk = '';
        $this->no_wa = '';
    }

    public function delete($id)
    {
        $product = Produk::findOrFail($id);

    // Hapus semua gambar terkait dari tabel `gambar_produk`
    foreach ($product->gambarProduk as $gambar) {
        $filePath = storage_path('app/public/images/' . $gambar->path_gambar);

        // Pastikan file benar-benar ada sebelum menghapus
        if (file_exists($filePath)) {
            try {
                unlink($filePath); // Hapus file fisik
            } catch (\Exception $e) {
                // Log error jika penghapusan gagal
                \Log::error("Gagal menghapus file gambar: {$filePath}. Error: " . $e->getMessage());
            }
        }
        $gambar->delete(); // Hapus dari database
    }

    // Hapus produk dari database
    $product->delete();

    session()->flash('message', 'Produk berhasil dihapus.');

    }
}
