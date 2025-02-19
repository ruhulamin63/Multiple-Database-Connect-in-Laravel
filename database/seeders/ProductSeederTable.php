<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $first_table_products = [
            ['name' => 'Product 1', 'price' => 100],
            ['name' => 'Product 2', 'price' => 200],
            ['name' => 'Product 3', 'price' => 300],
        ];

        $second_table_products = [
            ['name' => 'Product 4', 'description' => 'Product 4 Description', 'price' => 400],
            ['name' => 'Product 5', 'description' => 'Product 5 Description', 'price' => 500],
            ['name' => 'Product 6', 'description' => 'Product 6 Description', 'price' => 600],
            ['name' => 'Product 7', 'description' => 'Product 7 Description', 'price' => 700],
            ['name' => 'Product 8', 'description' => 'Product 8 Description', 'price' => 800],
            ['name' => 'Product 9', 'description' => 'Product 9 Description', 'price' => 900],
        ];

        \DB::table('products')->insert($first_table_products);
        \DB::connection('mysql_second')->table('products')->insert($second_table_products);
    }
}
