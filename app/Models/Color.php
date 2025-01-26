<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';

    public function colorsToProductVariants()
    {
        return $this->hasMany(ProductVariant::class, 'color_id');
    }
}
