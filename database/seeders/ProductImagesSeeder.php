<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\product_images;
use Illuminate\Database\Seeder;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Product::all() as $product)
        {
            product_images::create([
                'image'         => 'krat.jpg',
                'product_id'    => $product->id
            ]);

            product_images::create([
                'image'         => 'fiets.jpg',
                'product_id'    => $product->id
            ]);
        }        
    }
}
