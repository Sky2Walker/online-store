<?php

namespace App\Services;

use App\Repositories\SizeRepository;
use Illuminate\Support\Facades\Cache;

class SizeService
{


    public function __construct(
        protected SizeRepository $sizeRepository
    )
    {
    }

    public function getSizes(){
        return $this->sizeRepository->getSizes();
    }
}
