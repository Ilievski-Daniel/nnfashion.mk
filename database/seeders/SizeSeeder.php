<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::updateOrCreate([
            'sizename' => 'XL'
        ]);
        Size::updateOrCreate([
            'sizename' => 'M'
        ]);
        Size::updateOrCreate([
            'sizename' => 'L'
        ]);
        Size::updateOrCreate([
            'sizename' => 'S'
        ]);
    }
}
