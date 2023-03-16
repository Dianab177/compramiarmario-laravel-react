<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Colección Otoño',
                'slug' => Str::slug('TV, audio y video'),
                'icon' => '<i class="fa-solid fa-scarf"></i>'
            ],

            [
                'name' => 'Colección Invierno',
                'slug' => Str::slug('Consola y videojuegos'),
                'icon' => '<i class="fa-solid fa-hat-winter"></i>'
            ],

            [
                'name' => 'Colección Primavera',
                'slug' => Str::slug('Computación'),
                'icon' => '<i class="fa-solid fa-shirt"></i>'
            ],

            [
                'name' => 'Colección Verano',
                'slug' => Str::slug('Moda'),
                'icon' => '<i class="fa-solid fa-shirt-tank-top"></i>'
            ],
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }


    }
}
