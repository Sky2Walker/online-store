<?php

namespace App\Repositories;
use App\Models\CategoriesGroups;
class CategoriesGroupsRepository
{

    public function __construct(
        protected CategoriesGroups $categoriesGroups){}

    public function getAll(){

        return $this->categoriesGroups::query()->select('id','name', 'slug','category_img','is_active','onMainMenu')->get();
    }

    public function getProductsByCategoriesGroups($categorisGroupsSlug){
        $catId =$this->categoriesGroups::query()->select('id')->where('slug',$categorisGroupsSlug)->firstOrFail();
        return $this->categoriesGroups->products()->select('id','name', 'slug', 'product_img', 'raitings')->where('category_id', $catId->id)->paginate(20);
    }
}
