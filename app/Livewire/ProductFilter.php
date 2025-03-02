<?php

namespace App\Livewire;

use App\Services\ProductService;
use Livewire\Component;
use App\Services\CategoriesGroupsService;

class ProductFilter extends Component
{

    public $categoriesGroup;
    public $selectedCategory = null;

    public function mount(CategoriesGroupsService $categoriesGroupsService)
    {
        $this->categoriesGroup = $categoriesGroupsService->getAllCategoriesGroups();
    }

    public function updatedSelectedCategory($categoryId)
    {
        $this->dispatch('categoryUpdated', $categoryId);
    }

    public function render()
    {
        return view('livewire.product-filter', [
            'categoriesGroup' => $this->categoriesGroup
        ]);
    }
}
