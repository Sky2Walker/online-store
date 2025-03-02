<?php

namespace App\Repositories;

use App\Models\Color;

class ColorRepository
{


    public function __construct(
        protected Color $color
    )
    {
    }

    public function getColors(){
        return $this->color->all();
    }




}
