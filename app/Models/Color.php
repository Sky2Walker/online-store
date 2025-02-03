<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Color extends Model
{
    protected $table = 'colors';

    public function colorsToProductVariants(): HasMany
    {
        return $this->hasMany(ProductVariant::class, 'color_id');
    }


    public function productColors(): HasManyThrough
    {
        return $this->hasManyThrough(Product::class, ProductVariant::class,
            'color_id',
            'product_id',
            'id',
            'id'
        );
    }
}
