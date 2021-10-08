<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\ProductGender;
use App\Models\ProductSize;
use App\Models\ProductColour;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', [
            'manufacturers' => Manufacturer::all(),
            'categories' => Category::all(),
            'genders'    => ProductGender::all(),
            'colours'    => ProductColour::all(),
            'sizes'      => ProductSize::all(),
            'product'    => $product
        ]);
    }
}
