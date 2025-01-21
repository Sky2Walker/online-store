<?php

namespace App\Http\Controllers;

use App\Models\CategoriesGroups;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categoriesGroups = CategoriesGroups::all();

        return view('home', compact('categoriesGroups'));
    }
}
