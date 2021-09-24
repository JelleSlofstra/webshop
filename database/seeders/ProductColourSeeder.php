<?php

namespace Database\Seeders;

use App\Models\ProductColour;
use Illuminate\Database\Seeder;

class ProductColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductColour::create(['name' => 'Zwart']);
        ProductColour::create(['name' => 'Geel']);
        ProductColour::create(['name' => 'Rood']);
    }
}
