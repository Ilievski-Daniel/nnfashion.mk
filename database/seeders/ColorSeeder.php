<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->updateOrInsert([
            'name' => 'red'
        ]);
        DB::table('colors')->updateOrInsert([
            'name' => 'black'
        ]);
        DB::table('colors')->updateOrInsert([
            'name' => 'cyan'
        ]);
        DB::table('colors')->updateOrInsert([
            'name' => 'white'
        ]);
    }
}
