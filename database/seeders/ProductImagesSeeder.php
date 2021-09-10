<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
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
            ProductImage::create([
                'image'         => 'krat.jpg',
                'product_id'    => $product->id
            ]);

            ProductImage::create([
                'image'         => 'fiets.jpg',
                'product_id'    => $product->id
            ]);
        }        
    }
}
