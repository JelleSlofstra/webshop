<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryImage;
use Illuminate\Database\Seeder;
use SebastianBergmann\Environment\Console;

class CategoryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (Category::all() as $category)
        {
            CategoryImage::create([
                'image'         => 'fiets.jpg',
                'category_id'    => $category->id

            ]);
        }
    }}
