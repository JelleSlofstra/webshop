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
            $html .= '<a href="/emptycart"><button>Winkelwagen leegmaken</button></a>';
            $html .= ' <a href="/checkout"><button>Afrekenen</button></a>';
            $html .= '<div class="row">';
            foreach ($variants as $variantId => $quantity) {
                $variant = ProductVariant::find($variantId); 
                $html .= '<div class="col-12 card">';
                $html .= '<div class="row"><div class="col-8">';
                $html .= $quantity . 'x Model ' . $variant->product->name . ':';
                $html .= '<ul>';
                $html .= '<li>Kleur: ' . $variant->colour->name . '</li>';
                $html .= '<li>Gender: ' . $variant->gender->name . '</li>';
                $html .= '<li>Maat: ' . $variant->size->name . '</li>';
                $html .= '</ul>';
                $html .= '<div> <button id="add-one" pv_id="' . $variantId . '">+</button> ';
                $html .= '<button id="remove-one" pv_id="' . $variantId . '">-</button></div>';
                $html .= '</div><div class="col-4">';
                $html .= '<ul>';
                $html .= '<li>Prijs excl btw: &euro;' . $variant->product->price . '</li>';
                $html .= '<li>BTW: ' . $variant->product->vatPercentage() . '%</li>';
                $html .= '<li>Totaalprijs voor ' . $quantity . ' stuks: &euro;' . $variant->product->VatIncPrice($quantity) . '</li>';
                $html .= '</ul>';
                $html .= '</div></div></div>';
            } 
            $html .= '</div> Totaalprijs: &euro;' . self::totalPrice();
            $html .= ' <a href="/checkout"><button>Afrekenen</button></a>';
        } else {
            //html for an empty cart
            $html = '<h1>Winkelwagen</h1>';
            $html .= 'Je winkelwagen is leeg!';
        }
        return $html;        
    }
    // <ul>                        
    //     <li>Prijs excl btw: {{$variant->product->price}}</li>
    //     <li>BTW: {{$variant->product->vatPercentage()}}%</li>
    //     <li>Totaalprijs voor {{$cart[$variant->id]}} stuks: {{$variant->product->vatIncPrice($cart[$variant->id])}}</li>
    // </ul> 
}
