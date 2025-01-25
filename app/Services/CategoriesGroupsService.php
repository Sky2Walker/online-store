<?php

namespace App\Services;
use App\Repositories\CategoriesGroupsRepository;
class CategoriesGroupsService
{
    protected $categoriesGroupsRepository;

    public function __construct(CategoriesGroupsRepository $categoriesGroupsRepository){
        $this->categoriesGroupsRepository = $categoriesGroupsRepository;
    }

    public function getAllCategoriesGroups(){
        $categoriesGroups = $this->categoriesGroupsRepository->getAll();
        return $categoriesGroups;
    }
}
