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
        // TODO добавить ::query()->select(['id', ....]) полей, которые нужны
        return $this->categoriesGroups->all();
    }
}
