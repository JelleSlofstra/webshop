<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable = [
        'user_id'
    ];
    public static function totalPrice()
    {
        $bill = 0;
        $variants = session::get('cart');
        foreach ($variants as $variantId => $quantity) {            
            $product = ProductVariant::find($variantId)->product;
            $bill += $quantity * $product->price * $product->vat;            
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
            $html .= ' <a href="' . route("checkout") . '"><button class="btn btn-primary">Afrekenen</button></a>';
            $html .= '<div class="row">';
            foreach ($variants as $variantId => $quantity) {
                $variant = ProductVariant::find($variantId); 
                $html .= '<div class="col-12 card my-3 py-3">';
                $html .= '<div class="row"><div class="col-8">';
                $html .= $quantity . 'x Model ' . $variant->product->name . ':';
                $html .= '<ul>';
                $html .= '<li>Kleur: ' . $variant->colour->name . '</li>';
                $html .= '<li>Gender: ' . $variant->gender->name . '</li>';
                $html .= '<li>Maat: ' . $variant->size->name . '</li>';
                $html .= '</ul>';
                $html .= '<div> <button id="add-one" pv_id="' . $variantId . '" class="btn btn-primary update-cart">+</button> ';
                $html .= '<button id="remove-one" pv_id="' . $variantId . '" class="btn btn-primary update-cart">-</button> ';
                $html .= '<button id="remove-all" pv_id="' . $variantId . '" class="btn btn-primary update-cart"><i class="far fa-trash-alt"></i></button></div>';
                $html .= '</div><div class="col-4">';
                $html .= '<ul>';
                $html .= '<li>Prijs excl btw: &euro; ' . $variant->product->price . '</li>';
                $html .= '<li>BTW: ' . $variant->product->vatPercentage() . '%</li>';
                $html .= '<li>Totaalprijs voor ' . $quantity . ' stuks: &euro; ' . $variant->product->VatIncPrice($quantity) . '</li>';
                $html .= '</ul>';
                $html .= '</div></div></div>';
            } 
            $html .= '</div> Totaalprijs: &euro; ' . self::totalPrice();
            $html .= ' <a href="' . route("checkout") . '"><button class="btn btn-primary">Afrekenen</button></a>';
        } else {
            //html for an empty cart
            $html = '<h1>Winkelwagen</h1>';
            $html .= 'Je winkelwagen is leeg!';
        }
        return $html;        
    }
}