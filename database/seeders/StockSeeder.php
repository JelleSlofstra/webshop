<?php

namespace Database\Seeders;

use App\Models\ProductVariant;
use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variants = ProductVariant::all();

        foreach ($variants as $variant)
        {
            Stock::create([
                'product_variant_id' => $variant->id,
                'In_Stock'           => 1 
            ]);  
        }

        // $table->foreignId('product_variant_id')->references('id')->on('product_variants');
        //     $table->foreignId('In_Stock')->references('id')->on('stock_statuses');
    }
}
