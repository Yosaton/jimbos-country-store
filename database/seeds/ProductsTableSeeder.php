<?php

use Illuminate\Database\Seeder;
use App\Product;

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
            'name' => 'Laptop 1',
            'slug' => 'laptop-1',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => 999.99,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit reiciendis necessitatibus fugit alias perferendis sequi, voluptatibus suscipit iste ut aliquam officia. Facilis in sapiente voluptates ea, asperiores magnam quae?',
        ]);

        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop-2',
            'details' => '17 inch, 1.5TB SSD, 32GB RAM',
            'price' => 599.99,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit reiciendis necessitatibus fugit alias perferendis sequi, voluptatibus suscipit iste ut aliquam officia. Facilis in sapiente voluptates ea, asperiores magnam quae?',
        ]);

        Product::create([
            'name' => 'Laptop 3',
            'slug' => 'laptop-3',
            'details' => '12 inch, 250GB SSD, 8GB RAM',
            'price' => 1599.99,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit reiciendis necessitatibus fugit alias perferendis sequi, voluptatibus suscipit iste ut aliquam officia. Facilis in sapiente voluptates ea, asperiores magnam quae?',
        ]);

        Product::create([
            'name' => 'Laptop 4',
            'slug' => 'laptop-4',
            'details' => '20 inch, 3TB SSD, 64GB RAM',
            'price' => 2599.99,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit reiciendis necessitatibus fugit alias perferendis sequi, voluptatibus suscipit iste ut aliquam officia. Facilis in sapiente voluptates ea, asperiores magnam quae?',
        ]);

        Product::create([
            'name' => 'Laptop 5',
            'slug' => 'laptop-5',
            'details' => '16 inch, 1TB SSD, 32GB RAM',
            'price' => 1999.99,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit reiciendis necessitatibus fugit alias perferendis sequi, voluptatibus suscipit iste ut aliquam officia. Facilis in sapiente voluptates ea, asperiores magnam quae?',
        ]);

        Product::create([
            'name' => 'Laptop 6',
            'slug' => 'laptop-6',
            'details' => '18 inch, 2TB SSD, 64GB RAM',
            'price' => 1299.99,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit reiciendis necessitatibus fugit alias perferendis sequi, voluptatibus suscipit iste ut aliquam officia. Facilis in sapiente voluptates ea, asperiores magnam quae?',
        ]);

        Product::create([
            'name' => 'Laptop 7',
            'slug' => 'laptop-7',
            'details' => '14 inch, 500GB SSD, 32GB RAM',
            'price' => 3999.99,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit reiciendis necessitatibus fugit alias perferendis sequi, voluptatibus suscipit iste ut aliquam officia. Facilis in sapiente voluptates ea, asperiores magnam quae?',
        ]);

        Product::create([
            'name' => 'Laptop 8',
            'slug' => 'laptop-8',
            'details' => '14 inch, 2TB SSD, 32GB RAM',
            'price' => 4999.99,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, impedit reiciendis necessitatibus fugit alias perferendis sequi, voluptatibus suscipit iste ut aliquam officia. Facilis in sapiente voluptates ea, asperiores magnam quae?',
        ]);

    }
}