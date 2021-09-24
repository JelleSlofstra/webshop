<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartContent;
use App\Models\ProductVariant;
use App\Models\Category;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Exception;
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

    public function addToCart(Request $request)
    {
        try {
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

            //add one of this variant to $session
            if(array_key_exists($productVariant->id, $session)){
                $session[$productVariant->id] += 1;
            } else {
                $session[$productVariant->id] = 1;
            }

            //change the 'cart' in the session from $session
            session::put('cart', $session);

            // build the html for the cart            
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

    public function removeFromCart(Request $request)
    {
        try {
            //get the productvariant
            $productVariant = ProductVariant::find($request->productVariantId);

            //get the cart contents from the session
            $session = session::get('cart');

            //remove one of this variant from the $session
            if ($session[$productVariant->id] === 1) {
                unset($session[$productVariant->id]);
            } else {
                $session[$productVariant->id] -= 1;
            }

            //change the 'cart' in the session from $session
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

    public function removeAllFromCart(Request $request)
    {
        try {
            //get the productvariant
            $productVariant = ProductVariant::find($request->productVariantId);

            //get the cart contents from the session
            $session = session::get('cart');

            //remove this variant from the $session
            unset($session[$productVariant->id]);            

            //change the 'cart' in the session from $session
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

    public static function emptyCart()
    {        
        session::remove('cart');
        return redirect("/cart");
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
            CartContent::create([
                'cart_id' => $cart->id,    
                'product_variant_id' => $variant_id,
                'amount' => $amount,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
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
