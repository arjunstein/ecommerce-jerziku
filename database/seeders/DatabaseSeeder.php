<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // buat user
        User::factory(1)->create(); 
        // Product::factory(10)->create();
        // Product::factory(10)->create();
        // $this->call(CategorySeeder::class);
    }
}
