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
        ProductColour::create(['colour' => 'Black']);
        ProductColour::create(['colour' => 'Yellow']);
        ProductColour::create(['colour' => 'Red']);
    }
}
