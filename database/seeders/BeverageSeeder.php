<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeverageSeeder extends Seeder
{
    public function run()
    {
        Beverage::create([
            'name' => 'Coffe Frappe',
            'price' => 30000,
            'image' => 'frappe.png'
        ]);

        Beverage::create([
            'name' => 'Mojito',
            'price' => 20000,
            'image' => 'mjt.png'
        ]);

        Beverage::create([
            'name' => 'Milkshake',
            'price' => 30000,
            'image' => 'ms.png'
        ]);

        Beverage::create([
            'name' => 'Smoothies',
            'price' => 35000,
            'image' => 'smutis.png'
        ]);
        
    }
}
