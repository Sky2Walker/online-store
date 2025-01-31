<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{


    public function __construct(
        protected Product $productModel
    ){}

    public function getAllProducts(){
        // TODO добавить ::query()->select(['id', ....]) полей, которые нужны
        // TODO сделать пагинацию или limit(), никаких all нигде
        // TODO Как быть с ценами?
        return $this->productModel::query()->select(['id','name','category_id','product_img', 'raitings'])->paginate(20);
    }



}
