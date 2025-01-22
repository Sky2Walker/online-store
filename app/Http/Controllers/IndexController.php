<?php

namespace App\Http\Controllers;

use App\Models\CategoriesGroups;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categoriesGroups = CategoriesGroups::all();
        $products = Product::all();

        return view('home', compact('categoriesGroups', 'products'));
    }
}
