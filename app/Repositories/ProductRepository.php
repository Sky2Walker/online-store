<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{


    public function __construct(
        protected Product $productModel
    )
    {
    }

    public function getAllProducts()
    {
        return $this->productModel::query()->select(['id', 'name', 'category_id', 'img', 'ratings'])
            ->with('variants')
            ->paginate(20);
    }

    public function getProductPrice(int $id)
    {
        return $this->productModel->variants()->select(['price'])->where('id', $id)->firstOrFail();
    }


}
