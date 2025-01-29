<?php

namespace App\Http\Controllers;

use App\Models\CategoriesGroups;
use App\Models\Product;
use App\Services\CategoriesGroupsService;
use App\Services\HomePageSliderService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class IndexController extends Controller
{

//    protected $productService, $categoryService;
//
//    public function __construct(ProductService $productService, CategoriesGroupsService $categoryService){
//        $this->productService = $productService;
//        $this->categoryService = $categoryService;
//    }

    // TODO более краткий и читабельный вариант
    public function __construct(
        protected ProductService          $productService,
        protected CategoriesGroupsService $categoryService,
        protected HomePageSliderService $homePageSliderService
    ){}

    public function index()
    {
        $products = $this->productService->getAllProducts();

        $categoriesGroups = $this->categoryService->getAllCategoriesGroups();
        $homePageSlider = $this->homePageSliderService->getHomePageSlider();
        return view('home', compact('categoriesGroups', 'products', 'homePageSlider'));
    }
}
