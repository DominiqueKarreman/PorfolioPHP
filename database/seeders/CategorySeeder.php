<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'Basketball',
        ]);
        Category::create([
            'name' => 'Portraits',
        ]);
        Category::create([
            'name' => 'Animals',
        ]);
        Category::create([
            'name' => 'Urban',
        ]);
    }
}
