<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Jersey Home'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jersey Away'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Jersey Third'
        ]);    
}
        

}
