<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
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
                'name' => 'Product1',
                'describe' => 'Product1 Describe',
                'price' => 100,
                'enable' => true
            ],
            [
                'name' => 'Product2',
                'describe' => 'Product2 Describe',
                'price' => 150,
                'enable' => true
            ],
            [
                'name' => 'Product3',
                'describe' => 'Product3 Describe',
                'price' => 150,
                'enable' => false
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        };
    }
}
