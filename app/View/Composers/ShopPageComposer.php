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
        $data = $view->getData();

        if (!isset($data['products'])) {
            $products = $this->productService->getAllProducts();
            $view->with('products', $products);
        }

        $categoriesGroup =$this->categoryService->getAllCategoriesGroups();
        $view->with('categoriesGroup', $categoriesGroup);
    }



}
