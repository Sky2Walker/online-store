<?php

namespace App\Http\Controllers;

use App\Models\CategoriesGroups;
use App\Models\Product;
use App\Services\CategoriesGroupsService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    protected $productService, $categoryService;

    public function __construct(ProductService $productService, CategoriesGroupsService $categoryService){
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        $products = $this->productService->getAllProducts();
        $categoriesGroups = $this->categoryService->getAllCategoriesGroups();

        return view('home', compact('categoriesGroups', 'products'));
    }
}
