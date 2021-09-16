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
        Category::create([
            'image' => 'stadsfiets.jpg',
            'name'  => 'Stadsfietsen'
        ]);
        Category::create([
            'image' => 'mtb.jpg',
            'name'  => 'Mountainbikes'
        ]);
        Category::create([
            'image' => 'racefiets.jpg',
            'name'  => 'Racefietsen'
        ]);
        Category::create([
            'image' => 'ebike.jpg',
            'name'  => 'E-bikes'
        ]);
        Category::create([
            'image' => 'kinderfiets.jpg',
            'name'  => 'Kinderfietsen'
        ]);
        Category::create([
            'image' => 'accessoires.jpg',
            'name'  => 'Accessoires'
        ]);
    }
}
