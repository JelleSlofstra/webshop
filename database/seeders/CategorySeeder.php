<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'stadsfietsen']);
        Category::create(['name' => 'mountainbikes']);
        Category::create(['name' => 'racefietsen']);
        Category::create(['name' => 'E-bikes']);
        Category::create(['name' => 'kinderfietsen']);
        Category::create(['name' => 'accesoires']);
    }
}
