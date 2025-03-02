<?php

namespace App\View\Composers;


use App\Services\CategoriesGroupsService;
use App\Services\ColorService;
use App\Services\MaterialService;
use App\Services\ProductService;
use App\Services\SizeService;
use Illuminate\View\View;

class ShopPageComposer
{
    /**
     * Create a new ShopPage composer.
     */
    public function __construct(
        protected ProductService          $productService,
        protected CategoriesGroupsService $categoryService,
        protected ColorService           $colorService,
        protected MaterialService         $materialService,
        protected SizeService            $sizeService,
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
        $colors = $this->colorService->getColors();
        $materials = $this->materialService->getMaterials();
        $categoriesGroup =$this->categoryService->getAllCategoriesGroups();
        $sizes = $this->sizeService->getSizes();
        $view->with([
            'categoriesGroup' => $categoriesGroup,
            'colors' => $colors,
            'materials' => $materials,
            'sizes' => $sizes,
        ]);
    }



}
