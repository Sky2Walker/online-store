<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariant extends Model
{
    protected $table = 'product_variants';

    public function product():BelongsTo{
        return $this->belongsTo(Product::class, 'product_id');

    }

    public function color():BelongsTo
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function size():BelongsTo{
        return $this->belongsTo(Size::class, 'size_id');
    }

    public function material():BelongsTo{
        return $this->belongsTo(Material::class, 'material_id');
    }
}
