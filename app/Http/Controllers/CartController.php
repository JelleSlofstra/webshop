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
                'cart'          => session::get('cart')
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
                $session = session::put('cart', []);
            }

            //add one of this variant to $session
            if(array_key_exists($productVariant->id, $session)){
                $session[$productVariant->id] += 1;
            } else {
                $session[$productVariant->id] = 1;
            }

            //change the 'cart' in the session from $session
            session::put('cart', $session);

            // built the html for the cart
            if($request->cart)
            {
                return response()->json([
                    'success'    => true,
                    'variant'   => $productVariant,
                    'html'      => $this->buildCartHtml()
                ]);
            } else {                
                return response()->json([
                    'success'    => true,
                    'variant'   => $productVariant
                ]);
            }
        } 
        catch(Exception $e) {
            return response()->json([
                'success'   => false,
                'message'   => $e->getMessage(),
            ]);
        }        
    }

    public function emptyCart()
    {        
        session::remove('cart');
        return redirect("/cart");
    }

    private function buildCartHtml()
    {
        $variants = session::get('cart');
        $html = '';
        foreach ($variants as $variantId => $quantity) {
            $variant = ProductVariant::find($variantId); 
            $html .= '<div class="col-12 card">';
            $html .= $quantity . 'x Model ' . $variant->product->name . ':';
            $html .= '<ul>';
            $html .= '<li>Kleur: ' . $variant->colour->name . '</li>';
            $html .= '<li>Gender: ' . $variant->gender->name . '</li>';
            $html .= '<li>Maat: ' . $variant->size->name . '</li>';
            $html .= '</ul>';
            $html .= '<div class="add-to-cart"> <button pv_id="' . $variantId . '">Voeg toe</button></div>';
            $html .= '</div>';
        }
        return $html;
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
        //
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
