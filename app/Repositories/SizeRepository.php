<?php

namespace App\Repositories;

use App\Models\Size;

class SizeRepository
{


    public function __construct(
        protected Size $size
    )
    {
    }


    public function getSizes(){
        return $this->size->all();
    }



}
