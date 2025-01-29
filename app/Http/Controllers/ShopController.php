<?php

namespace App\Http\Controllers;

use App\Models\CategoriesGroups;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\CategoriesGroupsService;
class ShopController extends Controller
{
    protected $productService, $categoryService;

    public function __construct(ProductService $productService, CategoriesGroupsService $categoryService){
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }


    public function index(){
        $products = $this->productService->getAllProducts();
        $categoriesGroups = $this->categoryService->getAllCategoriesGroups();



        return view('shop', compact('products', 'categoriesGroups'));
    }

    public function showProductByTheySubCategories($id){
        $products = $this ->productService->getProductBySubCategoryId($id);
        return view('shop', compact('products'));
    }
}
