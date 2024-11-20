<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarProduk extends Model
{
    use HasFactory;

    // Nama tabel yang dihubungkan dengan model
    protected $table = 'gambar_produk';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'produk_id',
        'path_gambar',
    ];

    /**
     * Relasi dengan model Produk (Many-to-One).
     */
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id');
    }
}
