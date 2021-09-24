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
        ProductGender::create(['name' => 'Genderneutraal']);
        ProductGender::create(['name' => 'Damesmodel']);
        ProductGender::create(['name' => 'Herenmodel']);
    }
}
