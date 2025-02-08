<?php

namespace App\Http\Controllers;

use App\Models\CategoryGroup;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\CategoriesGroupsService;

class ShopController extends Controller
{


    public function __construct(
        protected ProductService          $productService,
        protected CategoriesGroupsService $categoryService
    )
    {
    }


    public function index()
    {
        $products = $this->productService->getAllProducts();
        $categoryGroups = $this->categoryService->getAllCategoriesGroups();
        return view('shop', compact('products', 'categoryGroups'));
    }


    public function getCategoryGroup(string $categoriesGroupSlug, int $perPage = 20)
    {
        $products = $this->categoryService->getCategoryGroup($categoriesGroupSlug, $perPage);
        $categoryGroups = $this->categoryService->getAllCategoriesGroups();

        return view('shop', compact('products', 'categoryGroups'));
    }
}
