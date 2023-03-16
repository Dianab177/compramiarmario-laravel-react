<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories =[
            [
                'category_id' =>  2,
                'name' => 'Chaquetas',
                'slug' => Str::slug('Chaquetas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Chaquetas',
                'slug' => Str::slug('Chaquetas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  2,
                'name' => 'Chaquetas',
                'slug' => Str::slug('Chaquetas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Chaquetas',
                'slug' => Str::slug('Chaquetas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  2,
                'name' => 'Jersey',
                'slug' => Str::slug('Jersey'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Jersey',
                'slug' => Str::slug('Jersey'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  1,
                'name' => 'Pantalones',
                'slug' => Str::slug('Pantalones'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  2,
                'name' => 'Pantalones',
                'slug' => Str::slug('Pantalones'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Pantalones',
                'slug' => Str::slug('Pantalones'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  4,
                'name' => 'Pantalones',
                'slug' => Str::slug('Pantalones'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  1,
                'name' => 'Faldas',
                'slug' => Str::slug('Faldas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Faldas',
                'slug' => Str::slug('Faldas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  4,
                'name' => 'Faldas',
                'slug' => Str::slug('Faldas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  2,
                'name' => 'Camisas',
                'slug' => Str::slug('Camisas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Camisas',
                'slug' => Str::slug('Camisas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  4,
                'name' => 'Camisas',
                'slug' => Str::slug('Camisas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  2,
                'name' => 'Camisetas',
                'slug' => Str::slug('Camisetas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Camisetas',
                'slug' => Str::slug('Camisetas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  4,
                'name' => 'Camisetas',
                'slug' => Str::slug('Camisetas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  2,
                'name' => 'Chalecos',
                'slug' => Str::slug('Chalecos'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Chalecos',
                'slug' => Str::slug('Chalecos'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Vestidos',
                'slug' => Str::slug('Vestidos'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Vestidos',
                'slug' => Str::slug('Vestidos'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Vestidos',
                'slug' => Str::slug('Vestidos'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  2,
                'name' => 'Gorros',
                'slug' => Str::slug('Gorros'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Sombreros y gorras',
                'slug' => Str::slug('Sombreros y gorras'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Chales',
                'slug' => Str::slug('Chales'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Chales',
                'slug' => Str::slug('Chales'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  2,
                'name' => 'Guantes',
                'slug' => Str::slug('Guantes'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  1,
                'name' => 'Zapatos',
                'slug' => Str::slug('Zapatos'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Zapatos',
                'slug' => Str::slug('Zapatos'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  4,
                'name' => 'Zapatos',
                'slug' => Str::slug('Zapatos'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  1,
                'name' => 'Tenis',
                'slug' => Str::slug('Tenis'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Tenis',
                'slug' => Str::slug('Tenis'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  2,
                'name' => 'Botas',
                'slug' => Str::slug('Botas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  3,
                'name' => 'Botas',
                'slug' => Str::slug('Botas'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' =>  4,
                'name' => 'Sandalias',
                'slug' => Str::slug('Sandalias'),
                'color' => true,
                'size' => true
            ],
        ];
        foreach ($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
