<?php

namespace App\Services;

use App\Repositories\HomePageSliderRepository;
use Illuminate\Support\Facades\Cache;

class HomePageSliderService
{
    protected $homePageSliderRepository;
    public function __construct(HomePageSliderRepository $homePageSliderRepository){
        $this->homePageSliderRepository = $homePageSliderRepository;
    }

    public function getHomePageSlider(){
        // TODO вынести значение времени хранения кеша в env и пробросить через config
        $homePageSlider = Cache::remember('homePageSlider', 3600, function(){
            return $this->homePageSliderRepository->getAll();
        });
        return $homePageSlider;
    }
}
