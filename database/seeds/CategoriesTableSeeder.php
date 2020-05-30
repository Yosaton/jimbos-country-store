<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Biscuit Mix', 'slug' => 'biscuit-mix', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hams', 'slug' => 'hams', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jams', 'slug' => 'jams', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Moonshine', 'slug' => 'moonshine', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bacon', 'slug' => 'bacon', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Coffee Mugs', 'slug' => 'coffee-mugs', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'T-shirts', 'slug' => 't-shirts', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}