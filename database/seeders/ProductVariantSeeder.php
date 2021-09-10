<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductColour;
use App\Models\ProductGender;
use App\Models\ProductVariant;
use App\Models\ProductSize;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $genders = ProductGender::all();
        $sizes = ProductSize::all();
        $colours = ProductColour::all();
        
        foreach ($products as $product)
        {
            foreach ($genders as $gender)
            {
                foreach ($sizes as $size)
                {
                    foreach ($colours as $colour)
                    {
                        ProductVariant::create([
                            'product_id'        => $product->id,
                            'product_size'      => $size->id,
                            'product_colour'    => $colour->id,
                            'product_gender'    => $gender->id,
                        ]);
                    }
                }
            }
        }        
    }
}

