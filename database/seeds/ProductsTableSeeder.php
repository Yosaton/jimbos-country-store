<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Biscuit Mix
        for ($i=1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Biscuit Mix '.$i,
                'slug' => 'biscuit-mix-'.$i,
                // 'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
                'details' => 'One-of-a-kind biscuit mix!',
                'price' => rand(9, 49)+.99,
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(1);
        }

        // $product = Product::find(1);
        // $product->categories()->attach(2);

        // Make Laptop 1 a Desktop as well. Just to test multiple categories
        // $product = Product::find(1);
        // $product->categories()->attach(2);

        // Hams
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Ham ' . $i,
                'slug' => 'ham-' . $i,
                // 'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
                'details' => 'Our spiral sliced ham is precooked and ready to eat in about 30 minutes. Will become a family favorite before you know it!',
                'price' => rand(9, 49)+.99,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(2);
        }

        // Jams
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Jam ' . $i,
                'slug' => 'jam-' . $i,
                'details' => ['Peach', 'Strawberry', 'Blackberry', 'Apple'][array_rand(['Peach', 'Strawberry', 'Blackberry', 'Apple'])] . ' Flavor',
                'price' => rand(9, 49)+.99,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(3);
        }

        // Moonshine
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Moonshine ' . $i,
                'slug' => 'moonshine-' . $i,
                'details' => ['Original', 'Cherry Pie', 'Apple Pie', 'Peach Cobbler', 'Pumpkin Pie'][array_rand(['Original', 'Cherry Pie', 'Apple Pie', 'Peach Cobbler', 'Pumpkin Pie'])] . ' Flavor',
                'price' => rand(9, 49)+.99,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(4);
        }

        // /Bacon
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Bacon ' . $i,
                'slug' => 'bacon-' . $i,
                'details' => ['Maple', 'Applewood Smoked', 'Cajun', 'Peppered'][array_rand(['Maple', 'Applewood Smoked', 'Cajun', 'Peppered'])] . ' Flavor',
                'price' => rand(9, 49)+.99,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(5);
        }

        // Coffee Mugs
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'Coffee Mug ' . $i,
                'slug' => 'coffee-mug-' . $i,
                'details' => 'Perfect for sippin\' tea or coffee at home!',
                'price' => rand(5, 20)+.99,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(6);
        }

        // T-shirts
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'name' => 'T-shirt  ' . $i,
                'slug' => 't-shirt-' . $i,
                'details' => 'Made from 100% cotton. Team Jimbo!',
                'price' => rand(9, 29)+.99,
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ])->categories()->attach(7);
        }

        // Select random entries to be featured
        Product::whereIn('id', [1, 5, 12, 22, 31, 49, 56, 63, 27 , 42, 19, 50, 26])->update(['featured' => true]);
    }
}