<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariantSeeder extends Seeder
{
    public function run()
    {
        Variant::create([
            'name' => 'Muffin Coklat',
            'price' => 7000,
            'image' => 'cklt.png'
        ]);
        
        Variant::create([
            'name' => 'Muffin Keju',
            'price' => 8000,
            'image' => 'keju.png'
        ]);

        Variant::create([
            'name' => 'Muffin Cappucino',
            'price' => 6000,
            'image' => 'cpcn.jpeg'
        ]);

        Variant::create([
            'name' => 'Muffin Lemon',
            'price' => 7000,
            'image' => 'lmn.png'
        ]);

        Variant::create([
            'name' => 'Muffin Strawberry',
            'price' => 7000,
            'image' => 'stb.png'
        ]);

        Variant::create([
            'name' => 'Muffin Tiramissu',
            'price' => 7000,
            'image' => 'trms.jpeg'
        ]);

        Variant::create([
            'name' => 'Muffin Vanilla',
            'price' => 8000,
            'image' => 'vnl.png'
        ]);
    }
}
