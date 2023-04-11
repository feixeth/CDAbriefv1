<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Get all category IDs from the categories table
        $categoryIds = DB::table('category')->pluck('id')->toArray();

        // Generate fake products with random category IDs
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->name,
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 1, 1000),
                'category_id' => $faker->randomElement($categoryIds), // Assign random category ID
                // Add more fields and their corresponding fake data
            ]);
        }
    }
}

