<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'title' => 'Xcaret',
            'description' => 'Cancún',
            'id_category' => '1',
            'qualification' => '4.5',
            'price' => 200,
        ]);
        Products::create([
            'title' => 'Disney',
            'description' => 'Los Angeles',
            'id_category' => '1',
            'qualification' => '4.0',
            'price' => 250,
        ]);
        Products::create([
            'title' => 'Xplor',
            'description' => 'Cancún',
            'id_category' => '1',
            'qualification' => '4.3',
            'price' => 100,
        ]);
        Products::create([
            'title' => 'Xel-Ha',
            'description' => 'Playa del Carmen',
            'id_category' => '1',
            'qualification' => '4.8',
            'price' => 157,
        ]);

        Products::create([
            'title' => 'Holbox',
            'description' => 'Playa del Carmen',
            'id_category' => '1',
            'qualification' => '3.5',
            'price' => 80,
        ]);


        Products::create([
            'title' => 'Gran Cañon',
            'description' => 'Las Vegas',
            'id_category' => '2',
            'qualification' => '4.5',
            'price' => 800,
        ]);

        Products::create([
            'title' => 'Blue Man Group',
            'description' => 'Miami',
            'id_category' => '2',
            'qualification' => '4.5',
            'price' => 400,
        ]);

        Category::create([
            'category' => 'Parques',
        ]);

        Category::create([
            'category' => 'Tours',
        ]);
    }
}
