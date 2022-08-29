<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id'=> '1',
            'name' =>'Jersey MU Home 2022/2023',
            'price' => '1000000',
            'desc' => 'Original by adidas',
            'image' => 'mu.jpg'
        ]);
        DB::table('products')->insert([
            'category_id'=> '2',
            'name' =>'Jersey Barcelona Away 2022/2023',
            'price' => '1000000',
            'desc' => 'Original by Nike',
            'image' => 'Barca.jpg'
        ]);
        DB::table('products')->insert([
            'category_id'=> '3',
            'name' =>'Jersey Chelsea Third 2022/2023',
            'price' => '1000000',
            'desc' => 'Original by Nike',
            'image' => 'chelsea.jpg'
        ]);
        DB::table('products')->insert([
            'category_id'=> '1',
            'name' =>'Jersey Real Madrid Home 2022/2023',
            'price' => '1000000',
            'desc' => 'Original by adidas',
            'image' => 'rmadrid.jpg'
        ]);
        DB::table('products')->insert([
            'category_id'=> '1',
            'name' =>'Jersey Arsenal Home 2022/2023',
            'price' => '1000000',
            'desc' => 'Original by Nike',
            'image' => 'arsenal.jpg'
        ]);
        DB::table('products')->insert([
            'category_id'=> '2',
            'name' =>'Jersey Juventus Away 2022/2023',
            'price' => '1000000',
            'desc' => 'Original by Nike',
            'image' => 'chelsea.jpg'
        ]);
        DB::table('products')->insert([
            'category_id'=> '1',
            'name' =>'Jersey Portugal 2022/2023',
            'price' => '1000000',
            'desc' => 'Original by Nike',
            'image' => 'portugal.jpg'
        ]);
        DB::table('products')->insert([
            'category_id'=> '2',
            'name' =>'Jersey Chelsea Home 2022/2023',
            'price' => '1000000',
            'desc' => 'Original by Nike',
            'image' => 'chelseahome.jpg'
        ]);
    }
}
