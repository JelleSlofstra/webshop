<?php

namespace Database\Seeders;

use App\Models\ProductSize;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSize::create(['name' => 'Small']);
        ProductSize::create(['name' => 'Medium']);
        ProductSize::create(['name' => 'Large']);

    }
}
