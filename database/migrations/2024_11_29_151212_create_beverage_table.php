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
    Schema::create('beverages', function (Blueprint $table) {
        $table->id();
        $table->string('name');  // Nama minuman
        $table->decimal('price', 8, 2);  // Harga minuman
        $table->string('image');  // Nama file gambar minuman
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beverage');
    }
};
