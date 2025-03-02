<?php

namespace App\Services;

use App\Repositories\ColorRepository;
use Illuminate\Support\Facades\Cache;

class ColorService
{


    public function __construct(
        protected ColorRepository $colorRepository
    )
    {
    }

    public function getColors(){
        return $colors = $this->colorRepository->getColors();
    }
}
