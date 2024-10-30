<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();                                  
            $table->string('user_name');                  
            $table->foreignId('package_id')                
                  ->constrained('packages')
                  ->onDelete('cascade');
            $table->date('booking_date');                  
            $table->integer('ticket_quantity');            
            $table->string('ticket_number')->unique();    
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); 
            $table->timestamps();                         
            $table->softDeletes();                        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
