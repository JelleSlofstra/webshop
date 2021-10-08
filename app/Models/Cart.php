<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    use HasFactory;
    
    public static function totalCartPrice()
    {
        $bill = 0;
        $variants = session::get('cart');

        if (!is_null($variants)) {
            foreach ($variants as $variantId => $quantity) {            
                $product = ProductVariant::find($variantId)->product;
                $bill += $quantity * $product->price * $product->vat;            
            } 
        }
        
        return number_format($bill,2);
    }

    public static function buildHtml()
    {
        if (session::exists('cart')) {
            //html for a non-empty cart
            $variants = session::get('cart');

            $html = '<h1>Winkelwagen</h1>';
            $html .= '<button id="empty-cart" class="btn btn-primary update-cart">Winkelwagen leegmaken</button>';
            $html .= ' <a href="' . route("payment") . '"><button class="btn btn-primary">Afrekenen</button></a>';
            $html .= '<div class="row text-center">';

            foreach ($variants as $variantId => $quantity) {
                $variant = ProductVariant::find($variantId);

                $html .= '<div class="col-12 card my-3 p-4"><div class="row">';

                //plaatje en buttons 
                $html .= '<div class="col-lg-3 col-md-4 my-auto">';
                $html .= '<img src="../images/' . $variant->product->productImages->first->image->image . '" alt="" class="cart-img d-block mx-auto my-2 rounded">';
                $html .= '<span class="d-block"> <button id="add-one" pv_id="' . $variantId . '" class="d-inline btn btn-primary update-cart">+</button> ';
                $html .= '<button id="remove-one" pv_id="' . $variantId . '" class="d-inline btn btn-primary update-cart">-</button> ';
                $html .= '<button id="remove-all" pv_id="' . $variantId . '" class="d-inline btn btn-primary update-cart"><i class="far fa-trash-alt"></i></button></span></div>';
                
                //model
                $html .= '<div class="col-md-4 col-lg-6 my-auto"><div class="row">';
                $html .= '<div class="col-lg-6 col-md-12 my-auto"><div class="my-3"><strong>Model: </strong></div>';
                $html .= '<div>' .$quantity . 'x ' . $variant->product->name . '</div></div>';
                
                //opties
                $html .= '<div class="col-lg-6 col-md-12 my-auto"><div class="my-3"><strong>Opties: </strong></div>';
                $html .= '<div>'.$variant->size->name.', '.$variant->colour->name.', '.$variant->gender->name.'</div></div>';
                $html .= '</div></div>';
                
                //prijzen
                $html .= '<div class="col-lg-3 col-md-4 my-auto"><div class="my-3"><strong> Prijs excl btw ('.$variant->product->vatPercentage().')%:</strong> &euro; '.$variant->product->price.'</div>';
                $html .= '<div><strong>Totaalprijs voor ' . $quantity . ' stuk(s):</strong> &euro; ' . $variant->product->VatIncPrice($quantity) .'</div></div>';
                $html .= '</div></div>';
            } 
            
            $html .= '</div> Totaalprijs: &euro; ' . self::totalCartPrice();
            $html .= ' <a href="' . route("payment") . '"><button class="btn btn-primary">Afrekenen</button></a>';
        } else {
            //html for an empty cart
            $html = '<h1>Winkelwagen</h1>';
            $html .= 'Je winkelwagen is leeg!';
        }
        return $html;        
    }
}
