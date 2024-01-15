<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Laptop',
                'description' => 'Powerful laptop with high performance.',
                'price' => 1200.00,
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Latest smartphone with advanced features.',
                'price' => 800.00,
            ],
            // Add more products as needed
        ];
        DB::table('products')->insert($products);
    }
}
