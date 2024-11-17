<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('gambar_produk', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('produk_id'); // Foreign key untuk tabel produk
            $table->string('path_gambar'); // Path gambar
            $table->timestamps(); // Kolom created_at dan updated_at

            // Menambahkan relasi dengan tabel produk
            $table->foreign('produk_id')
                  ->references('id')
                  ->on('produk')
                  ->onDelete('cascade'); // Menghapus gambar jika produk dihapus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_produk');
    }
};
