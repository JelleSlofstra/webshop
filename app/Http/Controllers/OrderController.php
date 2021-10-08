<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\ProductVariant;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\OrderedProduct;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index', [
            'categories'    => Category::all(),
            'manufacturers' => Manufacturer::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $cart = session::get('cart');

            if (is_null($cart)) { 
                return response()->json([
                    'success'  => false,
                    'message'  => 'Je mandje is leeg'
                ]);
            }

            $order = Order::create(['user_id'=> Auth::user()->id]);        
            
            foreach (session::get('cart') as $variant_id=>$amount)
            {
                $variant = ProductVariant::findOrFail($variant_id);
                
                OrderedProduct::create([
                    'order_id' => $order->id,    
                    'product_variant_id' => $variant_id,
                    'amount' => $amount,
                    'price' => $variant->product->price,
                    'vat'   => $variant->product->vat,
                ]);
            }
        
            session::remove('cart');  
            
            return response()->json([
                'success'  => true,
                'redirect' => route('orders.show', $order),
            ]);
        } catch(Exception $e) {
            return response()->json([
                'success'  => false,
                'message'  => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if (Auth::user()->id === $order->user_id)
        {
            return view('checkout.home', [
                'categories'    => Category::all(),
                'manufacturers' => Manufacturer::all(),        
                'order'         => $order,            
            ]);
        } else 
        {
            return view('orders.index', [
                'categories'    => Category::all(),
                'manufacturers' => Manufacturer::all(),
                'message'       => 'Je kunt alleen je eigen orders bekijken!'
            ]);
        }
    }
}
