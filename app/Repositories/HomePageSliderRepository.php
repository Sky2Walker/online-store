<?php

namespace App\Repositories;

use App\Models\HomePageSlider;

class HomePageSliderRepository
{
    protected $homePageSliderModel;
    public function __construct(HomePageSlider $homePageSliderModel){
        $this->homePageSliderModel = $homePageSliderModel;
    }

    public function getAll(){
        return $this->homePageSliderModel->all();
    }
}
