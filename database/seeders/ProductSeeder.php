<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Its Summer Time',
                'price' => "200000",
                'description' => 'Simple Typography with beautiful design',
                'category' => "Typography",
                'gallery' => "public\img\Design 2.jpg"
            ],
            [
                'name' => 'Covid-19 Poster',
                'price' => "500000",
                'description' => 'Complex Cool Covid-19 Poster',
                'category' => "Multi Image",
                'gallery' => "public\img\Design 3.jpg"
            ]
        ]);
    }
}
