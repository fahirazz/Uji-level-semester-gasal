<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToppingSeeder extends Seeder
{
    public function run()
    {
        Topping::create([
            'name' => 'Buah-buahan',
            'price' => 1000,
            'image' => 'buah.png'
        ]);

        Topping::create([
            'name' => 'Choco chip',
            'price' => 2000,
            'image' => 'cocip.png'
        ]);

        Topping::create([
            'name' => 'Keju',
            'price' => 2000,
            'image' => 'kj.png'
        ]);

        Topping::create([
            'name' => 'Lotus Biscoff',
            'price' => 3000,
            'image' => 'lts.png'
        ]);

        Topping::create([
            'name' => 'Nutella',
            'price' => 3000,
            'image' => 'ntl.png'
        ]);
        
    }
}
