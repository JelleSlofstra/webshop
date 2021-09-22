<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class ProductVariant extends Model
{
    use HasFactory;

    protected $table = 'product_variants';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function colour()
    {
        return $this->belongsTo(ProductColour::class, 'product_colour_id');
    }

    public function gender()
    {
        return $this->belongsTo(ProductGender::class, 'product_gender_id');
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class, 'product_size_id');
    }

    /**
     * Find the correct variant given the properties
     *
     * @param  \Illuminate\Http\Request  $request
     * @return ProductVariant
     */
    public static function findVariant(Request $request)
    {
        return ProductVariant::get()
                            ->where('product_id', $request->product_id)
                            ->where('product_size_id', $request->size_id)
                            ->where('product_gender_id', $request->gender_id)
                            ->where('product_colour_id', $request->colour_id)
                            ->first();
    }
}
