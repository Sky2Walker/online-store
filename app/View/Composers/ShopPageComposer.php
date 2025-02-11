<?php

namespace App\View\Composers;


use App\Services\CategoriesGroupsService;
use App\Services\ProductService;
use Illuminate\View\View;

class ShopPageComposer
{
    /**
     * Create a new ShopPage composer.
     */
    public function __construct(
        protected ProductService          $productService,
        protected CategoriesGroupsService $categoryService
    )
    {
    }

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $categoriesGroups = $this->categoryService->getAllCategoriesGroups();
        $products = $this->productService->getAllProducts();

        $view->with('data', compact('categoriesGroups', 'products'));
    }
}
