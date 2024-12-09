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
    Schema::create('variants', function (Blueprint $table) {
        $table->id();
        $table->string('name');  // Nama varian muffin
        $table->decimal('price', 8, 2);  // Harga varian
        $table->string('image');  // Nama file gambar varian
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant');
    }
};
