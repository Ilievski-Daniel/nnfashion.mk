<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::updateOrCreate([
            'name' => 'Jeans'
        ]);
        Category::updateOrCreate([
            'name' => 'Gorna Obleka'
        ]);
        Category::updateOrCreate([
            'name' => 'Dolna Obleka'
        ]);
        Category::updateOrCreate([
            'name' => 'Shoes'
        ]);
        Category::updateOrCreate([
            'name' => 'Glasses'
        ]);
        Category::updateOrCreate([
            'name' => 'Jewelry'
        ]);
    }
}
