<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $with = ['manufacturer', 'category', 'productImages'];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function productVariants()
    {
        return $this->hasMany(ProductVariant::class);
    }
  
    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false)    {
            $query
                ->where('name', 'like', '%' . request('search') . '%' )
                ->whereOr('description', 'like', '%' . request('search') . '%' );
    }}

}
