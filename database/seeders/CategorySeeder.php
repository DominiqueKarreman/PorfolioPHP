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
            'color' => 'bg-red-500'
        ]);
        Category::create([
            'name' => 'Portraits',
            'color' => 'bg-blue-500'
        ]);
        Category::create([
            'name' => 'Animals',
            'color' => 'bg-green-500'
        ]);
        Category::create([
            'name' => 'Urban',
            'color' => 'bg-yellow-500'
        ]);
    }
}
