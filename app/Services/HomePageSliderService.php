<?php

namespace App\Services;

use App\Repositories\HomePageSliderRepository;
use Illuminate\Support\Facades\Cache;

class HomePageSliderService
{

    public function __construct(
        protected HomePageSliderRepository $homePageSliderRepository
    ){}

    public function getHomePageSlider(){
        // TODO вынести значение времени хранения кеша в env и пробросить через config
        $homePageSlider = Cache::remember('homePageSlider', config('cache.lifetime') , function(){
            return $this->homePageSliderRepository->getAll();
        });
        return $homePageSlider;
    }
}
