<?php

namespace App\Livewire;

use App\Services\CategoriesGroupsService;
use App\Services\ProductService;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination; // Подключаем пагинацию

    public $categoryId = null;
    protected $listeners = ['categoryUpdated' => 'updateCategory'];

    public function updateCategory($categoryId)
    {
        $this->categoryId = $categoryId;
        $this->resetPage(); // Сбрасываем страницу при смене категории
    }

    public function render(ProductService $productService)
    {
        // Если категория выбрана – фильтруем, если нет – все товары
        $products = $this->categoryId
            ? $productService->getProductsByCategory($this->categoryId)
            : $productService->getAllProducts();




        return view('livewire.product-list', [
            'products' => $products,
        ]);
    }
}
