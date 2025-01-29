<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    // TODO камелкейс в названиях методов
    public function categories_groups(){
        return $this->hasMany(CategoriesGroups::class, 'category_id');
    }



}
