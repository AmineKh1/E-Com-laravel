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
                'name'=>'oppo mobile',
                "price" => "300",
                "description" => "A smart with 4gb ram and 128 go stockage",
                "category" => "mobile",
                "gallery" => "https://unsplash.com/photos/D_kOW7iHNnw",
            ],
            [
                'name'=>'lg tv',
                "price" => "500",
                "description" => "A smart tv with 4gb ram and 128 go stockage",
                "category" => "tv",
                "gallery" => "https://unsplash.com/photos/D_kOW7iHNnw",
            ],
            [
                'name'=>'soni tv',
                "price" => "600",
                "description" => "A smart tv with 4gb ram and 128 go stockage",
                "category" => "tv",
                "gallery" => "https://unsplash.com/photos/D_kOW7iHNnw",
            ],
        ]);
    }
}
