<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacturer $manufacturer)
    {
        return view('products.index', [
            'categories'    => Category::all(),
            'manufacturers' => Manufacturer::all(),
            'manufacturer'  => $manufacturer,
            'products'      => $manufacturer->products
        ]);
    }
}
