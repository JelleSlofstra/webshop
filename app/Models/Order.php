<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id'
    ];

    public function orderedProducts()
    {
        return $this->hasMany(OrderedProduct::class);
    }

    public static function totalOrderPrice(Order $order)
    {
        $bill = 0;

        foreach ($order->orderedProducts as $products)
        {
            $bill += $products->amount * $products->price * $products->vat; 
        }
        
        return number_format($bill,2);
    }
}
