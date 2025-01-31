<?php

namespace App\Http\Controllers;

use App\Models\CategoriesGroups;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\CategoriesGroupsService;
class ShopController extends Controller
{


    public function __construct(
        protected  ProductService $productService,
        protected  CategoriesGroupsService $categoryService
    ){}


    public function index(){
        $products = $this->productService->getAllProducts();
        $categoriesGroups = $this->categoryService->getAllCategoriesGroups();



        return view('shop', compact('products', 'categoriesGroups'));
    }

    // TODO
    // почему тут фигурирует сущность sub category, если такой таблицы даже нет? есть только группы категорий и сами категории

    // репозиторий категорий, в нем ты получаешь категорию и по связи получаешь ее продукты с пагинацией
    // ОБЯЗАТЕЛЬНО во всех выборках и продуктов и категории использовать select и paginate
    // категорию можно получать по slug из урла, откуда ты выкопаешь ее айдишник
    public function getProductByCategoriesGroupsSlug($categorisGroupsSlug){
        $products = $this ->categoryService->getProductsByCategoriesGroups($categorisGroupsSlug);

        return view('shop', compact('products'));
    }
}
