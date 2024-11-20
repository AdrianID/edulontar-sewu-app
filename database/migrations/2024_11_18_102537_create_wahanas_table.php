<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wahanas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('judul_wahana', 255); // Judul wahana
            $table->text('deskripsi_wahana')->nullable(); // Deskripsi wahana
            $table->string('gambar_wahana')->nullable(); // URL gambar wahana
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wahanas');
    }
};
