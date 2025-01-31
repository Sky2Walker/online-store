<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class ProductService
{


    public function __construct(
        protected   ProductRepository $productRepository
    )
    {}

    public function getAllProducts()
    {

        $products = Cache::remember('products:all', 'CACHE_LIFETIME', function () {
           return $this->productRepository->getAllProducts();
        });
        return $products;
    }




}
