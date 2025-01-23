<?php

namespace App\Http\Controllers;

use App\Models\CategoriesGroups;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $products = Product::all();
        $categoriesGroups = CategoriesGroups::all();
        return view('shop', compact('products', 'categoriesGroups'));
    }
}
