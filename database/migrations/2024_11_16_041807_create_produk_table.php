<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('nama_produk'); // Nama produk
            $table->decimal('harga_produk', 15, 2); // Harga produk dengan format desimal
            $table->string('kategori_produk'); // Kategori produk
            $table->string('gambar_produk')->nullable(); // Gambar produk (opsional)
            $table->text('deskripsi_produk')->nullable(); // Deskripsi produk (opsional)
            $table->string('satuan_produk'); // Satuan produk
            $table->string('no_wa'); // Nomor WhatsApp
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
