<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'nama_fasilitas',
        'cover_image',
    ];
}