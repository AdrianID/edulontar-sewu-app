<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Nama tabel yang dihubungkan dengan model
    protected $table = 'produk';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'kategori_produk',
        'gambar_produk',
        'deskripsi_produk',
        'satuan_produk',
        'no_wa',
    ];

    public function gambarProduk()
    {
        return $this->hasMany(GambarProduk::class, 'produk_id');
    }
}
