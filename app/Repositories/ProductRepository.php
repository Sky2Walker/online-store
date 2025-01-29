<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    protected $productModel;

    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function getAllProducts(){
        // TODO добавить ::query()->select(['id', ....]) полей, которые нужны
        // TODO сделать пагинацию или limit(), никаких all нигде
        return $this->productModel->all();
    }

    public function getProductBySubCategoryId($subCategoryId){
        return $this->productModel->category()->where('category_id', $subCategoryId)->firstOrFail();
    }

}
