<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CartContent extends Model
{
    use HasFactory;

    protected $table = 'cart_contents';
    protected $fillable = ['cart_id', 'amount', 'product_variant_id'];

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
