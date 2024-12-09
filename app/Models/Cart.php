<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    // Tabel yang digunakan oleh model ini (jika berbeda dengan nama default, misalnya 'carts')
    protected $table = 'cart';

    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = ['user_id', 'menu_id', 'quantity'];

    // Relasi dengan Menu (jika ada)
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
