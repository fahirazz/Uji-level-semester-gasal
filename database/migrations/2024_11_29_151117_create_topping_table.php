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
    Schema::create('toppings', function (Blueprint $table) {
        $table->id();
        $table->string('name');  // Nama topping
        $table->decimal('price', 8, 2);  // Harga topping
        $table->string('image');  // Nama file gambar topping
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topping');
    }
};
