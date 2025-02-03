<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Material extends Model
{
    protected $table = 'materials';

    public function materialToProductVariants() :HasMany
    {
        return $this->hasMany(ProductVariant::class, 'material_id');

    }

    public function productsMaterial() :HasManyThrough
    {
        return $this->hasManyThrough(Product::class, ProductVariant::class,
        'material_id',
        'product_id',
        'id',
            'id'
        );
    }
}
