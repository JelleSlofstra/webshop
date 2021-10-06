<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{
    use HasFactory;
    protected $table = 'ordered_products';
    protected $fillable = [ 
        'order_id', 
        'amount', 
        'product_variant_id',
        'price', 
        'vat'
    ];

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
