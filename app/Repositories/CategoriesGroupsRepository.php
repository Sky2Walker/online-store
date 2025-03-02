<?php

namespace App\Repositories;

use App\Models\CategoryGroup;

class CategoriesGroupsRepository

{
    protected const DEFAULT_SELECT_FIELDS = [
        'slug',
        'name',
        'img',
        'id',
        'category_id',
        'ratings'
    ];

    public function __construct(
        protected CategoryGroup $categoriesGroups)
    {
    }

    public function getAll()
    {

        return $this->categoriesGroups::query()->select('id', 'name', 'slug', 'img', 'is_active', 'is_on_main_menu')->get();
    }

    public function getCategoryGroup(string $categoriesGroupSlug, int $perPage)
    {
        $categoryGroup = $this->categoriesGroups::query()
            ->select(['id', 'name', 'slug'])
            ->where('slug', $categoriesGroupSlug)
            ->firstOrFail();


        $products = $categoryGroup->products()
            ->select('id', 'name', 'slug', 'img', 'ratings', 'category_id', 'description')
            ->with(['variants' => function($query) {
                $query->select('product_id', 'price');
            }])
            ->paginate($perPage);


        return $products;
    }

}
