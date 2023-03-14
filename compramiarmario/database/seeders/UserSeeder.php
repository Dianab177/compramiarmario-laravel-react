<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Diana Borrajo', 
            'email' => 'dianaborrajo@compramiarmario.es',
            'password' => bcrypt('pompiytui')
        ]);
    }
}
