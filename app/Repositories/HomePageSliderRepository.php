<?php

namespace App\Repositories;

use App\Models\HomePageSlider;

class HomePageSliderRepository
{

    public function __construct(
        protected HomePageSlider $homePageSliderModel
    )
    {
    }

    public function getAll()
    {
        return $this->homePageSliderModel::query()->select('title', 'img', 'is_active')->paginate(4);
    }
}
