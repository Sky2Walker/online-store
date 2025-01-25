<?php

namespace App\Repositories;
use App\Models\CategoriesGroups;
class CategoriesGroupsRepository
{
    protected $categoriesGroups;
    public function __construct(CategoriesGroups $categoriesGroups){
        $this->categoriesGroups = $categoriesGroups;
    }

    public function getAll(){
        return $this->categoriesGroups->all();
    }
}
