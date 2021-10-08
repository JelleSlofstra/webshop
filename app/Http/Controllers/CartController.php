<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ProductVariant;
use App\Models\Category;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function payment()
    {
        return view('payment/home', [
            'totalprice' => cart::totalCartPrice()
        ]);
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
                $cart = session::get('cart');
            } else {
                $cart = [];
            }

            //update the $cart-array
            if(array_key_exists($productVariant->id, $cart)){
                $cart[$productVariant->id] += 1;
            } else {
                $cart[$productVariant->id] = 1;
            }

            //update the 'cart' in the session from $session-array
            session::put('cart', $cart);

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

    public function removeOneFromCart(Request $request)
    {
        try {
            //get the productvariant
            $productVariant = ProductVariant::find($request->productVariantId);                     
            
            //get the cart contents from the session
            $cart = session::get('cart');            

            //update the $cart-array
            if ($cart[$productVariant->id] === 1) {
                unset($cart[$productVariant->id]);
            } else {
                $cart[$productVariant->id] -= 1;
            }

            //update the 'cart' in the session from $session-array
            if (empty($cart)) {
                session::remove('cart');
            } else {
                session::put('cart', $cart);
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
            $cart = session::get('cart');            

            //update the $cart-array
            unset($cart[$productVariant->id]);            

            //update the 'cart' in the session from $session-array
            if (empty($cart)) {
                session::remove('cart');
            } else {
                session::put('cart', $cart);
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

    public function emptyCart(Request $request)
    {
        try {
            session::remove('cart');

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
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
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
                'totalprice'    => Cart::totalCartPrice()
            ]);
        }         
    }
}
