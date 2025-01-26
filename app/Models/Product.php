<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Product extends Model
{
    use   HasFactory;

    protected $table = 'products';


    public function category() :BelongsTo
    {
        return $this->belongsTo(CategoriesGroups::class, 'category_id');
    }

    public function variants():HasMany{
        return $this->hasMany(ProductVariant::class, 'product_id');
    }


    public function colors(): HasManyThrough{
        return $this->hasManyThrough(Color::class, ProductVariant::class);
    }

    public function sizes(): HasManyThrough{
        return $this->hasManyThrough(Size::class, ProductVariant::class);
    }



}
