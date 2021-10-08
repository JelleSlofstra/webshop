<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('products.index', [
            'categories'    => Category::all(),
            'manufacturers' => Manufacturer::all(),
            'category'      => $category,
            'products'      => $category->products
        ]);
    }
}
