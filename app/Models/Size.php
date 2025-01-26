<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';

    public function sizeToProductVariants(){
        return $this->hasMany(ProductVariant::class, 'size_id');
    }
}
