<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Promo title
            $table->string('cover_image')->nullable(); // Cover image path
            $table->decimal('price', 10, 2); // Price with 2 decimal points
            $table->unsignedInteger('discount')->default(0); // Discount percentage (0-100)
            $table->text('description')->nullable(); // Promo description
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promo');
    }
}
