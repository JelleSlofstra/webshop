<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        return view('home/home', [
            'manufacturers' => Manufacturer::all(),
            'categories'=> Category::all()
        ]);
    }

    // public function ajax(Request $request)
    // {
    //     dd($request->all());
    // }
}
