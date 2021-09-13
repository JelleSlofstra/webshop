<?php

namespace Database\Seeders;

use App\Models\ProductGender;
use Illuminate\Database\Seeder;

class ProductGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductGender::create(['gender' => 'Neutral']);
        ProductGender::create(['gender' => 'Female']);
        ProductGender::create(['gender' => 'Male']);
    }
}
