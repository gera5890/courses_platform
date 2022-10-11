<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::create([
            'name' => 'Gratis',
            'value' => 0
        ]);

        Price::create([
            'name' => '1000 MXN$ (nivel 1)',
            'value' => 1000
        ]);

        Price::create([
            'name' => '1100 MXN$ (Nivel 2)',
            'value' => 1100
        ]);

        Price::create([
            'name' => '1100 MXN$ (Nivel 3)',
            'value' => 1100
        ]);
    }
}
