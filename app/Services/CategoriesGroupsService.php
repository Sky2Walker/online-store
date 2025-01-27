<?php

namespace App\Services;
use App\Repositories\CategoriesGroupsRepository;
use Illuminate\Support\Facades\Cache;

class CategoriesGroupsService
{
    protected $categoriesGroupsRepository;

    public function __construct(CategoriesGroupsRepository $categoriesGroupsRepository){
        $this->categoriesGroupsRepository = $categoriesGroupsRepository;
    }

    public function getAllCategoriesGroups(){

        $categoriesGroups = Cache::remember('categoriesGroups:all', 3600, function(){
            return $this->categoriesGroupsRepository->getAll();
        });
        return $categoriesGroups;
    }
}
