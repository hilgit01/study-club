<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table("products")->insert([
        //         "code"          => 0001,
        //         "name"          => "Sunlight",
        //         "description"   => "Sabun Cuci Piring",
        //         "qty"           => 12,
        //         "price"         => 1000,
        //     ]);

        for ($i = 2; $i < 12; $i++) {
            Product::create([
                "code"=> 0001 + $i,
                "name"=> "ke-$i",
                "description"=> Str::random(10),
                "qty"=> 12 + $i,
                "price"=> 1000 * $i,
            ]);
         }
    }
}