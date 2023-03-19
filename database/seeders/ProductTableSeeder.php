<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'product1',
            'description' => 'description one',
            'price' => 1233,
            
           
        ]);
        DB::table('product')->insert([
            'name' => 'product2',
            'description' => 'description two',
            'price' => 123334
           
        ]);

        DB::table('product')->insert([
            'name' => 'product3',
            'description' => 'description three',
            'price' => 123334
           
        ]);
    }
}
