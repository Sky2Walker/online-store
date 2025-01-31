<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Size extends Model
{
    protected $table = 'sizes';

    public function sizeToProductVariants() : HasMany{
        return $this->hasMany(ProductVariant::class, 'size_id');
    }


    public function productSizes() : HasManyThrough
    {
        return $this->hasManyThrough(Product::class, ProductVariant::class);
    }
}
