<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriesGroups extends Model
{
    protected $table = 'categories_groups';

    public function categories(){
        return $this -> belongsTo(Category::class, 'category_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
