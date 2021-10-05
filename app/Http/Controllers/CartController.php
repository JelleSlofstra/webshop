<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartContent;
use App\Models\ProductVariant;
use App\Models\Category;
use App\Models\Manufacturer;
use Error;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!session::exists('cart')) {
            return view('cart', [
                'categories'    => Category::all(),
                'manufacturers' => Manufacturer::all(),
                'emptycart'     => true
            ]);
        }
        else {
            $productVariants = ProductVariant::all()
                                        ->whereIn('id', array_keys(session::get('cart')));

            return view('cart', [
                'categories'    => Category::all(),
                'manufacturers' => Manufacturer::all(),
                'variants'      => $productVariants,
                'cart'          => session::get('cart'),
                'totalprice'    => Cart::totalPrice()
            ]);
        }        
    }
    public function payment()
    {
        return view('payment/home', [
            'totalprice' => cart::totalPrice()
        ]);
    }

    public function orderIndex()
    {
        return view('orders.index', [
            'categories'    => Category::all(),
            'manufacturers' => Manufacturer::all()
        ]);
    }

    public function updateCart(Request $request)
    {
        try {
            if($request->method === 'empty-cart') 
            {
                $session = [];
            } else {
                //get the productvariant
                if(!$request->productVariantId) {
                    //if the session doesnt contain a productVariantId
                    //then use the product_id, product_size_id, product_gender_id, product_colour_id
                    $productVariant = ProductVariant::findVariant($request);
                } else {
                    //if the session does contain a productVariantId
                    $productVariant = ProductVariant::find($request->productVariantId); 
                    
                }

                //get the cart contents from the session, or 'start' a new empty cart 
                if (session::exists('cart')) {
                    $session = session::get('cart');
                } else {
                    $session = [];
                }
                
                //update the $session-array
                if($request->method === 'add-one') 
                {
                    if(array_key_exists($productVariant->id, $session)){
                        $session[$productVariant->id] += 1;
                    } else {
                        $session[$productVariant->id] = 1;
                    }
                } 
                elseif ($request->method === 'remove-one')
                {
                    if ($session[$productVariant->id] === 1) {
                        unset($session[$productVariant->id]);
                    } else {
                        $session[$productVariant->id] -= 1;
                    }   
                }
                elseif ($request->method === 'remove-all')
                {
                    unset($session[$productVariant->id]);                
                }
            }

            //change the 'cart' in the session from $session-array
            if (empty($session)) {
                session::remove('cart');
            } else {
                session::put('cart', $session);
            } 

            return response()->json([
                'success'   => true,
                'html'      => Cart::buildHtml()
            ]);
        }
        catch(Exception $e) {
            return response()->json([
                'success'   => false,
                'message'   => $e->getMessage(),
            ]);
        }
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
        $cart_contents = session::get('cart');

        $cart = cart::create(['user_id'=> 1]);

        
        
        foreach ($cart_contents as $variant_id=>$amount)
        {
            $variant = ProductVariant::findOrFail($variant_id);
            
            CartContent::create([
                'cart_id' => $cart->id,    
                'product_variant_id' => $variant_id,
                'amount' => $amount,
                'price' => $variant->product->price,
                'vat'   => $variant->product->vat,
                
            ]);
        }
       
          
        
        return view('checkout.home', [
            'categories'    => Category::all(),
            'manufacturers' => Manufacturer::all(),        
            'cart' => $cart,
            'totalprice'    => Cart::totalOrderPrice($cart)            

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        if (Auth::user()->id === $cart->user_id)
        {
            return view('checkout.home', [
                'categories'    => Category::all(),
                'manufacturers' => Manufacturer::all(),        
                'cart' => $cart,            
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
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
