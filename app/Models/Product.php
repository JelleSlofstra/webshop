<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }
}
