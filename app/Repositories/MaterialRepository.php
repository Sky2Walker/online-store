<?php

namespace App\Repositories;

use App\Models\Material;

class MaterialRepository
{


    public function __construct(
        protected Material $material
    )
    {
    }


    public function getMaterials(){
        return $this->material->all();
    }



}
