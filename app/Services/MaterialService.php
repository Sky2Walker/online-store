<?php

namespace App\Services;

use App\Repositories\MaterialRepository;
use Illuminate\Support\Facades\Cache;

class MaterialService
{


    public function __construct(
        protected MaterialRepository $materialRepository
    )
    {
    }

    public function getMaterials(){
        return $this->materialRepository->getMaterials();
    }
}
