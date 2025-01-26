<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materials';

    public function materialToProductVariants()
    {
        return $this->hasMany(ProductVariant::class, 'material_id');

    }
}
