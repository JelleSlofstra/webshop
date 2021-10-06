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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        
        return view('checkout.home', [
            'categories'    => Category::all(),
            'manufacturers' => Manufacturer::all(),        
            'order'         => $order,
            'totalprice'    => Order::totalOrderPrice($order)            
        ]);
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
                'manufacturers' => Manufacturer::all()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}