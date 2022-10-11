<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=> 'Cursos/Talleres/Diplomados'
        ]);

        Category::create([
            'name'=> 'Idiomas'
        ]);

        Category::create([
            'name'=> 'CONOCER'
        ]);
    }
}
