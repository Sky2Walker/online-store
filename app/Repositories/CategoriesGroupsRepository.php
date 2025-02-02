<?php

namespace App\Repositories;
use App\Models\CategoriesGroups;
class CategoriesGroupsRepository

{
    protected const DEFAULT_SELECT_FIELDS = [
        'slug',
        'name',
        'product_img',
        'id',
        'category_id',
        'ratings'
    ];
    public function __construct(
        protected CategoriesGroups $categoriesGroups){}

    public function getAll(){

        return $this->categoriesGroups::query()->select('id','name', 'slug','category_img','is_active','onMainMenu')->get();
    }

    public function getCategoryGroup($categoriesGroupSlug, $perPage){
        return $this->categoriesGroups::query()->select(['products.id','name', 'slug', 'product_img', 'ratings'])
            ->with(['products' => fn($query) => $query
                ->select('products.id','name', 'slug', 'product_img', 'ratings')->paginate($perPage)])
            ->where('slug',$categoriesGroupSlug)->firstOrFail();
    }
}
