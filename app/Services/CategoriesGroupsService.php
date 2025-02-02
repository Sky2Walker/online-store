<?php

namespace App\Services;
use App\Repositories\CategoriesGroupsRepository;
use Illuminate\Support\Facades\Cache;

class CategoriesGroupsService
{


    public function __construct(
        protected CategoriesGroupsRepository $categoriesGroupsRepository
    ){}

    public function getAllCategoriesGroups(){

        $categoriesGroups = Cache::remember('categoriesGroups:all', 'CACHE_LIFETIME', function(){
            return $this->categoriesGroupsRepository->getAll();
        });
        return $categoriesGroups;
    }

    public function getCategoryGroup($categoriesGroupSlug, $perPage){
        return $this->categoriesGroupsRepository->getCategoryGroup($categoriesGroupSlug, $perPage);
    }
}
