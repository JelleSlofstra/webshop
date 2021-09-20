<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Category;
use App\Models\Product;
use App\Models\Home;
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
        if (!is_null(request()->get('search'))) {
            return view('products/results',  [
                'manufacturers' => Manufacturer::all(),
                'categories'=> Category::all(),
                'products' => Product::latest()->filter(request(['search']))->get()
            ]);
        }
        else {
            return view('home/home', [
                'manufacturers' => Manufacturer::all(),
                'categories'=> Category::all()                
            ]);
        }
    }

    public function ajax(Request $request)
    {
        return response()->json([
            'success' => true,
            'message' => 'dagobert'
        ]);
    }

    Public function test()
    {
        return view('test');
    }
}
