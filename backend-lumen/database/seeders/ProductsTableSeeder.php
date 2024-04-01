<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Ensure this namespace matches the actual namespace of your Product model

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Laptop',
            'price' => 1000.00,
            'description' => 'A powerful laptop for all your needs.',
        ]);

        Product::create([
            'name' => 'Smartphone',
            'price' => 500.00,
            'description' => 'The latest smartphone with cutting-edge technology.',
        ]);

        // Add more product data as needed
    }
}
